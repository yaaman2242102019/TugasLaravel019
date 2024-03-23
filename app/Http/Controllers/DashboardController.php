<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Hash;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.content.dashboard');
    }

    public function profile(){
        return view('backend.content.profile');
    }

    public function resetpassword(){
        return view('backend.content.resetpassword');
    }

    public function prosesResetpassword(Request $request){
        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'c_new_password' => 'required_with:new_password|same:new_password|min:6',
        ]);

        $old_password = $request->old_password;
        $new_password = $request->new_password;

        $id = Auth::guard('user')->user()->id;
        $user = User::findOrFail($id);

        if (Hash::check($old_password, $user->password)){
            $user->password = bcrypt($new_password);

            try{
                $user->save();
                return redirect(route('dashboard.resetpassword'))->with('pesan',['success','Selamat anda berhasil ubah password']);
            }catch (\Exception $e){
                return redirect(route('dashboard.resetpassword'))->with('pesan',['danger','anda gagal ubah password']);

            }
        }else{
            return redirect(route('dashboard.resetpassword'))->with('pesan',['danger','password lama salah']);
        }
    }
}



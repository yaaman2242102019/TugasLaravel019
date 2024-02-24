<?php


use App\Http\Controllers\AuthController as AuthControllerAlias;
use App\Http\Controllers\DashboardController as DashboardControllerAlias;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthControllerAlias::class, 'index'])->name('auth.index')->middleware('guest');
Route::post('/login', [AuthControllerAlias::class, 'Verify'])->name('auth.verify');

Route::group(['middleware' => 'auth:user'], function () {
    Route::prefix('admin')->group(function (){
        Route::get('/', [DashboardControllerAlias::class, 'index'])->name('dashboard.index');
        Route::get('/profile', [DashboardControllerAlias::class, 'profile'])->name('dashboard.profile');

    });
    Route::get('/logout', [AuthControllerAlias::class, 'logout'])->name('auth.logout');
});



@extends('backend/layout/main')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Form Ubah User</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{route('user.prosesUbah')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama User</label>
                        <input type="text" name="name" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <span style="color: red; font-weight: 600; font-size: 9pt">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email User</label>
                        <input type="email" name="email" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <span style="color: red; font-weight: 600; font-size: 9pt">{{$message}}</span>
                        @enderror
                    </div>
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <a href="{{route('user.index')}}" class="btn btn-secondary">kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection


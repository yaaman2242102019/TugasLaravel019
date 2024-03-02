@extends('backend/layout/main')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Form Tambah kategori</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{route('kategori.prosesTambah')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama kategori</label>
                        <input type="text" name="nama_kategori" value="{{old('nama_kategori')}}" class="form-control @error('nama_kategori') is-invalid @enderror">
                        @error('nama_kategori')
                        <span style="color: red; font-weight: 600; font-size: 9pt">{{$message}}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{route('kategori.index')}}" class="btn btn-secondary">kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection

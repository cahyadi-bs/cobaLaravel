@extends('layout/main')

@section('title', 'Form Create New Student')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
            <h1 class="mt-3">Form Create New Student</h1>
            
            <form method="post" action="/students">
                {{-- Proteksi CSRF --}}
                @csrf
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Input Name ... " name="nama" value="{{old('nama')}}">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="text" class="form-control @error('npm') is-invalid @enderror" id="npm" placeholder="Input NPM ... " name="npm" value="{{old('npm')}}">
                    @error('npm')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Input Email ... " name="email" value="{{old('email')}}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Input Jurusan ... " name="jurusan" value="{{old('jurusan')}}">
                    @error('jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>

            </div>
        </div>
    </div>
@endsection
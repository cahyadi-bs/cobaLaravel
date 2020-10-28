@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <table class="table mt-3">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($mahasiswa as $mhs)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->npm}}</td>
                    <td>{{$mhs->email}}</td>
                    <td>{{$mhs->jurusan}}</td>
                    <td>
                        {{-- <a href="#" class="badge badge-primary">Detail</a> --}}
                        <a href="#" class="badge badge-secondary">Edit</a>
                        <a href="#" class="badge badge-danger">Hapus</a>
                    </td>
                </tr>              
                @endforeach
                </tbody>
            </table>

            </div>
        </div>
    </div>
@endsection
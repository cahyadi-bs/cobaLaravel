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
                <tr>
                    <th scope="row">1</th>
                    <td>Cahyadi Bayu Saputro</td>
                    <td>1606835172</td>
                    <td>cahbayu27@gmail.com</td>
                    <td>Teknik Komputer</td>
                    <td>
                        <a href="#" class="badge badge-primary">Detail</a>
                        <a href="#" class="badge badge-secondary">Edit</a>
                        <a href="#" class="badge badge-danger">Hapus</a>
                    </td>
                </tr>
                </tbody>
            </table>

            </div>
        </div>
    </div>
@endsection
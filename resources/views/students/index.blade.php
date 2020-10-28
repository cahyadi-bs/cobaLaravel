@extends('layout/main')

@section('title', 'List of Students')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="mt-3">List of Students</h1>
            <ul class="list-group mt-3">
                @foreach ($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $student->nama }}
                    <a href="/students/{{$student->id}}" class="badge badge-info">Detail</a>
                </li>                 
                @endforeach
            </ul>

            </div>
        </div>
    </div>
@endsection
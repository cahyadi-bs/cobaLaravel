@extends('layout/main')

@section('title', 'Student Detail')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="mt-3">Student Detail</h1>
            
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->npm }}</h6>
                    <p class="card-text">{{ $student->email }}</p>
                    <p class="card-text">{{ $student->jurusan }}</p>

                    
                    <a href="/students/{{$student->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="/students/{{$student->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-submit-delete">Delete</button>
                    </form>
                    <a href="/students" class="btn btn-success">Back</a>
                </div>
            </div>

            </div>
        </div>
    </div>
@endsection
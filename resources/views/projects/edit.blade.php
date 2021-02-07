@extends('layout')

@section('content')

    <div class="container">

        <h1 class="my-5">Edit Project</h1>

        <form action="/projects/{{$project->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div>
                <input value="{{ $project->title }}" class="form-control" type="text" name="title" placeholder="Project Title">
            </div>

            <div class="mt-3">
                <textarea class="form-control" name="description" placeholder="Project Description">{{ $project->description }}</textarea>
            </div>

            <div class="mt-3">
                <button class="btn btn-primary" type="submit">Update Project</button>
            </div>
        </form>

    </div>
    <!-- /.container -->
@endsection

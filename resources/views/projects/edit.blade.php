@extends('layout')

@section('styles')
    <style></style>
@endsection

@section('content')

    <div class="container">

        <h1 class="my-5">Edit Project</h1>


        <form action="/projects/{{ $project->id }}" method="POST">
            @csrf
            @method('PATCH')
            <div>
                <input value="{{ $project->title }}" class="form-control" type="text" name="title"
                    placeholder="Project Title">
            </div>

            <div class="mt-3">
                <textarea class="form-control" name="description"
                    placeholder="Project Description">{{ $project->description }}</textarea>
            </div>

            <div class="mt-3">
                <button class="btn btn-primary" type="submit">Update Project</button>
            </div>
        </form>

        <form action="/projects/{{ $project->id }}" method="POST">
            @method("DELETE")
            @csrf
            <button class="btn btn-danger mt-3" type="submit">DELETE Project</button>
        </form>



    </div>
    <!-- /.container -->
@endsection

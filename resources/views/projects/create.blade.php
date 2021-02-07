@extends('layout')

@section('content')

    <div class="container">
        <h1 class="my-5">Create Project</h1>

        <form action="/projects" method="POST">
            @csrf
            <div class="mb-3">
                <input class="form-control" type="text" name="title" placeholder="Project Title">
            </div>

            <div class="mb-3">
                <textarea class="form-control" name="description" placeholder="Project Description"></textarea>
            </div>

            <div>
                <button class="btn btn-success" type="submit">Create Project</button>
            </div>

        </form>
    </div>
    <!-- /.container -->

@endsection

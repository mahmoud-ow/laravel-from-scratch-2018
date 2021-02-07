@extends('layout')

@section('styles')
    <style></style>
@endsection

@section('content')

    <div class="container">

        <h1 class="my-5">{{$project->title}}</h1>

        <div class="container">{{ $project->description }}</div>

        <hr>
        
        <a href="/projects/{{ $project->id }}/edit" class="btn btn-success">Edit Project</a>

    </div>
    <!-- /.container -->
@endsection

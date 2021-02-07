@extends('layout')
@section('styles')

    <style>
        
        ul{
            list-style: none;
        }

    </style>

@endsection
@section('content')
    <div class="container">
        <h1 class="my-5">
            Projects
            <a style="font-size: 14px;margin-inline-start:20px;" class="btn btn-info btn-sm"
                href="/projects/create">create</a>
        </h1>

        <ul>
            @foreach ($projects as $project)
                <li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>
            @endforeach
        </ul>
    </div>
    <!-- /.container -->
@endsection

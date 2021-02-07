@extends('layout')

@section('styles')
    <style></style>
@endsection

@section('content')

    <div class="container">

        <h1 class="my-5">{{ $project->title }}</h1>

        <div class="container">
            <h4>{{ $project->description }}</h4>
            <p style="border-top: thin solid #333;">
                <a href="/projects/{{ $project->id }}/edit" class="">Edit</a>
            </p>
        </div>

        @if ($project->tasks->count())
            <div class="my-3">
                @foreach ($project->tasks as $task)
                    <li>{{ $task->description }}</li>
                @endforeach
            </div>
        @endif


        

    </div>
    <!-- /.container -->
@endsection

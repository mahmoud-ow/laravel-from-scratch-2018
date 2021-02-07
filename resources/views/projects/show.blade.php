@extends('layout')

@section('styles')
    <style>
        .is-completed{
            text-decoration: line-through;
        }
    </style>
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

                    <form method="POST" action="/tasks/{{$task->id}}">
                        @method("PATCH")
                        @csrf
                        <div class="form-check">
                            <input {{ $task->completed  ? 'checked' : ''}} class="form-check-input" type="checkbox" value="" id="task_{{$task->id}}" name="completed" onchange="this.form.submit()">
                            <label class="form-check-label {{ $task->completed  ? 'is-completed' : ''}}" for="task_{{$task->id}}">
                               {{$task->description}}
                            </label>
                        </div>
                    </form>

                @endforeach
            </div>
        @endif




    </div>
    <!-- /.container -->
@endsection

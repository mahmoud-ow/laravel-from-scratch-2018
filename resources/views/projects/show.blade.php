@extends('layout')

@section('styles')
    <style>
        .is-completed {
            text-decoration: line-through;
        }
        .is-danger {
            border-color: red;
        }
    </style>
@endsection

@section('content')

    <div class="container">

        <h1 class="my-4">{{ $project->title }}</h1>

        <div class="container">
            <h6>{{ $project->description }}</h6>
            <p style="border-top: thin solid #333;margin-bottom:50px;">
                <a href="/projects/{{ $project->id }}/edit" class="">Edit</a>
            </p>
        </div>

        @if ($project->tasks->count())
            <div class="my-3">
                @foreach ($project->tasks as $task)

                    <form method="POST" action="/tasks/{{ $task->id }}">
                        @method("PATCH")
                        @csrf
                        <div class="form-check">
                            <input {{ $task->completed ? 'checked' : '' }} class="form-check-input" type="checkbox"
                                value="" id="task_{{ $task->id }}" name="completed" onchange="this.form.submit()">
                            <label class="form-check-label {{ $task->completed ? 'is-completed' : '' }}"
                                for="task_{{ $task->id }}">
                                {{ $task->description }}
                            </label>
                        </div>
                    </form>

                @endforeach
            </div>
        @endif



        {{-- Add A New Task Form --}}

        <form class="mt-5" action="/projects/{{ $project->id }}/tasks" method="POST">
            @csrf
            <textarea name="description" class="form-control {{ $errors->has('description') ? 'is-danger' : '' }}"></textarea>
            <button type="submit" class="btn mt-3 btn-primary">Add Task</button>
        </form>


        @include('errors')


    </div>
    <!-- /.container -->
@endsection

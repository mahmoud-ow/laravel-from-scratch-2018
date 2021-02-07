@extends('layout')

@section('styles')
    <style>
        .is-danger{
            border-color: red;
        }
    </style>
@endsection

@section('content')

    <div class="container">
        <h1 class="my-5">Create Project</h1>

        <form novalidate action="/projects" method="POST">
            @csrf
            <div class="mb-3">
                <input value="{{old('title')}}" required class="form-control {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" placeholder="Project Title">
            </div>

            <div class="mb-3">
                <textarea required class="form-control  {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="Project Description">{{old('description')}}</textarea>
            </div>

            <div>
                <button class="btn btn-success" type="submit">Create Project</button>
            </div>

            <div class="container mt-4">
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

            </div>

        </form>
    </div>
    <!-- /.container -->

@endsection

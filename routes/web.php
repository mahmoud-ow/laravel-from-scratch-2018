<?php

use App\Http\Controllers\CompletedTaskscontroller;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTasksController;
use App\Models\Example;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Route;


app()->singleton('Example', function(){
    return app('\App\Models\Example');
});

Route::get('/', function () {
    dd( app('Example'), app('Example') );
});


Route::resource('projects', ProjectController::class);


Route::post('/projects/{project}/tasks' , [ProjectTasksController::class, 'store']);
Route::post('/completed-tasks/{task}' , [CompletedTaskscontroller::class, 'store']);
Route::delete('/completed-tasks/{task}' , [CompletedTaskscontroller::class, 'destroy']);

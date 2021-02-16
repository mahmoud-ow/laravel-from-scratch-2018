<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTasksController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::resource('projects', ProjectController::class);


Route::post('/projects/{project}/tasks' , [ProjectTasksController::class, 'store']);
Route::patch('/tasks/{task}' , [ProjectTasksController::class, 'update']);
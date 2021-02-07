<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::resource('projects', ProjectController::class);

/* 
  GET /projects             (index)
  GET /projects/create      (create)
  POST /projects            (store)
  GET /projects/{id}        (show)
  GET /projects/{id}/edit   (edit)
  PATCH /projects/{id}      (update)
  DELETE /projects/{id}     (destroy)
*/



/* 
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::PATCH('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
Route::DELETE('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
 */
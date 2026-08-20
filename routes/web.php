<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index','form');

});

//list all tasks
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
//show create form
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
//store task
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
//show single task
Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
//show edit form
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
//update task
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
//delete task
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');


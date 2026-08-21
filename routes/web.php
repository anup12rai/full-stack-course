<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('index');
});

// List all tasks
Route::get('/tasks', [TaskController::class, 'index'])
    ->name('tasks.index');

// Show create form
Route::get('/tasks/create', [TaskController::class, 'create'])
    ->name('tasks.create');

// Store task
Route::post('/tasks', [TaskController::class, 'store'])
    ->name('tasks.store');

// Show single task
Route::get('/tasks/{task}', [TaskController::class, 'show'])
    ->name('tasks.show');

// Show edit form
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])
    ->name('tasks.edit');

// Update task
Route::put('/tasks/{task}', [TaskController::class, 'update'])
    ->name('tasks.update');

// Delete task
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])
    ->name('tasks.destroy');

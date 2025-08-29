<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; // Importe o TaskController

Route::get('/', function () {
    return view('tasks.index');
});

Route::get('/', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::post('/tasks/{task}/toggle', [TaskController::class, 'toggle'])->name('tasks.toggle');

Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');




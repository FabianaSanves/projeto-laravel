<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; // Importe o TaskController

Route::get('/', function () {
    return view('tasks.index');
});

Route::get('/', [TaskController::class, 'index']);
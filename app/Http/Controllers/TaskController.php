<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task; // Importe o modelo Task

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all(); // Busque todas as tarefas
        return view('tasks.index', compact('tasks')); // Passe-as para a view
    }
}
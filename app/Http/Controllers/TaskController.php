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

    public function store(Request $request)
    {
        // Cria uma nova tarefa com o título que veio do formulário
        Task::create([
            'title' => $request->title,
        ]);

        // Redireciona o usuário de volta para a página inicial
        return redirect('/');
    }

    public function toggle(Task $task)
    {
        $task->is_completed = !$task->is_completed;
        $task->save();

        return redirect('/');
    }
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/');
    }
}

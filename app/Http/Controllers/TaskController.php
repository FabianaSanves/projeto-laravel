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
        // Garante que um usuário não possa adicionar uma tarefa em branco
        $request->validate(
            [
                'title' => 'required|string|max:255',
            ],
            [
                'title.required' => 'Adicione sua tarefa.'
            ]
        );

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

    public function edit(Task $task)
    {
        // Passa a tarefa para a nova view de edição
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        // Valida os dados do formulário
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Atualiza a tarefa 
        $task->title = $request->title;

        // Atualiza o status
        $task->is_completed = $request->has('is_completed');

        $task->save();

        // Redireciona o usuário de volta para a página inicial
        return redirect('/');
    }
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/');
    }
}

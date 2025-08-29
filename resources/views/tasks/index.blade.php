<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Tarefas</title>
    <style>
        .completed {
            text-decoration: line-through;
            color: gray;
        }
    </style>
</head>

<body>
    <h1>Minhas Tarefas</h1>

    <form action="/tasks" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Nova tarefa...">
        <button type="submit">Adicionar</button>
    </form>
    <ul>
        @foreach ($tasks as $task)
        <li class="@if ($task->is_completed) completed @endif">
            {{ $task->title }}
            <form action="/tasks/{{ $task->id }}/toggle" method="POST" style="display:inline;">
                @csrf
                <button type="submit">Concluir</button>
            </form>
            <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>

</html>
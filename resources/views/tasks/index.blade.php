<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Tarefas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .completed {
            text-decoration: line-through;
            color: gray;
        }
    </style>
</head>

<body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="mb-4">Minhas Tarefas</h1>

                    <form action="{{ route('tasks.store') }}" method="POST" class="d-flex mb-4">
                        @csrf
                        <input type="text" name="title" class="form-control me-2" placeholder="Nova tarefa..." required>
                        <button type="submit" class="btn btn-primary">Adicionar tarefa</button>
                    </form>

                    <ul class="list-group">
                        @foreach ($tasks as $task)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="@if ($task->is_completed) completed @endif">
                                {{ $task->title }}
                            </span>
                            <div>
                                <form action="{{ route('tasks.toggle', $task) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success">Tarefa concluída</button>
                                </form>
                                <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Excluir tarefa</button>
                                </form>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
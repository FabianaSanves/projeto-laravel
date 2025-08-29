<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Tarefas</h1>

                        <form action="{{ route('tasks.store') }}" method="POST" class="d-flex mb-4">
                            @csrf
                            <input type="text" name="title" class="form-control me-2" placeholder="Nova tarefa..." required>
                            <button type="submit" class="btn btn-primary">Adicionar</button>
                        </form>
                        
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <ul class="list-group list-group-flush">
                            @foreach ($tasks as $task)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="@if ($task->is_completed) completed @endif">
                                    {{ $task->title }}
                                </span>
                                <div>
                                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-info text-white me-2">Editar</a>
                                    <form action="{{ route('tasks.toggle', $task) }}" method="POST" class="d-inline me-2">
                                        @csrf
                                        <button type="submit" class="btn btn-sm @if($task->is_completed) btn-warning @else btn-success @endif">
                                            @if($task->is_completed) Desfazer @else Concluir @endif
                                        </button>
                                    </form>
                                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                                    </form>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
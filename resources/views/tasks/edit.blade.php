<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Editar</h1>

                        <form action="{{ route('tasks.update', $task) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="title" class="form-label">Tarefa</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}">
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" name="is_completed" class="form-check-input" id="is_completed" @if($task->is_completed) checked @endif>
                                <label class="form-check-label" for="is_completed">Tarefa concluída</label>
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Atualizar</button>
                            <a href="{{ url('/') }}" class="btn btn-secondary">Cancelar</a>
                        </form>

                        @error('title')
                        <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Chiripa SA')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Chiripa SA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('apuestas.index') }}">Apuestas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('apuestas.create') }}">Crear Apuesta</a>
                </li>
                <!-- Agregar otros enlaces de navegación según sea necesario -->
            </ul>
        </div>
    </nav>

<div class="container">
    <h1>Crear Apuesta</h1>
    <form action="{{ route('apuestas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_juego">Juego</label>
            <select name="id_juego" id="id_juego" class="form-control">
                @foreach($juegos as $juego)
                <option value="{{ $juego->id }}">{{ $juego->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="datetime-local" name="fecha" id="fecha" class="form-control">
        </div>
        <div class="form-group">
            <label for="monto">Monto</label>
            <input type="number" name="monto" id="monto" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

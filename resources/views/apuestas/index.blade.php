<!DOCTYPE html>
<html lang="es">
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
        <h1 class="my-4">Lista de Apuestas</h1>
        @if($apuestas->isEmpty())
            <div class="alert alert-info" role="alert">
                No hay apuestas disponibles.
            </div>
        @else
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Juego</th>
                        <th>Fecha</th>
                        <th>Monto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($apuestas as $apuesta)
                    <tr>
                        <td>{{ $apuesta->id }}</td>
                        <td>{{ $apuesta->juego->nombre }}</td>
                        <td>{{ $apuesta->fecha }}</td>
                        <td>{{ $apuesta->monto }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <h1 class="my-4">Lista de Apuestas con más de 3 Jugadores</h1>
        @if($apuestasConMasDeTresJugadores->isEmpty())
            <div class="alert alert-info" role="alert">
                No hay apuestas con más de 3 jugadores disponibles.
            </div>
        @else
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Juego</th>
                        <th>Fecha</th>
                        <th>Monto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($apuestasConMasDeTresJugadores as $apuesta)
                    <tr>
                        <td>{{ $apuesta->id }}</td>
                        <td>{{ $apuesta->juego->nombre }}</td>
                        <td>{{ $apuesta->fecha }}</td>
                        <td>{{ $apuesta->monto }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-pQ4/7p0yt9iK3OV8+6suEScE5YkzCjcjJBMUn5DhV3e0o/z3zEzlZKiNHlRzRNU0" crossorigin="anonymous"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Chiripa SA')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <div class="row">
        <div class="col-12">
            <h1 class="my-4">Revisión de Fondos de Apuestas</h1>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Detalles de las Apuestas</h5>
                    <p class="card-text">Total de Dinero en Juegos de Cartas: <strong>{{ $moneyCartas }}</strong></p>
                    <p class="card-text">Total de Dinero en Juegos que No Son de Cartas: <strong>{{ $moneyNoCartas }}</strong></p>
                    @if ($result)
                        <div class="alert alert-success" role="alert">
                            El dinero total en apuestas de juegos de cartas es mayor que en los juegos que no son de cartas.
                        </div>
                    @else
                        <div class="alert alert-warning" role="alert">
                            El dinero total en apuestas de juegos de cartas no es mayor que en los juegos que no son de cartas.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


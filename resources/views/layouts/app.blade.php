<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'De Chiripa SA')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <h1>De Chiripa SA</h1>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('apuestas.index') }}">Apuestas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('apuestas.create') }}">Crear Apuesta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('apuestas.checkMoney') }}">Chequeo de Dinero</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
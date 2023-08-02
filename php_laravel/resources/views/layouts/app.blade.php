<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>App Financeiro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('transactions.index') }}">App Financeiro</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('transactions.index') }}">Visualizar Transações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('python.analysis') }}">Análise Financeira</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Usuário</a>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="{{ route('change.user', 1) }}">John Doe</a></li>
                        <li><a class="dropdown-item" href="{{ route('change.user', 2) }}">Jane Smith</a></li>
                        <li><a class="dropdown-item" href="{{ route('change.user', 3) }}">Bob Johnson</a></li>
                        <li><a class="dropdown-item" href="{{ route('change.user', 4) }}">Alice Brown</a></li>
                        <li><a class="dropdown-item" href="{{ route('change.user', 5) }}">Michael White</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>

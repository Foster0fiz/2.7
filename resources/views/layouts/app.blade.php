<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Мой сайт')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Мой Laravel-проект</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Laravel Project</p>
    </footer>
</body>
</html>

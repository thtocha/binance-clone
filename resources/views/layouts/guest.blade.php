<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Binance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Подключение шрифта Inter --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f5f5;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@yield('content')
</body>
</html>

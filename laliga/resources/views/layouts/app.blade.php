<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partidos</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    @include('components.navbar')
    <div id="app">
        @yield('content')
    </div>
</body>
</html>

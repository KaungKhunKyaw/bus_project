<!DOCTYPE html>
<html>
<head>
    <title>Route {{ $route->name }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Stops for Route {{ $route->name }}</h1>
    <ul>
        @foreach ($route->stops as $stop)
            <li>{{ $stop->name }}</li>
        @endforeach
    </ul>
</body>
</html>

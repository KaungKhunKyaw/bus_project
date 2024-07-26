<!DOCTYPE html>
<html>
<head>
    <title>Routes for Bus {{ $bus->name }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Routes for Bus {{ $bus->name }}</h1>
    <ul>
        @foreach ($routes as $route)
            <li>
                <a href="{{ route('routes.show', $route->id) }}">{{ $route->name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>

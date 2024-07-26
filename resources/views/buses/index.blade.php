<!DOCTYPE html>
<html>
<head>
    <title>Buses</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Bus List</h1>
    <ul>
        @foreach ($buses as $bus)
            <li>
                <a href="{{ route('buses.show', $bus->id) }}">{{ $bus->name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>

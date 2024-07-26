<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ $town->name}}
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>
        Town: {{$town->name}}
    </h1>
    <h2>Routes</h2>
    <ul>
        @foreach ($town->routes as $route)
            <li>
                {{ $route->name}}
            </li>
        @endforeach
    </ul>


    <h2>Stops</h2>
    <ul>
        @foreach ($town->stops as $stop)
            <li>
                {{ $stop->name }}
            </li>
        @endforeach
    </ul>
</body>
</html>
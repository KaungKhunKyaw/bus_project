<!DOCTYPE html>
<html>
<head>
    <title>Route {{ $route->name }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto p-4">

        <h1 class="text-2xl font-bold mb-4">Stops for Route {{ $route->name }}</h1>
        <ul class="list-disc pl-6">
            @foreach ($route->stops as $stop)
                <li class="mb-2">{{ $stop->name }}</li>
            @endforeach
        </ul>

    </div>
</body>
</html>

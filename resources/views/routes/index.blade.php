<!DOCTYPE html>
<html>
<head>
    <title>Routes for Bus {{ $bus->name }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-atuo p-4">
        <h1 class="text-2xl font-bold mb-4">Routes for Bus {{ $bus->name }}</h1>
        <ul class="list-disc pl-6">
            @foreach ($routes as $route)
                <li class="mb-2">
                    <a href="{{ route('routes.show', $route->id) }}" class="text-blue-500 hover:underline">{{ $route->name }}</a>
                </li>
            @endforeach
        </ul>

    </div>
</body>
</html>

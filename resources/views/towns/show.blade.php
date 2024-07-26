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
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto p-4">
        
        <h1 class="text-2xl font-bold mb-4">
            Town: {{$town->name}}
        </h1>
        <h2 class="text-xl font-bold mb-2">Routes</h2>
        <ul class="list-disc pl-6">
            @foreach ($town->routes as $route)
                <li class="mb-2">
                    {{ $route->name}}
                </li>
            @endforeach
        </ul>
    
    
        <h2 class="text-2xl font-bold mb-2">Stops</h2>
        <ul class="list-disc pl-6">
            @foreach ($town->stops as $stop)
                <li class="mb-2">
                    {{ $stop->name }}
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
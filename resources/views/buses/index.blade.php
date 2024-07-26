<!DOCTYPE html>
<html>
<head>
    <title>Buses</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Bus List</h1>
            <ul class="list-disc pl-6">
                @foreach ($buses as $bus)
                     <li class="mb-2">
                         <a href="{{ route('buses.show', $bus->id) }}" class="text-blue-500 hover:underline">
                            {{ $bus->name }}</a>
                    </li>
                @endforeach
    </ul>
    </div>
</body>
</html>

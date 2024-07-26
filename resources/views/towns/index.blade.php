<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Town</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto p-4">

        <h1 class="text-2xl font-bold mb-4">Town List</h1>
        <ul class="list-disc pl-6">
            @foreach ($towns as $town)
                <li class="mb-2">
                    <a href="{{ route('town.show', $town->id)}}" class="text-blue-500 hover:underline">
                    {{ $town->name}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
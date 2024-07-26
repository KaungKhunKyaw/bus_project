<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Town</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Town List</h1>
    <ul>
        @foreach ($towns as $town)
            <li>
                <a href="{{ route('town.show', $town->id)}}">
                {{ $town->name}}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
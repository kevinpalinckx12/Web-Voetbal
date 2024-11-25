<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Maak een nieuw team aan</h1>
        <form action="{{ route('teams.store') }}" method="post">
            @csrf\
            <label for="teamName">Team Naam</label>
            <input type="text" name="teamName" id="teamName">
            <button type="submit">Maak team aan</button>
        </form>
</body>

<a class="btn btn-outline-primary" href="{{ route('teams.index') }}">Terug</a>
</html>
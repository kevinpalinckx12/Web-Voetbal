<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class = "join-container">
    <h1>Voeg toe aan team</h1>
    <form action="{{ route('teams.storeJoin') }}" method="POST">
        @csrf
        <label for="team">Kies een team</label>
        <select name="team" id="team">
            @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>
        <button type="submit">Voeg toe</button>
</body>
</html>

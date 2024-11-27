<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maak een nieuw team aan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #4CAF50;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            text-align: left;
        }

        input[type="text"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #45a049;
        }

        .btn-outline-primary {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            color: #4CAF50;
            border: 2px solid #4CAF50;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn-outline-primary:hover {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Maak een nieuw team aan</h1>
        <form action="{{ route('teams.store') }}" method="post">
            @csrf
            <label for="teamName">Team Naam</label>
            <input type="text" name="teamName" id="teamName">
            <button type="submit">Maak team aan</button>
        </form>
        <a class="btn btn-outline-primary" href="{{ route('teams.index') }}">Terug</a>
    </div>
</body>
</html>
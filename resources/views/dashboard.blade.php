<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            position: relative;
        }

        nav a, nav button {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s;
            background: none;
            border: none;
            cursor: pointer;
        }

        nav a:hover, nav button:hover {
            background-color: #45a049;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #4CAF50;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 4px;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #45a049;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .container {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .column {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 30%;
            text-align: center;
        }

        h2 {
            color: #4CAF50;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #f2f2f2;
            margin: 5px 0;
            padding: 10px;
            border-radius: 4px;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 10px;
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
    <header>
        <h1>Welkom {{ Auth::user()->name }}</h1>
        <nav>
            <a href="{{ route('dashboard') }}">Home</a>
            <div class="dropdown">
                <a href="#">Teams</a>
                <div class="dropdown-content">
                    <a href="{{ route('teams.index') }}">Alle Teams</a>
                    <a href="{{ route('teams.create') }}">Nieuw Team</a>
                </div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </nav>
    </header>

    <main id="dashboard" class="container">
        <div class="column">
            <h2>Top 5</h2>
            <ul>
                <li>1. Team A</li>
                <li>2. Team B</li>
                <li>3. Team C</li>
                <li>4. Team D</li>
                <li>5. Team E</li>
            </ul>
        </div>
        <div class="column">
            <h2>Afbeelding</h2>
            <img src="{{ asset('images/soccer.png') }}" alt="foutje"/>
            <div style="height: 200px; background-color: #eee;"></div>
        </div>
        <div class="column">
            <h2>Mijn Team</h2>
            <ul>
                <li>Speler 1</li>
                <li>Speler 2</li>
                <li>Speler 3</li>
                <li>Speler 4</li>
                <li>Speler 5</li>
            </ul>
        </div>
    </main>
</body>
</html>
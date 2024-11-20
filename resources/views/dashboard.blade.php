<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Voetbal Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        #header {
            background-color: #f4f4f4;
            padding: 15px;
            border-bottom: 2px solid #ccc;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav {
            margin-top: 10px;
            display: flex;
            align-items: center;
        }
        nav a {
            margin-right: 15px;
            text-decoration: none;
            color: #333;
        }
        nav button, nav h1 {
            margin-right: 15px;
        }
        nav form {
            margin: 0;
        }
        .container {
            width: 90%;
            margin: auto;
        }
        #dashboard {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            padding: 20px;
        }
        .column {
            flex: 1 1 calc(33.33% - 20px);
            box-sizing: border-box;
            border: 1px solid #ddd;
            padding: 15px;
            background-color: #f9f9f9;
        }
        .dropdown {
            position: relative;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: white;
            border: 1px solid #ccc;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .dropdown-menu li {
            padding: 10px;
        }
        .dropdown-menu li:hover {
            background-color: #f4f4f4;
        }
        .highlight {
            text-align: center;
            font-size: 1.2em;
            font-weight: bold;
            color: green;
        }
    </style>
</head>

<body>


    <header id="header">
        <div class="container">
            <h1>School Voetbal</h1>
            <nav>
                <button onclick="window.location.href='{{ route('dashboard') }}'" class="nav-button">Home</button>
                <button onclick="window.location.href='{{ route('teams') }}'" class="nav-button">Teams</button>
                <h1>Welkom {{ Auth::user()->name }}</h1>
                @if(Auth::check())
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="nav-button">Logout</button>
                    </form>
                @endif
                <div class="dropdown">
                </div>
            </nav>
        </div>
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
        <div class="column highlight">
        </div>
    </main>
</body>
</html>
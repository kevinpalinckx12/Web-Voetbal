@guest
    <script type="text/javascript">
        window.location = "{{ url('/login') }}"; // Redirect to login page if not logged in
    </script>
@endguest

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
            top: 100%;
            left: 0;
            z-index: 1000;
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


<header id="header">
        <div class="container">
            <h1>School Voetbal</h1>
            <nav>
                <button onclick="window.location.href='{{ route('dashboard') }}'" class="nav-button">Home</button>
                <div class="dropdown">
                    <button class="nav-button">Teams</button>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('teams.index') }}">Bekijk teams</a></li>
                        <li><a href="{{ route('teams.create') }}">Nieuw team</a></li>
                    </ul>
                </div>
                @if(Auth::check())
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="nav-button">Logout</button>
                    </form>
                @endif
                <h1>Welkom {{ Auth::user()->name }}</h1>
            </nav>
        </div>
    </header>

<table class="table table-striped table-hover mt-4">
        <tr>
            <th>Team</th>
            <th>Punten</th>
            <th>Informatie</th>
            <th>Aanpassen</th>
            <th>Verwijderen</th>
        </tr>

        @foreach($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->points }}</td>


                <td><a href="{{ route('teams.show', $team->id) }}">Details</a></td>

                <td>
                @if (Auth::User()->id == $team->creator_id)
                    <a href="{{ route('teams.edit', $team->id) }}">Edit</a>
                @endif
                </td>
                <td>
                @if(Auth::user()->id == $team->creator_id)
                    <form action="{{ route('teams.destroy', $team->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Verwijder</button>
                    </form> 
                @endif

            </tr>
        @endforeach

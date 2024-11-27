
@guest
    <script type="text/javascript">
        window.location = "{{ url('/login') }}"; // Redirect to login page if not logged in
    </script>
@endguest

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
        width: 400px;
        text-align: center;
    }

    h1 {
        color: #4CAF50;
    }

    h2 {
        color: #333;
        margin-top: 20px;
    }

    p {
        text-align: left;
        margin: 10px 0;
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

<div class="container">
    <h1 class="h1">{{$team->name}}</h1>
    <div>
        <p><strong>Points: </strong>{{$team->points}}</p>
        <p><strong>Creator: </strong>{{ $team->user->name }}</p>
    </div>
    <h2>Spelers:</h2>

    <a class="btn btn-outline-primary" href="{{ route('teams.index') }}">Terug</a>
</div>

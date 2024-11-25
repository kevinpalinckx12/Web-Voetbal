@guest
    <script type="text/javascript">
        window.location = "{{ url('/login') }}"; // Redirect to login page if not logged in
    </script>
@endguest

<div class="container">
    <h1 class="h1">{{$team->name}}</h1>
    <div>
        <p><strong>Points: </strong>{{$team->points}}</p>
        <p><strong>Creator: </strong>{{ $team->user->name }}</p>
    </div>
    <h2>Spelers:</h2>

    <a class="btn btn-outline-primary" href="{{ route('teams.index') }}">Terug</a>



</div>

@if ($team->creator_id != Auth::user()->id)
    <script type="text/javascript">
        window.location = "{{ url('/teams') }}";
    </script>
@endif
<!-- deze code brengt de gebruiker terug naar de teams pagina -->



<div class="container">
    <h1>Edit Team</h1>
    <form action="{{ $updateRoute }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="teamName">Team Name</label>
            <input type="text" class="form-control" id="teamName" name="teamName" value="{{ $team->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Team</button>
        <button type="btn btn-outline-primary" href="{{ route('teams.index') }}">Terug</a>
    </form>
</div>


<div class = "container">
    <h1>Edit Team</h1>
    <form action="{{ $updateRoute }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group
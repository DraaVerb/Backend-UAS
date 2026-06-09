<h1>Edit Artist</h1>

<form action="/artists/{{ $artist->id }}" method="POST">
    @csrf
    @method('PUT')

    <label>Artist Name</label>
    <br>

    <input type="text"
           name="name"
           value="{{ $artist->name }}">
    <br><br>

    <label>Country</label>
    <br>

    <input type="text"
           name="country"
           value="{{ $artist->country }}">
    <br><br>

    <button type="submit">
        Update Artist
    </button>
</form>

<br>

<a href="/artists">
    Back
</a>
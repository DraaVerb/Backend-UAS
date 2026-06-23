<h1>Edit Playlist</h1>

<form action="/playlists/{{ $playlist->id }}" method="POST">
    @csrf
    @method('PUT')

    <input
        type="text"
        name="name"
        value="{{ $playlist->name }}"
    >

    <br><br>

    <textarea name="description">{{ $playlist->description }}</textarea>

    <br><br>

    <button type="submit">
        Update
    </button>
</form>
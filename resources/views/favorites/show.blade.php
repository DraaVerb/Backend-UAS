<form action="/favorites" method="POST">

    @csrf

    <input type="hidden"
           name="song_id"
           value="{{ $song->id }}">

    <button class="btn btn-danger">

        ❤️ Add Favorite

    </button>

</form>
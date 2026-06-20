<!DOCTYPE html>
<html>
<head>
    <title>Add Song</title>
</head>
<body>

<h1>Add Song</h1>

<form action="/songs" method="POST">

    @csrf

    <input type="text" name="title" placeholder="Title">
    <br><br>

    <input type="text" name="artist" placeholder="Artist">
    <br><br>

    <input type="text" name="album" placeholder="Album">
    <br><br>

    <input type="number" name="duration" placeholder="Duration">
    <br><br>

    <label>Genre</label>
    <br>

    <select name="genre_id">
        @foreach($genres as $genre)
            <option value="{{ $genre->id }}">
                {{ $genre->name }}
            </option>
        @endforeach
    </select>

    <br><br>

    <button type="submit">
        Save
    </button>

</form>

</body>
</html>
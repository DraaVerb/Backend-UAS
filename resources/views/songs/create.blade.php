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

    <button type="submit">
        Save
    </button>

</form>

</body>
</html>
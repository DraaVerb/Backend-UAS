<!DOCTYPE html>
<html>
<head>
    <title>Add Song</title>

    <style>
        body {
            background: linear-gradient(135deg, #121212, #1DB954);
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
            min-height: 100vh;
        }

        input {
            width: 250px;
            padding: 10px;
            border: none;
            border-radius: 8px;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.9;
        }
    </style>

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

    <input type="text" name="duration" placeholder="Duration">
    <br><br>

    <button type="submit">
        Save
    </button>

</form>

</body>
</html>
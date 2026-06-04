<!DOCTYPE html>
<html>
<head>
    <title>Song List</title>
</head>
<body>

<h1>Song List</h1>

<a href="/songs/create">Add Song</a>

<hr>

@foreach($songs as $song)

<p>
    <a href="/songs/{{ $song->id }}">
        {{ $song->title }}
    </a>
</p>

@endforeach

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Song Detail</title>
</head>
<body>

<h1>Song Detail</h1>

<p>Title: {{ $song->title }}</p>
<p>Artist: {{ $song->artist }}</p>
<p>Album: {{ $song->album }}</p>
<p>Duration: {{ $song->duration }}</p>

<a href="/songs">Back</a>

</body>
</html>
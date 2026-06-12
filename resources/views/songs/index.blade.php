<h1>Artist List</h1>

<a href="/artists/create">Add Artist</a>

@foreach($artists as $artist)
    <p>
        <a href="/artists/{{ $artist->id }}">
            {{ $artist->name }}
        </a>
    </p>
@endforeach
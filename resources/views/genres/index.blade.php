<h1>Genre List</h1>

@foreach($genres as $genre)
    <p>
        <a href="/genres/{{ $genre->id }}">
            {{ $genre->name }}
        </a>
    </p>
@endforeach

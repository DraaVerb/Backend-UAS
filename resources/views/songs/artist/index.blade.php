<h1>Artist List</h1>

<a href="/artists/create">Add Artist</a>

<hr>

@foreach($artists as $artist)

    <p>
        <strong>{{ $artist->name }}</strong>
        ({{ $artist->country }})
    </p>

    <a href="/artists/{{ $artist->id }}">
        Detail
    </a>

    |

    <a href="/artists/{{ $artist->id }}/edit">
        Edit
    </a>

    |

    <form action="/artists/{{ $artist->id }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')

        <button type="submit">
            Delete
        </button>
    </form>

    <hr>

@endforeach
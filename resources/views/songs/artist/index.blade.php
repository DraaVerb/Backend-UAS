<!DOCTYPE html>
<html>
<head>
    <title>Spotify Artist</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color:#121212;
            color:white;
        }

        .sidebar{
            background:#000;
            min-height:100vh;
            padding:20px;
        }

        .artist-card{
            background:#181818;
            border-radius:15px;
            padding:20px;
            margin-bottom:15px;
            transition:0.3s;
        }

        .artist-card:hover{
            background:#282828;
            transform:translateY(-3px);
        }

        .spotify-btn{
            background:#1DB954;
            border:none;
            color:white;
        }

        .country{
            color:#b3b3b3;
        }

        .description{
            color:#d0d0d0;
            margin-top:10px;
        }
    </style>

</head>
<body>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-2 sidebar">

            <h3>🎵 Spotify Clone</h3>

            <hr>

            <p>🏠 Home</p>
            <p>🎤 Artists</p>
            <p>🎶 Songs</p>

        </div>

        <div class="col-md-10 p-4">

            <div class="d-flex justify-content-between mb-4">

                <h1>Artists</h1>

                <a href="/artists/create" class="btn spotify-btn">
                    + Add Artist
                </a>

            </div>

            @foreach($artists as $artist)

                <div class="artist-card">

                    <h4>{{ $artist->name }}</h4>

                    <p class="country">
                        {{ $artist->country }}
                    </p>

                    <p class="description">
                        {{ $artist->description }}
                    </p>

                    <a href="/artists/{{ $artist->id }}"
                       class="btn btn-success btn-sm">
                        Detail
                    </a>

                    <a href="/artists/{{ $artist->id }}/edit"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="/artists/{{ $artist->id }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger btn-sm">
                            Delete
                        </button>

                    </form>

                </div>

            @endforeach

        </div>

    </div>

</div>

</body>
</html>
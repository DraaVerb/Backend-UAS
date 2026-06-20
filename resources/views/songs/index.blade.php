<!DOCTYPE html>
<html>
<head>
    <title>Spotify Clone - Songs</title>

    <style>

        body{
            background: linear-gradient(
                135deg,
                #000000 0%,
                #031b0b 25%,
                #0a3d1e 60%,
                #1DB954 100%
            );

            background-attachment: fixed;
            min-height:100vh;
            color:white;
            font-family:Arial, sans-serif;
        }

        .container{
            padding:40px;
        }

        .page-title{
            font-size:60px;
            font-weight:bold;

            text-shadow:
                0 0 15px rgba(29,185,84,.6),
                0 0 30px rgba(29,185,84,.3);
        }

        .spotify-btn{

            background:#2b2b2b;

            color:white;

            text-decoration:none;

            padding:12px 25px;

            border-radius:12px;

            font-weight:bold;
        }

        .spotify-btn:hover{

            background:#3a3a3a;
        }

        .hero{

            background:rgba(255,255,255,.08);

            border-radius:20px;

            padding:25px;

            margin:25px 0;
        }

        .song-card{

            background:rgba(20,20,20,.92);

            border-radius:20px;

            padding:20px;

            margin-bottom:20px;

            transition:.3s;
        }

        .song-card:hover{

            transform:translateY(-5px);

            box-shadow:
                0 0 20px rgba(29,185,84,.2);
        }

        .song-link{

            color:white;

            text-decoration:none;

            font-size:24px;

            font-weight:bold;
        }

        .song-link:hover{

            color:#1DB954;
        }

    </style>

</head>
<body>

<div class="container">

    <div style="display:flex;justify-content:space-between;align-items:center;">

        <h1 class="page-title">
            🎵 Song List
        </h1>

        <a href="/songs/create"
           class="spotify-btn">

            + Add Song

        </a>

    </div>

    <div class="hero">

        <h2>🎧 Discover Music</h2>

        <p>
            Browse your song collection and manage your music library.
        </p>

    </div>

    @foreach($songs as $song)

        <div class="song-card">

            <a href="/songs/{{ $song->id }}"
               class="song-link">

                🎵 {{ $song->title }}

            </a>

        </div>

    @endforeach

</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Spotify Clone - Playlists</title>

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
            font-family:Arial,sans-serif;
        }

        .container{
            width:80%;
            margin:auto;
            padding-top:40px;
        }

        .title{
            font-size:60px;
            font-weight:bold;

            text-shadow:
                0 0 15px rgba(29,185,84,.6),
                0 0 30px rgba(29,185,84,.3);
        }

        .add-btn{
            background:#1DB954;
            color:white;
            padding:12px 25px;
            border-radius:12px;
            text-decoration:none;
            font-weight:bold;
        }

        .add-btn:hover{
            background:#1ed760;
        }

        .playlist-card{

            margin-top:25px;

            background:rgba(20,20,20,.92);

            border-radius:25px;

            padding:25px;

            transition:.3s;
        }

        .playlist-card:hover{

            transform:translateY(-5px);

            box-shadow:
                0 0 20px rgba(29,185,84,.2),
                0 10px 30px rgba(0,0,0,.5);
        }

        .playlist-name{

            color:white;
            text-decoration:none;

            font-size:30px;
            font-weight:bold;
        }

        .playlist-name:hover{
            color:#1DB954;
        }

    </style>

</head>
<body>

<div class="container">

    <h1 class="title">
        🎵 Playlist List
    </h1>

    <br>

    <a href="/playlists/create" class="add-btn">
        + Add Playlist
    </a>

    @foreach($playlists as $playlist)

        <div class="playlist-card">

            <a
                href="/playlists/{{ $playlist->id }}"
                class="playlist-name">

                {{ $playlist->name }}

            </a>

        </div>

    @endforeach

</div>

</body>
</html>
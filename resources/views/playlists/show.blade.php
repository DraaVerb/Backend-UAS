<!DOCTYPE html>
<html>
<head>
    <title>Spotify Clone - Playlist Detail</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

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
        }

        .container{

            width:700px;

            margin:60px auto;

            background:rgba(20,20,20,.92);

            border-radius:25px;

            padding:40px;

            box-shadow:
                0 0 20px rgba(29,185,84,.2);
        }

        .playlist-name{

            font-size:55px;

            margin-bottom:25px;

            text-shadow:
                0 0 15px rgba(29,185,84,.4);
        }

        .description{

            font-size:20px;

            line-height:1.8;

            color:#e0e0e0;

            margin-bottom:40px;
        }

        .btn{

            border:none;

            padding:12px 25px;

            border-radius:12px;

            text-decoration:none;

            display:inline-block;

            font-weight:bold;

            transition:.3s;
        }

        .edit-btn{

            background:#f39c12;

            color:white;
        }

        .edit-btn:hover{

            background:#ffb52b;
        }

        .back-btn{

            background:#444;

            color:white;

            margin-left:15px;
        }

        .back-btn:hover{

            background:#666;
        }

    </style>

</head>
<body>

<div class="container">

    <div class="playlist-name">
        🎵 {{ $playlist->name }}
    </div>

    <div class="description">
        {{ $playlist->description }}
    </div>

    <a
        href="/playlists/{{ $playlist->id }}/edit"
        class="btn edit-btn">

        ✏ Edit

    </a>

    <a
        href="/playlists"
        class="btn back-btn">

        ← Back

    </a>

</div>

</body>
</html>
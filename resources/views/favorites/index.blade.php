<!DOCTYPE html>
<html>
<head>
    <title>Spotify Clone - Favorite Songs</title>

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

        .favorite-card{

            margin-top:25px;

            background:rgba(20,20,20,.92);

            border-radius:25px;

            padding:25px;

            transition:.3s;
        }

        .favorite-card:hover{

            transform:translateY(-5px);

            box-shadow:
                0 0 20px rgba(29,185,84,.2),
                0 10px 30px rgba(0,0,0,.5);
        }

        .song-name{

            color:white;
            text-decoration:none;

            font-size:30px;
            font-weight:bold;
        }

        .song-name:hover{
            color:#1DB954;
        }

        .artist{
            margin-top:10px;
            color:#d0d0d0;
            font-size:18px;
        }

    </style>

</head>
<body>

<div class="container">

    <h1 class="title">
        ❤️ Favorite Songs
    </h1>

    @foreach($favorites as $favorite)

        <div class="favorite-card">

            <div class="song-name">
                🎵 {{ $favorite->song->title }}
            </div>

            <div class="artist">
                🎤 {{ $favorite->song->artist }}
            </div>

        </div>

    @endforeach

</div>

</body>
</html>
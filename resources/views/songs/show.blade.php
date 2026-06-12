<!DOCTYPE html>
<html>
<head>
    <title>Song Detail</title>

    <style>

        body{
            background: linear-gradient(
                135deg,
                #000000 0%,
                #031b0b 25%,
                #0a3d1e 60%,
                #1DB954 100%
            );

            min-height:100vh;
            color:white;
            font-family:Arial, sans-serif;
        }

        .container{
            width:80%;
            margin:auto;
            padding-top:50px;
        }

        .song-card{

            background:rgba(20,20,20,.92);

            border-radius:25px;

            padding:40px;

            box-shadow:
                0 0 20px rgba(29,185,84,.2);
        }

        .song-title{

            font-size:60px;
            font-weight:bold;

            margin-bottom:20px;
        }

        .song-info{

            font-size:22px;

            color:#d0d0d0;

            margin-bottom:15px;
        }

        .btn{

            background:#1DB954;

            color:white;

            text-decoration:none;

            padding:12px 25px;

            border-radius:10px;

            display:inline-block;

            margin-top:20px;
        }

        .btn:hover{
            background:#1ed760;
        }

    </style>

</head>
<body>

<div class="container">

    <div class="song-card">

        <h1 class="song-title">
            🎵 {{ $song->title }}
        </h1>

        <div class="song-info">
            Song ID : {{ $song->id }}
        </div>

        <a href="/songs" class="btn">
            ← Back to Songs
        </a>

    </div>

</div>

</body>
</html>

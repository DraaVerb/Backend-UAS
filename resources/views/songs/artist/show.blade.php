<!DOCTYPE html>
<html>
<head>
    <title>{{ $artist->name }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body{
            background:#121212;
            color:white;
        }

        .artist-container{
            max-width:900px;
            margin:auto;
            margin-top:50px;
        }

        .artist-card{
            background:#181818;
            border-radius:20px;
            padding:40px;
            box-shadow:0 0 20px rgba(0,0,0,0.5);
        }

        .artist-image{
            width:200px;
            height:200px;
            border-radius:50%;
            object-fit:cover;
            border:5px solid #1DB954;
        }

        .country{
            color:#b3b3b3;
            font-size:18px;
        }

        .description{
            color:#e0e0e0;
            line-height:1.8;
            text-align:justify;
        }

        .spotify-btn{
            background:#1DB954;
            border:none;
            color:white;
        }

        .spotify-btn:hover{
            background:#1ed760;
            color:white;
        }

        .back-btn{
            background:#333;
            color:white;
        }

        .back-btn:hover{
            background:#444;
            color:white;
        }

        .artist-name{
            font-size:50px;
            font-weight:bold;
        }
    </style>
</head>
<body>

<div class="container artist-container">

    <div class="artist-card">

        <div class="row align-items-center">

            <div class="col-md-4 text-center">

                <!-- Foto Artist -->
                <img
                    src="https://picsum.photos/300"
                    class="artist-image">

            </div>

            <div class="col-md-8">

                <h1 class="artist-name">
                    {{ $artist->name }}
                </h1>

                <p class="country">
                    <i class="bi bi-globe"></i>
                    {{ $artist->country }}
                </p>

                <button class="btn spotify-btn">
                    <i class="bi bi-play-fill"></i>
                    Play Artist
                </button>

            </div>

        </div>

        <hr class="my-4">

        <h3>
            <i class="bi bi-card-text"></i>
            About Artist
        </h3>

        <p class="description">
            {{ $artist->description }}
        </p>

        <a href="/artists" class="btn back-btn mt-3">
            <i class="bi bi-arrow-left"></i>
            Back to Artists
        </a>

    </div>

</div>

</body>
</html>
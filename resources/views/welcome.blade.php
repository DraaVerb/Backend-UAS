<!DOCTYPE html>
<html>
<head>
    <title>Spotify Clone - Music Player</title>

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

            min-height:100vh;
            color:white;
        }

        .navbar{

            display:flex;
            justify-content:space-between;
            align-items:center;

            padding:25px 50px;

            background:rgba(0,0,0,.4);

            backdrop-filter:blur(10px);
        }

        .logo{
            font-size:35px;
            font-weight:bold;
        }

        .menu a{

            color:white;
            text-decoration:none;

            margin-left:25px;

            font-size:18px;
            transition:.3s;
        }

        .menu a:hover{
            color:#1DB954;
        }

        .hero{

            height:80vh;

            display:flex;
            flex-direction:column;

            justify-content:center;
            align-items:center;

            text-align:center;
        }

        .hero h1{

            font-size:90px;

            margin-bottom:20px;

            text-shadow:
                0 0 20px rgba(29,185,84,.5),
                0 0 40px rgba(29,185,84,.3);
        }

        .hero p{

            font-size:24px;

            margin-bottom:30px;

            color:#e0e0e0;
        }

        .btn{

            background:#1DB954;

            color:white;

            text-decoration:none;

            padding:15px 30px;

            border-radius:30px;

            font-weight:bold;

            transition:.3s;
        }

        .btn:hover{

            background:#1ed760;
        }

        .cards{

            display:flex;

            justify-content:center;

            gap:30px;

            flex-wrap:wrap;

            margin-bottom:60px;
        }

        .card{

            width:280px;

            background:rgba(255,255,255,.08);

            backdrop-filter:blur(10px);

            border-radius:20px;

            padding:25px;

            text-align:center;

            transition:.3s;
        }

        .card:hover{

            transform:translateY(-8px);

            box-shadow:
                0 0 20px rgba(29,185,84,.2),
                0 10px 30px rgba(0,0,0,.4);
        }

        .card h3{
            margin-bottom:15px;
        }

        .card p{
            color:#d9d9d9;
        }

        .card a{

            color:#1DB954;
            text-decoration:none;
            font-weight:bold;
        }

        .card a:hover{
            color:white;
        }

        footer{

            text-align:center;

            padding:30px;

            color:#d0d0d0;
        }

    </style>

</head>

<body>

<div class="navbar">

    <div class="logo">
        🎵 Spotify Clone
    </div>

    <div class="menu">

        <a href="/">Home</a>
        <a href="/songs">Songs</a>
        <a href="/artists">Artists</a>
        <a href="/playlists">Playlists</a>
        <a href="/favorites">Favorites</a>

    </div>

</div>

<div class="hero">

    <h1>Music Player</h1>

    <p>
        Discover Songs, Explore Artists, Enjoy Music.
    </p>

    <a href="/songs" class="btn">
        🎶 Manage Songs
    </a>

</div>

<div class="cards">

    <div class="card">

        <h3>🎶 Songs</h3>

        <p>
            Browse and manage your music collection.
        </p>

        <br>

        <a href="/songs">
            Open Songs
        </a>

    </div>

    <div class="card">

        <h3>🎤 Artists</h3>

        <p>
            Explore legendary artists and their stories.
        </p>

        <br>

        <a href="/artists">
            Open Artists
        </a>

    </div>

    <div class="card">

    <h3>🎧 Spotify Style</h3>

    <p>
        Modern interface inspired by Spotify.
    </p>

    <br>

    <a href="/">
        Explore
    </a>

</div>
    <div class="card">

        <h3>📂 Playlists</h3>

        <p>
            Create and organize your favorite playlists.
        </p>

        <br>

        <a href="/playlists">
            Open Playlist
        </a>

    </div>

    <div class="card">

        <h3>❤️ Favorite Songs</h3>

        <p>
            Save your favorite music collection.
        </p>

        <br>

        <a href="/favorites">
            Open Favorites
        </a>

    </div>

</div>

<footer>

    Spotify Clone © 2026 | Music Player Project

</footer>

</body>
</html>
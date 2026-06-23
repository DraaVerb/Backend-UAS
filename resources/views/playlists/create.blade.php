<!DOCTYPE html>
<html>
<head>
    <title>Spotify Clone - Add Playlist</title>

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

            margin:50px auto;

            background:rgba(20,20,20,.92);

            border-radius:25px;

            padding:40px;

            box-shadow:
                0 0 20px rgba(29,185,84,.2);
        }

        h1{

            text-align:center;

            margin-bottom:30px;

            font-size:45px;

            text-shadow:
                0 0 15px rgba(29,185,84,.4);
        }

        .form-group{

            margin-bottom:25px;
        }

        label{

            display:block;

            margin-bottom:10px;

            font-weight:bold;

            color:#dcdcdc;
        }

        input,
        textarea{

            width:100%;

            padding:14px;

            border:none;

            border-radius:12px;

            background:#2a2a2a;

            color:white;

            font-size:16px;
        }

        input:focus,
        textarea:focus{

            outline:none;

            box-shadow:
                0 0 10px rgba(29,185,84,.5);
        }

        textarea{
            resize:none;
            height:120px;
        }

        .btn{

            border:none;

            padding:12px 25px;

            border-radius:12px;

            cursor:pointer;

            font-weight:bold;

            text-decoration:none;

            display:inline-block;
        }

        .save-btn{

            background:#1DB954;

            color:white;
        }

        .save-btn:hover{

            background:#1ed760;
        }

        .back-btn{

            background:#444;

            color:white;

            margin-left:10px;
        }

        .back-btn:hover{

            background:#666;
        }

    </style>

</head>
<body>

<div class="container">

    <h1>
        📂 Add Playlist
    </h1>

    <form action="/playlists" method="POST">

        @csrf

        <div class="form-group">

            <label>Playlist Name</label>

            <input
                type="text"
                name="name"
                placeholder="Enter playlist name">

        </div>

        <div class="form-group">

            <label>Description</label>

            <textarea
                name="description"
                placeholder="Enter playlist description"></textarea>

        </div>

        <button
            type="submit"
            class="btn save-btn">

            Save Playlist

        </button>

        <a href="/playlists"
           class="btn back-btn">

            Back

        </a>

    </form>

</div>

</body>
</html>
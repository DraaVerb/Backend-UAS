<!DOCTYPE html>
<html>
<head>
    <title>Add Song</title>

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

            margin-bottom:20px;
        }

        label{

            display:block;

            margin-bottom:8px;

            font-weight:bold;

            color:#dcdcdc;
        }

        input{

            width:100%;

            padding:14px;

            border:none;

            border-radius:12px;

            background:#2a2a2a;

            color:white;

            font-size:16px;
        }

        input:focus{

            outline:none;

            box-shadow:
                0 0 10px rgba(29,185,84,.5);
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

    <h1>🎵 Add Song</h1>

    <form action="/songs" method="POST">

        @csrf

<div class="form-group">

    <label>Song Title</label>

    <input
        type="text"
        name="title"
        placeholder="Enter song title">

</div>

<div class="form-group">

    <label>Genre</label>

    <select
        name="genre_id"
        style="
            width:100%;
            padding:14px;
            border:none;
            border-radius:12px;
            background:#2a2a2a;
            color:white;
            font-size:16px;">

        @foreach($genres as $genre)

            <option value="{{ $genre->id }}">
                {{ $genre->name }}
            </option>

        @endforeach

    </select>

</div>


        <div class="form-group">

            <label>Artist</label>

            <input
                type="text"
                name="artist"
                placeholder="Enter artist name">

        </div>

        <div class="form-group">

            <label>Album</label>

            <input
                type="text"
                name="album"
                placeholder="Enter album name">

        </div>

        <div class="form-group">

            <label>Duration (seconds)</label>

            <input
                type="number"
                name="duration"
                placeholder="Enter duration">

        </div>

        <button
            type="submit"
            class="btn save-btn">

            Save Song

        </button>

        <a href="/songs"
           class="btn back-btn">

            Back

        </a>

    </form>

</div>

</body>
</html>


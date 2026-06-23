<!DOCTYPE html>
<html>
<head>
    <title>Song Detail</title>

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

            width:850px;

            margin:50px auto;

            background:rgba(20,20,20,.92);

            border-radius:25px;

            padding:40px;

            box-shadow:
                0 0 20px rgba(29,185,84,.2);
        }

        .header{

            display:flex;

            align-items:center;

            gap:30px;
        }

        .album-cover{

            width:220px;
            height:220px;

            border-radius:20px;

            background:linear-gradient(
                135deg,
                #1DB954,
                #000000
            );

            display:flex;

            justify-content:center;
            align-items:center;

            font-size:90px;

            box-shadow:
                0 0 20px rgba(29,185,84,.5);
        }

        .song-title{

            font-size:55px;

            font-weight:bold;

            margin-bottom:10px;
        }

        .artist{

            font-size:22px;

            color:#d0d0d0;
        }

        .details{

            margin-top:40px;
        }

        .detail-item{

            background:rgba(255,255,255,.08);

            padding:18px;

            border-radius:15px;

            margin-bottom:15px;
        }

        .detail-item strong{

            color:#1DB954;
        }

        .back-btn{

            display:inline-block;

            margin-top:20px;

            background:#1DB954;

            color:white;

            text-decoration:none;

            padding:12px 25px;

            border-radius:12px;

            font-weight:bold;
        }

        .back-btn:hover{

            background:#1ed760;
        }


        textarea{

            width:100%;

            padding:14px;

            border:none;

            border-radius:12px;

            background:#2a2a2a;

            color:white;

            font-size:16px;
        }

        textarea:focus{

            outline:none;

            box-shadow:
                0 0 10px rgba(29,185,84,.5);

        .action-btn{

            display:inline-block;

            margin-top:20px;
            margin-left:10px;

            color:white;

            text-decoration:none;

            padding:12px 25px;

            border-radius:12px;

            font-weight:bold;
        }

        .btn-comment{
            background:#2b2b2b;
        }

        .btn-comment:hover{
            background:#3a3a3a;
            color:white;
        }

        .btn-rating{
            background:#b8860b;
        }

        .btn-rating:hover{
            background:#ffc107;
            color:white;

        }

    </style>

</head>
<body>

<div class="container">

    <div class="header">

        <div class="album-cover">
            🎵
        </div>

        <div>

            <div class="song-title">
                {{ $song->title }}
            </div>

            <div class="artist">
                🎤 {{ $song->artist }}
            </div>

        </div>

    </div>

    <div class="details">

        <div class="detail-item">
            <strong>💿 Album:</strong>
            {{ $song->album }}
        </div>

        <div class="detail-item">
            <strong>⏱ Duration:</strong>
            {{ $song->duration }} seconds
        </div>

        <div class="detail-item">
            <strong>🆔 Song ID:</strong>
            {{ $song->id }}
        </div>

    </div>

    <div style="display:flex; gap:15px; margin-top:20px; flex-wrap:wrap;">

        <form action="/favorites" method="POST" style="margin:0;">
            @csrf
            <input type="hidden" name="song_id" value="{{ $song->id }}">
            <button class="back-btn" style="cursor:pointer; border:none;">❤️ Add Favorite</button>
        </form>

        <a href="/songs" class="back-btn">← Back to Songs</a>
        <a href="/comments/create?song_id={{ $song->id }}" class="action-btn btn-comment">💬 Leave a Comment</a>
        <a href="/ratings/create?song_id={{ $song->id }}" class="action-btn btn-rating">⭐ Rate this Song</a>

    </div>

<hr style="margin-top:30px; border-color:#444;"><br>

<div class="detail-item">

    <h2 style="margin-bottom:20px;">
        ⭐ Rate This Song
    </h2>

    <form action="/ratings" method="POST">

        @csrf

        <input
            type="hidden"
            name="song_id"
            value="{{ $song->id }}">

        <input
            type="number"
            name="rating"
            min="1"
            max="5"
            placeholder="1 - 5">

        <br><br>

        <button class="back-btn">
            Submit Rating
        </button>

    </form>

</div>

<br>

<div class="detail-item">

    <h2 style="margin-bottom:20px;">
        💬 Add Comment
    </h2>

    <form action="/comments" method="POST">

        @csrf

        <input
            type="hidden"
            name="song_id"
            value="{{ $song->id }}">

        <input
            type="text"
            name="username"
            placeholder="Your name">

        <br><br>

        <textarea
            name="comment"
            placeholder="Comment"
            style="
                width:100%;
                padding:14px;
                border:none;
                border-radius:12px;
                background:#2a2a2a;
                color:white;
                font-size:16px;
                height:120px;
                resize:none;
            "></textarea>

        <br><br>

        <button class="back-btn">
            Submit Comment
        </button>

    </form>

</div>

<br><br>

<br>

<h2 style="margin-bottom:20px;">
    💬 Comments
</h2>

@foreach($song->comments as $comment)

<div class="detail-item">

    <h3 style="color:#1DB954;">
        {{ $comment->username }}
    </h3>

    <br>

    <p style="color:#ddd;">
        {{ $comment->comment }}
    </p>

</div>

@endforeach

</div>

</body>
</html>

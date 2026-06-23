<!DOCTYPE html>
<html>
<head>
    <title>Comment Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #000000 0%, #031b0b 25%, #0a3d1e 60%, #1DB954 100%);
            background-attachment: fixed;
            min-height: 100vh;
            color: white;
            font-family: Arial, sans-serif;
        }
        .container { max-width: 700px; margin: 50px auto; padding: 0 20px; }
        .card-box {
            background: rgba(20,20,20,.92);
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 0 20px rgba(29,185,84,.2);
        }
        .avatar {
            width: 70px; height: 70px;
            border-radius: 50%;
            background: linear-gradient(135deg, #1DB954, #000);
            display: flex; align-items: center; justify-content: center;
            font-size: 30px; flex-shrink: 0;
        }
        .detail-row {
            background: rgba(255,255,255,.06);
            border-radius: 12px;
            padding: 16px 20px;
            margin-bottom: 12px;
        }
        .detail-label { color: #1DB954; font-size: 13px; margin-bottom: 4px; }
        .song-link { color: #1DB954; text-decoration: none; }
        .song-link:hover { color: #1ed760; text-decoration: underline; }
        .back-btn {
            display: inline-block; margin-top: 20px;
            background: #1DB954; color: white;
            text-decoration: none; padding: 12px 25px;
            border-radius: 12px; font-weight: bold;
        }
        .back-btn:hover { background: #1ed760; color: white; }
    </style>
</head>
<body>
<div class="container">
    <a href="/comments" style="color:#1DB954;text-decoration:none;" class="d-block mb-4">
        <i class="bi bi-arrow-left me-1"></i> Back to Comments
    </a>

    <div class="card-box">
        <div class="d-flex align-items-center gap-3 mb-4">
            <div class="avatar">💬</div>
            <div>
                <h3 class="mb-0">{{ $comment->commenter_name }}</h3>
                <span style="color:#b3b3b3;font-size:14px;">{{ $comment->created_at->format('d M Y, H:i') }}</span>
            </div>
        </div>

        <div class="detail-row">
            <div class="detail-label"><i class="bi bi-music-note me-1"></i> Song</div>
            <a href="/songs/{{ $comment->song->id }}" class="song-link">
                {{ $comment->song->title }} — {{ $comment->song->artist }}
            </a>
        </div>

        <div class="detail-row">
            <div class="detail-label"><i class="bi bi-chat-left-text me-1"></i> Comment</div>
            <p style="color:#d0d0d0;margin:0;">{{ $comment->content }}</p>
        </div>

        <div class="d-flex gap-2 mt-3">
            <a href="/comments" class="back-btn">← Back</a>
            <form action="/comments/{{ $comment->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                        style="padding:12px 25px;border-radius:12px;"
                        onclick="return confirm('Delete this comment?')">
                    <i class="bi bi-trash me-1"></i> Delete
                </button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

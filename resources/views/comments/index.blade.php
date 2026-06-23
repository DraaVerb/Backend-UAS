<!DOCTYPE html>
<html>
<head>
    <title>Spotify Clone - Comments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #121212; color: white; }
        .sidebar { background: #000; min-height: 100vh; padding: 20px; }
        .sidebar a { color: #b3b3b3; text-decoration: none; display: block; padding: 8px 0; }
        .sidebar a:hover { color: white; }
        .sidebar a.active { color: white; font-weight: bold; }
        .comment-card {
            background: #181818;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 15px;
            transition: 0.3s;
        }
        .comment-card:hover { background: #282828; transform: translateY(-2px); }
        .spotify-btn { background: #1DB954; border: none; color: white; }
        .spotify-btn:hover { background: #1ed760; color: white; }
        .song-badge {
            background: rgba(29,185,84,.15);
            color: #1DB954;
            padding: 3px 12px;
            border-radius: 20px;
            font-size: 12px;
            text-decoration: none;
        }
        .song-badge:hover { background: rgba(29,185,84,.3); color: #1DB954; }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar">
            <h5 class="text-white mb-3"><i class="bi bi-spotify"></i> Spotify Clone</h5>
            <hr class="border-secondary">
            <a href="/"><i class="bi bi-house-fill me-2"></i> Home</a>
            <a href="/songs"><i class="bi bi-music-note me-2"></i> Songs</a>
            <a href="/artists"><i class="bi bi-person-fill me-2"></i> Artists</a>
            <a href="/albums"><i class="bi bi-collection-fill me-2"></i> Albums</a>
            <a href="/playlists"><i class="bi bi-collection-play-fill me-2"></i> Playlists</a>
            <a href="/genres"><i class="bi bi-tags-fill me-2"></i> Genres</a>
            <a href="/comments" class="active"><i class="bi bi-chat-left-text-fill me-2"></i> Comments</a>
            <a href="/ratings"><i class="bi bi-star-fill me-2"></i> Ratings</a>
        </div>

        <div class="col-md-10 p-4">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1><i class="bi bi-chat-left-text-fill me-2" style="color:#1DB954;"></i> Comments</h1>
                    <p style="color:#b3b3b3;">What people are saying about the songs</p>
                </div>
                <a href="/comments/create" class="btn spotify-btn">
                    <i class="bi bi-plus-lg me-1"></i> Add Comment
                </a>
            </div>

            @if($comments->isEmpty())
                <div class="text-center py-5" style="color:#b3b3b3;">
                    <i class="bi bi-chat-left" style="font-size:64px;"></i>
                    <p class="mt-3 fs-5">No comments yet. Be the first to comment!</p>
                    <a href="/comments/create" class="btn spotify-btn mt-2">Add Comment</a>
                </div>
            @else
                @foreach($comments as $comment)
                    <div class="comment-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <div style="width:38px;height:38px;border-radius:50%;background:linear-gradient(135deg,#1DB954,#000);display:flex;align-items:center;justify-content:center;font-size:16px;">💬</div>
                                    <div>
                                        <span style="font-weight:bold;">{{ $comment->commenter_name }}</span>
                                        <span style="color:#b3b3b3;font-size:13px;margin-left:8px;">{{ $comment->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                                <p style="color:#d0d0d0;margin-bottom:8px;">{{ $comment->content }}</p>
                                <a href="/songs/{{ $comment->song->id }}" class="song-badge">
                                    <i class="bi bi-music-note me-1"></i>{{ $comment->song->title }}
                                </a>
                            </div>
                            <div class="d-flex gap-2 ms-3">
                                <a href="/comments/{{ $comment->id }}" class="btn btn-success btn-sm">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <form action="/comments/{{ $comment->id }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Delete this comment?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

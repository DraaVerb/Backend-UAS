<!DOCTYPE html>
<html>
<head>
    <title>Spotify Clone - Ratings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #121212; color: white; }
        .sidebar { background: #000; min-height: 100vh; padding: 20px; }
        .sidebar a { color: #b3b3b3; text-decoration: none; display: block; padding: 8px 0; }
        .sidebar a:hover { color: white; }
        .sidebar a.active { color: white; font-weight: bold; }
        .rating-card {
            background: #181818;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 15px;
            transition: 0.3s;
        }
        .rating-card:hover { background: #282828; transform: translateY(-2px); }
        .spotify-btn { background: #1DB954; border: none; color: white; }
        .spotify-btn:hover { background: #1ed760; color: white; }
        .star { color: #ffc107; font-size: 18px; }
        .star-empty { color: #444; font-size: 18px; }
        .avg-box {
            background: rgba(29,185,84,.1);
            border: 1px solid rgba(29,185,84,.3);
            border-radius: 15px;
            padding: 20px 30px;
            margin-bottom: 25px;
            display: inline-flex;
            align-items: center;
            gap: 15px;
        }
        .avg-score { font-size: 48px; font-weight: bold; color: #1DB954; line-height: 1; }
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
            <a href="/comments"><i class="bi bi-chat-left-text-fill me-2"></i> Comments</a>
            <a href="/ratings" class="active"><i class="bi bi-star-fill me-2"></i> Ratings</a>
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
                    <h1><i class="bi bi-star-fill me-2" style="color:#ffc107;"></i> Song Ratings</h1>
                    <p style="color:#b3b3b3;">Community ratings for songs</p>
                </div>
                <a href="/ratings/create" class="btn spotify-btn">
                    <i class="bi bi-plus-lg me-1"></i> Rate a Song
                </a>
            </div>

            @if($ratings->isNotEmpty())
                <div class="avg-box mb-4">
                    <div class="avg-score">{{ number_format($avgScore, 1) }}</div>
                    <div>
                        <div>
                            @for($i = 1; $i <= 5; $i++)
                                <span class="{{ $i <= round($avgScore) ? 'star' : 'star-empty' }}">★</span>
                            @endfor
                        </div>
                        <div style="color:#b3b3b3;font-size:14px;">Average from {{ $ratings->count() }} ratings</div>
                    </div>
                </div>
            @endif

            @if($ratings->isEmpty())
                <div class="text-center py-5" style="color:#b3b3b3;">
                    <i class="bi bi-star" style="font-size:64px;"></i>
                    <p class="mt-3 fs-5">No ratings yet. Rate the first song!</p>
                    <a href="/ratings/create" class="btn spotify-btn mt-2">Rate a Song</a>
                </div>
            @else
                @foreach($ratings as $rating)
                    <div class="rating-card d-flex align-items-center gap-3">
                        <div style="width:50px;height:50px;border-radius:10px;background:linear-gradient(135deg,#ffc107,#000);display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;">⭐</div>
                        <div class="flex-grow-1">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <span style="font-weight:bold;">{{ $rating->rater_name }}</span>
                                <div>
                                    @for($i = 1; $i <= 5; $i++)
                                        <span class="{{ $i <= $rating->score ? 'star' : 'star-empty' }}" style="font-size:15px;">★</span>
                                    @endfor
                                </div>
                            </div>
                            @if($rating->review)
                                <p style="color:#b3b3b3;font-size:14px;margin-bottom:6px;">{{ Str::limit($rating->review, 80) }}</p>
                            @endif
                            <a href="/songs/{{ $rating->song->id }}" class="song-badge">
                                <i class="bi bi-music-note me-1"></i>{{ $rating->song->title }}
                            </a>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="/ratings/{{ $rating->id }}" class="btn btn-success btn-sm">
                                <i class="bi bi-eye"></i>
                            </a>
                            <form action="/ratings/{{ $rating->id }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Delete this rating?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
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

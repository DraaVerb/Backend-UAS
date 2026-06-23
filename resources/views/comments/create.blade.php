<!DOCTYPE html>
<html>
<head>
    <title>Add Comment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #121212; color: white; }
        .form-card {
            background: #181818;
            border-radius: 20px;
            padding: 40px;
            max-width: 600px;
            margin: 50px auto;
            box-shadow: 0 0 30px rgba(29,185,84,.15);
        }
        .form-control, .form-select {
            background: #282828;
            color: white;
            border: 1px solid #444;
        }
        .form-control:focus, .form-select:focus {
            background: #333;
            color: white;
            border-color: #1DB954;
            box-shadow: 0 0 0 0.2rem rgba(29,185,84,.25);
        }
        .form-select option { background: #282828; }
        .form-label { color: #b3b3b3; }
        .spotify-btn { background: #1DB954; border: none; color: white; }
        .spotify-btn:hover { background: #1ed760; color: white; }
        .back-link { color: #1DB954; text-decoration: none; }
        .back-link:hover { color: #1ed760; }
        .invalid-feedback { display: block; }
    </style>
</head>
<body>
<div class="form-card">
    <div class="mb-4">
        <a href="/comments" class="back-link">
            <i class="bi bi-arrow-left me-1"></i> Back to Comments
        </a>
    </div>

    <h2 class="mb-4">
        <i class="bi bi-chat-left-text-fill me-2" style="color:#1DB954;"></i> Add Comment
    </h2>

    <form action="/comments" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Song</label>
            <select name="song_id" class="form-select @error('song_id') is-invalid @enderror" required>
                <option value="" disabled selected>Select a song</option>
                @foreach($songs as $song)
                    <option value="{{ $song->id }}" {{ (old('song_id') ?? request('song_id')) == $song->id ? 'selected' : '' }}>
                        🎵 {{ $song->title }} — {{ $song->artist }}
                    </option>
                @endforeach
            </select>
            @error('song_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Your Name</label>
            <input type="text" name="commenter_name"
                   class="form-control @error('commenter_name') is-invalid @enderror"
                   value="{{ old('commenter_name') }}" placeholder="e.g. John Doe" required>
            @error('commenter_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="mb-4">
            <label class="form-label">Comment</label>
            <textarea name="content" rows="4"
                      class="form-control @error('content') is-invalid @enderror"
                      placeholder="Share your thoughts about this song...">{{ old('content') }}</textarea>
            @error('content') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn spotify-btn w-100">
            <i class="bi bi-chat-left-text me-1"></i> Post Comment
        </button>
    </form>
</div>
</body>
</html>

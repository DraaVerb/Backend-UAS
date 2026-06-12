<!DOCTYPE html>
<html>
<head>
    <title>Edit Artist</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body{
            background:#121212;
            color:white;
        }

        .edit-card{
            background:#181818;
            padding:35px;
            border-radius:20px;
            margin-top:50px;
            box-shadow:0 0 20px rgba(0,0,0,0.4);
        }

        .form-control{
            background:#282828;
            border:none;
            color:white;
        }

        .form-control:focus{
            background:#333;
            color:white;
            box-shadow:0 0 10px rgba(29,185,84,.4);
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

        .artist-image{
            width:180px;
            height:180px;
            border-radius:50%;
            object-fit:cover;
            border:4px solid #1DB954;
        }

        .back-btn{
            background:#333;
            color:white;
            border:none;
        }

        .back-btn:hover{
            background:#444;
            color:white;
        }

        textarea{
            resize:none;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="edit-card">

                @php

                    $image = 'images/artists/default.jpg';

                    if($artist->name == 'Queen'){
                        $image = 'images/artists/queen.jpg';
                    }
                    elseif($artist->name == 'Oasis'){
                        $image = 'images/artists/oasis.jpg';
                    }
                    elseif($artist->name == 'The Beatles'){
                        $image = 'images/artists/beatles.jpg';
                    }
                    elseif($artist->name == 'Blur'){
                        $image = 'images/artists/blur.jpg';
                    }

                @endphp

                <div class="text-center mb-4">

                    <img src="{{ asset($image) }}"
                         class="artist-image">

                    <h2 class="mt-3">
                        <i class="bi bi-pencil-square"></i>
                        Edit Artist
                    </h2>

                </div>

                <form action="/artists/{{ $artist->id }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label class="mb-2">
                            <i class="bi bi-person-fill"></i>
                            Artist Name
                        </label>

                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            value="{{ $artist->name }}">

                    </div>

                    <div class="mb-3">

                        <label class="mb-2">
                            <i class="bi bi-globe"></i>
                            Country
                        </label>

                        <input
                            type="text"
                            name="country"
                            class="form-control"
                            value="{{ $artist->country }}">

                    </div>

                    <div class="mb-3">

                        <label class="mb-2">
                            <i class="bi bi-card-text"></i>
                            Description
                        </label>

                        <textarea
                            name="description"
                            rows="5"
                            class="form-control">{{ $artist->description }}</textarea>

                    </div>

                    <button type="submit"
                            class="btn spotify-btn">

                        <i class="bi bi-check-circle-fill"></i>
                        Update Artist

                    </button>

                    <a href="/artists"
                       class="btn back-btn">

                        <i class="bi bi-arrow-left"></i>
                        Back

                    </a>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>
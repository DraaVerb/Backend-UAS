<!DOCTYPE html>
<html>
<head>
    <title>Add Artist</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body{
            background:#121212;
            color:white;
        }

        .form-card{
            background:#181818;
            padding:30px;
            border-radius:15px;
            margin-top:50px;
            box-shadow:0 0 15px rgba(0,0,0,0.5);
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

        .form-control{
            background:#282828;
            border:none;
            color:white;
        }

        .form-control:focus{
            background:#333;
            color:white;
            box-shadow:none;
            border:none;
        }

        .form-control::placeholder{
            color:#b3b3b3;
        }

        textarea{
            resize:none;
        }

        label{
            margin-bottom:8px;
            font-weight:bold;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="form-card">

                <h2 class="mb-4">
                    <i class="bi bi-mic-fill"></i>
                    Add New Artist
                </h2>

                <form action="/artists" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label>
                            <i class="bi bi-person-fill"></i>
                            Artist Name
                        </label>

                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            placeholder="Enter artist name">
                    </div>

                    <div class="mb-3">
                        <label>
                            <i class="bi bi-globe"></i>
                            Country
                        </label>

                        <input
                            type="text"
                            name="country"
                            class="form-control"
                            placeholder="Enter country">
                    </div>

                    <button type="submit" class="btn spotify-btn">
                        <i class="bi bi-floppy-fill"></i>
                        Save Artist
                    </button>

                    <a href="/artists" class="btn btn-secondary">
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
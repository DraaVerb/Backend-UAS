<h1>Add Artist</h1>

<form action="/artists" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Artist Name">
    <br><br>

    <input type="text" name="country" placeholder="Country">
    <br><br>

    <textarea name="description" placeholder="Artist Description" rows="5" cols="40"></textarea>
    <br><br>

    <button type="submit">
        Save
    </button>
</form>
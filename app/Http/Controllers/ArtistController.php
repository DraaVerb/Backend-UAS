public function index()
{
    $artists = Artist::all();
    return view('songs.artist.index', compact('artists'));
}

public function create()
{
    return view('songs.artist.create');
}

public function show($id)
{
    $artist = Artist::findOrFail($id);
    return view('songs.artist.show', compact('artist'));
}

public function edit($id)
{
    $artist = Artist::findOrFail($id);
    return view('songs.artist.edit', compact('artist'));
}

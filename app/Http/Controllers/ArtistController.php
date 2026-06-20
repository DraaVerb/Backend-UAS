<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        return view('songs.artist.index', compact('artists'));
    }

    public function create()
    {
        return view('songs.artist.create');
    }

    public function store(Request $request)
    {
        Artist::create([
            'name' => $request->name,
            'country' => $request->country,
            'description' => $request->description
        ]);

        return redirect('/artists');
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

    public function update(Request $request, $id)
    {
        $artist = Artist::findOrFail($id);

        $artist->update([
            'name' => $request->name,
            'country' => $request->country,
            'description' => $request->description
        ]);

        return redirect('/artists');
    }

    public function destroy($id)
    {
        $artist = Artist::findOrFail($id);
        $artist->delete();

        return redirect('/artists');
    }
}

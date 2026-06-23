<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::with('artist')->get();
        return view('albums.index', compact('albums'));
    }

    public function create()
    {
        $artists = Artist::all();
        return view('albums.create', compact('artists'));
    }

    public function store(Request $request)
    {
        Album::create([
            'title'        => $request->title,
            'artist_id'    => $request->artist_id,
            'release_year' => $request->release_year,
            'description'  => $request->description,
        ]);

        return redirect('/albums');
    }

    public function show($id)
    {
        $album = Album::with('artist')->findOrFail($id);
        return view('albums.show', compact('album'));
    }

    public function edit($id)
    {
        $album   = Album::findOrFail($id);
        $artists = Artist::all();
        return view('albums.edit', compact('album', 'artists'));
    }

    public function update(Request $request, $id)
    {
        $album = Album::findOrFail($id);
        $album->update([
            'title'        => $request->title,
            'artist_id'    => $request->artist_id,
            'release_year' => $request->release_year,
            'description'  => $request->description,
        ]);

        return redirect('/albums');
    }

    public function destroy($id)
    {
        Album::findOrFail($id)->delete();
        return redirect('/albums');
    }
}

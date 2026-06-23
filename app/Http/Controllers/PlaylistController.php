<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function index()
    {
        $playlists = Playlist::all();
        return view('playlists.index', compact('playlists'));
    }

    public function create()
    {
        return view('playlists.create');
    }

    public function store(Request $request)
    {
        Playlist::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect('/playlists');
    }

    public function show($id)
    {
        $playlist = Playlist::findOrFail($id);
        return view('playlists.show', compact('playlist'));
    }

    public function edit($id)
    {
        $playlist = Playlist::findOrFail($id);
        return view('playlists.edit', compact('playlist'));
    }

    public function update(Request $request, $id)
    {
        $playlist = Playlist::findOrFail($id);

        $playlist->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect('/playlists');
    }

    public function destroy($id)
    {
        $playlist = Playlist::findOrFail($id);
        $playlist->delete();

        return redirect('/playlists');
    }
}
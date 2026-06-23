<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function index()
    {
        $playlists = Playlist::withCount('songs')->get();
        return view('playlists.index', compact('playlists'));
    }

    public function create()
    {
        $songs = Song::all();
        return view('playlists.create', compact('songs'));
    }

    public function store(Request $request)
    {
        $playlist = Playlist::create([
            'name'        => $request->name,
            'description' => $request->description,
        ]);

        if ($request->has('song_ids')) {
            $playlist->songs()->attach($request->song_ids);
        }

        return redirect('/playlists');
    }

    public function show($id)
    {
        $playlist = Playlist::with('songs.genre')->findOrFail($id);
        return view('playlists.show', compact('playlist'));
    }

    public function edit($id)
    {
        $playlist     = Playlist::with('songs')->findOrFail($id);
        $songs        = Song::all();
        $selectedSongs = $playlist->songs->pluck('id')->toArray();
        return view('playlists.edit', compact('playlist', 'songs', 'selectedSongs'));
    }

    public function update(Request $request, $id)
    {
        $playlist = Playlist::findOrFail($id);
        $playlist->update([
            'name'        => $request->name,
            'description' => $request->description,
        ]);

        $playlist->songs()->sync($request->song_ids ?? []);

        return redirect('/playlists');
    }

    public function destroy($id)
    {
        Playlist::findOrFail($id)->delete();
        return redirect('/playlists');
    }
}

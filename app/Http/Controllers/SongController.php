<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Genre;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();

        return view('songs.index', compact('songs'));
    }

    public function create()
    {
        $genres = Genre::all();

        return view('songs.create', compact('genres'));
    }

    public function store(Request $request)
    {
        Song::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'album' => $request->album,
            'duration' => $request->duration,
            'genre_id' => $request->genre_id,
        ]);

        return redirect('/songs');
    }

    public function show($id)
    {
        $song = Song::with([
                'genre',
                'comments',
                'ratings'
        ])->findOrFail($id);

        return view('songs.show', compact('song'));
    }
}
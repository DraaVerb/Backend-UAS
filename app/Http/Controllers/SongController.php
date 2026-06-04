<?php

namespace App\Http\Controllers;

use App\Models\Song;
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
        return view('songs.create');
    }

    public function store(Request $request)
    {
        Song::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'album' => $request->album,
            'duration' => $request->duration,
        ]);

        return redirect('/songs');
    }

    public function show($id)
    {
        $song = Song::findOrFail($id);

        return view('songs.show', compact('song'));
    }
}
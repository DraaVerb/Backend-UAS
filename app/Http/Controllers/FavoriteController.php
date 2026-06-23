<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Song;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Favorite::with('song')->get();

        return view('favorites.index', compact('favorites'));
    }

    public function store(Request $request)
    {
        Favorite::create([
            'song_id' => $request->song_id
        ]);

        return redirect('/favorites');
    }

    public function show($id)
    {
        $favorite = Favorite::with('song')->findOrFail($id);

        return view('favorites.show', compact('favorite'));
    }

    public function destroy($id)
    {
        Favorite::findOrFail($id)->delete();

        return redirect('/favorites');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Genre;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search.index');
    }

    public function result(Request $request)
    {
        $songs = Song::where('title', 'like', '%' . $request->keyword . '%')
            ->get();

        return view('search.result', compact('songs'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Song;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::with('song')->latest()->get();
        $avgScore = $ratings->avg('score');
        return view('ratings.index', compact('ratings', 'avgScore'));
    }

    public function create()
    {
        $songs = Song::all();
        return view('ratings.create', compact('songs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'song_id'    => 'required|exists:songs,id',
            'rater_name' => 'required|string|max:255',
            'score'      => 'required|integer|min:1|max:5',
            'review'     => 'nullable|string|max:1000',
        ]);

        Rating::create([
            'song_id'    => $request->song_id,
            'rater_name' => $request->rater_name,
            'score'      => $request->score,
            'review'     => $request->review,
        ]);

        return redirect('/ratings')->with('success', 'Rating submitted successfully!');
    }

    public function show($id)
    {
        $rating = Rating::with('song')->findOrFail($id);
        return view('ratings.show', compact('rating'));
    }

    public function destroy($id)
    {
        Rating::findOrFail($id)->delete();
        return redirect('/ratings')->with('success', 'Rating deleted.');
    }
}

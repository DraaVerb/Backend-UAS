<?php

namespace App\Http\Controllers;

use App\Models\Rating;


use App\Models\Song;

use Illuminate\Http\Request;

class RatingController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Rating::create([
        'song_id'=>$request->song_id,
        'rating'=>$request->rating
    ]);

    return redirect('/songs/' . $request->song_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rating $rating)
    {
        //
    }
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

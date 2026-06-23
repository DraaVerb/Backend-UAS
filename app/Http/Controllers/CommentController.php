<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Song;
use Illuminate\Http\Request;

class CommentController extends Controller
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
        Comment::create([
        'song_id'=>$request->song_id,
        'username'=>$request->username,
        'comment'=>$request->comment
    ]);

    return redirect('/songs/' . $request->song_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
    public function index()
    {
        $comments = Comment::with('song')->latest()->get();
        return view('comments.index', compact('comments'));
    }

    public function create()
    {
        $songs = Song::all();
        return view('comments.create', compact('songs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'song_id'        => 'required|exists:songs,id',
            'commenter_name' => 'required|string|max:255',
            'content'        => 'required|string|max:1000',
        ]);

        Comment::create([
            'song_id'        => $request->song_id,
            'commenter_name' => $request->commenter_name,
            'content'        => $request->content,
        ]);

        return redirect('/comments')->with('success', 'Comment added successfully!');
    }

    public function show($id)
    {
        $comment = Comment::with('song')->findOrFail($id);
        return view('comments.show', compact('comment'));
    }

    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();
        return redirect('/comments')->with('success', 'Comment deleted.');

    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\CreateCommentMail;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|min:1|max:2500',
            'team_id' => 'required|exists:teams,id',
        ]);

        $comment = Comment::create([
            'content' => $request->content,
            'user_id' => Auth::user()->id,
            'team_id' => $request->team_id,
        ]);

        $mailData = $comment->only('content');
        Mail::to(Auth::user()->email)->send(new CreateCommentMail($mailData));

        return redirect('/teams/' . $request->team_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
        // Validate input
        $data = $request->validate([
            'body' => 'required|string'
        ]);
        
        // Create new comment
        $comment = Comment::create([
            'body'       => $data['body'],
            'user_id'    => auth()->id(),
            'article_id' => $article->id,
        ]);
        
        // Redirect or respond (depending on your needs)
        return redirect()->back()->with('success', 'Comment added successfully!');
    }
    public function edit(Comment $comment)
{
    // Optionally check if the auth user is allowed to edit
    // e.g. if ($comment->user_id !== auth()->id()) { abort(403); }

    return view('comments.edit', compact('comment'));
}

public function update(Request $request, Comment $comment)
{
    // Again, check if authorized
    $this->authorize('update', $comment);

    $data = $request->validate([
        'body' => 'required|string'
    ]);

    $comment->update($data);

    return redirect()->back()->with('success', 'Comment updated successfully!');
}

public function destroy(Comment $comment)
{
    $this->authorize('delete', $comment);
    $comment->delete();

    return redirect()->back()->with('success', 'Comment deleted successfully!');
}

}

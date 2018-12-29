<?php
 
namespace App\Http\Controllers;
 
use App\Comment;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
 
class CommentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
 
 
    public function store(CommentRequest $request)
    {
        $post = Post::findOrFail($request->posts_id);
 
        Comment::create([
            'body' => $request->body,
            'user_id' => Auth::id(),
            'posts_id' => $posts->id
        ]);
        return redirect()->route('posts.show', $posts->id);
    }
}
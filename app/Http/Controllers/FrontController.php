<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Post;
use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Repositories\PostRepository;

class FrontController extends Controller
{
    public function __construct() {
        
    }

    /**
     * Display a listing some resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PostRepository $postrepository){
        $posts = $postrepository->getPostSortByStatusAndDateWithPaginate(3);
        $current = Carbon::now();

        return view('front.home', compact('posts', 'current'));
    }

    /**
     * Display a listing of all resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllPosts() {
        $posts = Post::where('status', '=', 'published')->orderBy('created_at', 'desc')->get();
        
        return view('front.posts', compact('posts'));
    }

    /**
     * Show a post.
     *
     * @param  int $i
     * @return \Illuminate\Http\Response
     */
    public function showPost(int $id) {
        $post = Post::findOrFail($id);
        $comments = Comment::where('post_id', $post->id)->where('status', 'published')->orderBy('created_at', 'desc')->get();

        return view('front.single', compact('post', 'comments'));
    }

    /**
     * Send a comment to the administrator.
     * 
     * @param  CommentRequest $request
     * @return A front view comment.blade.php
     */
    public function sendComment(CommentRequest $request) {
        $comment = Comment::create([
            'name'    => $request->name,
            'content' => $request->content,
            'post_id' => $request->post_id
        ]);

        return view('front.comment', compact('comment'));
    }

    /**
     * Call the LegalNotice
     * 
     * @return View mentionslegales.blade.php
     */
    public function showLegalNotice() {

        return view('front.legalnotice');
    }
    
}

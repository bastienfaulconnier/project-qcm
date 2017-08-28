<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Repositories\PostRepository;

class FrontController extends Controller
{
    public function __construct() {
        
    }

    //
    public function index(PostRepository $postrepository){
        $posts = $postrepository->getPostSortByStatusAndDateWithPaginate(3);

        return view('front.home', compact('posts'));
    }

    public function showAllPosts() {
        $posts = Post::where('status', '=', 'published')->orderBy('date', 'desc')->get();
        
        return view('front.posts', compact('posts'));
    }

    public function showPost(int $id) {
        $post = Post::findOrFail($id);
        $comments = Comment::where('post_id', $post->id)->where('status', 'published')->orderBy('created_at', 'desc')->get();

        return view('front.single', compact('post', 'comments'));
    }

    public function sendComment(Request $request) {
        $comment = Comment::create([
            'name'    => $request->name,
            'content' => $request->content,
            'post_id' => $request->post_id
        ]);

        return view('front.comment', compact('comment'));
    }

    
    public function showContact() {
        return view('front.contact');
    }

    public function showLegalNotice() {
        return view('front.legalnotice');
    }

    public function showLycee() {
        return view('front.lycee');
    }
    
}

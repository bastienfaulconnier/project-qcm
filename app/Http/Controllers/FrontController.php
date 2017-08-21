<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Post;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct() {
        
    }

    //
    public function index() {
        
        $posts = Post::where('status', '=', 'published')->orderBy('date', 'desc')->limit(3)->get();

        return view('front.home', compact('posts'));
    }

    public function showAllPosts() {
        $posts = Post::where('status', '=', 'published')->orderBy('date', 'desc')->get();
        
        return view('front.posts', compact('posts'));
    }

    public function showPost(int $id) {
        $post = Post::findOrFail($id);

        return view('front.single', compact('post'));
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

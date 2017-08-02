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
        
        $posts = Post::where('status', '=', 'published')->orderBy('date', 'desc')->limit(5)->get();

        return view('front.home', compact('posts'));
    }

    public function showPosts() {
        $posts = Post::all()->orderBy('date', 'desc');
        
        return view('front.posts', compact('posts'));
    }

    /*
    public function showContact() {
        return view('front.contact');
    }

    public function showLegalNotice() {
        return view('front.legalnotice');
    }

    public function showLycee() {
        return view('front.lycee');
    }
    */
}

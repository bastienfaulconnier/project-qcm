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
        
        $posts = Post::all()->where('status', '=', 'published');

        return view('front.home', compact('posts'));
    }

    public function showPost(int $id) {
        $post = Post::findOrFail($id);
        
        return view('front.single', compact('post', 'user'));
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

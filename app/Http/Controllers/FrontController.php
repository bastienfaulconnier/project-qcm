<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;

class FrontController extends Controller
{
    public function __construct() {
        
    }

    //
    public function index() {
        $posts = Post::all();
        $posts = Post::with('post', 'user')->published();

        return view('front.home', compact('post','user'));
    }

    public function showPost(int $id) {
        $post = Post::findOrFail($id);
        
        return view('front.single', compact('post', 'user'));
    }

    public function showContact() {
        return view('front.contact');
    }

    public function showLegalNotice() {
        return view('front.legalnotice');
    }

    public function showLycée() {
        return view('front.lycee');
    }
}

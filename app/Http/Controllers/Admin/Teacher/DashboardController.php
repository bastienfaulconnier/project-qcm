<?php

namespace App\Http\Controllers\Admin\Teacher;

use DB;
use App\User;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){

        /* $posts = DB::table('posts')->select('id','title')->get();

        var_dump($posts);
        die();
        return view('back.teacher.dashboard', compact('posts')); */
        
            
            $posts = Post::where('status', '=', 'published')->orderBy('date', 'desc')->limit(5)->get();
    
            return view('back.teacher.dashboard', compact('posts'));
        }
    
        public function showAllPosts() {
            $posts = Post::orderBy('date', 'desc')->get();
            
            return view('back.teacher.listposts', compact('posts'));
        }
    
        public function showPost(int $id) {
            $post = Post::findOrFail($id);
    
            return view('back.teacher.editpost', compact('post'));
        }

    }


<?php

namespace App\Http\Controllers\Admin\Teacher;

use DB;
use App\User;
use App\Post;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
       
            $posts = Post::where('status', '=', 'published')->orderBy('date', 'desc')->limit(5)->get();
            $questions = Question::where('status', '=', 'published')->orderBy('created_at', 'desc')->limit(5)->get();
    
            return view('back.teacher.dashboard', compact('posts', 'questions'));
        }

    }


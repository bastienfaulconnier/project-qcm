<?php

namespace App\Http\Controllers\Admin\Teacher;

use DB;
use App\User;
use App\Post;
use App\Question;
use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(PostRepository $postrepository){
       		$posts = $postrepository->getPostSortByStatusAndDateWithPaginate(5);
            $questions = Question::where('status', '=', 'published')->orderBy('created_at', 'desc')->limit(5)->get();
    
            return view('back.teacher.dashboard', compact('posts', 'questions'));
        }

    }


<?php

namespace App\Http\Controllers\Admin\Student;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    	$questions = Question::where('status', 'published')->where('class_level', auth()->user()->role)->orderBy('created_at', 'desc')->get();

    	return view('back.student.dashboard', compact('questions'));
    }
}

<?php

namespace App\Http\Controllers\Admin\Student;

use App\User;
use App\Choice;
use App\Score;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::where('status', '=', 'published')
        					   ->where('class_level', auth()->user()->role)
        					   ->orderBy('created_at', 'desc')
        					   ->get();
        $scoresQuestionId = Score::where('user_id', auth()->user()->id)->pluck('question_id')->toArray();

        return view('back.student.qcm.index', compact('questions', 'scoresQuestionId'));
    }

    /**
     * Show the QCM to the user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function doing($id) 
    {
    	$question = Question::findOrFail($id);

    	return view('back.student.qcm.doing', compact('question'));
    }

    /**
     * Save the responses of the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function done(Request $request, $id)
    {
    	$question = Question::findOrFail($id);
    	$good_answer = 0;

    	for($i = 0; $i < $request->number_choice; $i++) {
    		$reponse = $request->input($i);

    		if($reponse === $question->choices[$i]->status) {
    			$good_answer++;
    		}
    	}

    	$score = Score::create([
    		'status_question' => 'done',
    		'note'			  => $good_answer,
    		'user_id' 		  => auth()->user()->id,
    		'question_id' 	  => $question->id
    	]);

        return redirect(route('student/qcm/index'));
    }
}

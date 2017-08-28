<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
    	$comments = Comment::orderBy('created_at', 'desc')->get();

    	return view('back.teacher.comments.index', compact('comments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->status = $request->status;
        $comment->save();

        return redirect()->route('teacher/comments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id)->delete();

        return redirect()->route('teacher/comments');
    }
}

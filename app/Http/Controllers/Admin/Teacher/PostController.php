<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('date', 'desc')->get();

        return view('back.teacher.posts.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.teacher.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        /* if($request->hasFile('url_thumbnail'))
        {
            $ext = $request->url_thumbnail->extension();
            $linkName = str_random(10) . '.' . $ext;
            $request->url_thumbnail->storeAs('images', $linkName );
            $post->url_thumbnail = $linkName;
            $post->save();

            return 'pouet';
        } */
        
        $post = Post::create($request->all());


        if ($post->url_thumbnail == null) {
            $post->url_thumbnail = 'img/default.jpg';
            $post->save();
        }
        else {
            $request->hasFile('url_thumbnail');
            $ext = $request->url_thumbnail->extension();
            $linkName = str_random(10) . '.' . $ext;
            $request->url_thumbnail->storeAs('images', $linkName );
            $post->url_thumbnail = 'img/' . $linkName;
            $request->url_thumbnail->move(public_path('img'), $linkName);            
            $post->save();
        }
            
        return redirect()->route('posts.index')->with('message', 'Création effectuée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        
        return view('back.teacher.posts.edit', compact('post'));
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
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->save();
        
        return redirect()->route('posts.index')->with('message', 'Mise à jour effectuée !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Post::find($id);
        $post->delete();

        return redirect()->route('posts.index')->with('message', 'Suppression effectuée');
    }
}

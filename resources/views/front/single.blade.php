@extends('layouts.master')

@section('content')
	<div class="single-content parts">
                <img class="single-img" src="{{URL::asset($post->url_thumbnail)}}" alt="">
                <h2>{{$post->title}}</h2>
                <span>{{$post->created_at->format('d/m/Y')}}</span>
                <p>{{$post->content}}</p>
            </div>

            <a href="posts.html" class="retreat">Revenir aux articles >></a>

            <div class="comments-content parts">
                <hr>
                <h2>Commentaires</h2>
                <p>Ajouter un commentaire</p>

                <form action="{{url('posts/comment')}}" method="post" novalidate>
                    {{ csrf_field() }}

                    <div class="form-input">
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <input type="text" name="name" placeholder="Pseudo">
                        @if($errors->has('name')) 
	                        <span>{{$errors->first('name')}}</span>
	                    @endif
                    </div>
    
                    <div class="form-input">
                        <input type="text" name="content" placeholder="Message...">
						@if($errors->has('content')) <span>{{$errors->first('content')}}
	                        </span>
	                    @endif
                    </div>
    
                    <input type="submit" name="action" value="Envoyer">
                </form>

                <div class="all-comments">
                    @forelse($comments as $comment)
                        <div class="comment">
                            <h4>{{$comment->name}} - <span>{{$comment->created_at->format('d/m/Y')}}</span></h4>
                            <p>{{$comment->content}}</p>
                        </div>
                    @empty
                        <p>Pas de commentaire enregistré.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="sidebar-content">
            @include('partials.front.sidebar')
        </section>
@endsection
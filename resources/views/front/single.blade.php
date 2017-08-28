@extends('layouts.master')

@section('content')
	<section class="single-post">
		<img src="{{url($post->url_thumbnail)}}" alt="">

		<div class="single-content eight columns">
			<h2>{{$post->title}}</h2>
			<p>{{ $post->created_at->format('d/m/Y') }}</p>
			<p>{{$post->content}}</p>

			<a href="{{ url('posts') }}">Renvenir aux actualités >></a>

			<form action="{{url('posts/comment')}}" method="post">
				{{ csrf_field() }}

				<input type="hidden" name="post_id" value="{{$post->id}}">
				<input type="text" name="name" class="six columns" placeholder="Pseudo">

				<input type="text" name="content" class="twelve columns" placeholder="Message...">

				<input type="submit" name="action" value="Envoyer">
			</form>

			@forelse($comments as $comment)
				<h6>{{$comment->name}} - <span>{{$comment->created_at->format('d/m/Y')}}</span></h6>
				<p>{{$comment->content}}</p>
			@empty
				<p>Pas de commentaire enregistré.</p>
			@endforelse
		</div>

		@include('partials.front.sidebar')
	</section>
@endsection
@extends('layouts.master')

@section('content')
	<section class="single-post">
		<img src="{{url($post->url_thumbnail)}}" alt="">

		<div class="single-content eight columns">
			<h2>{{$post->title}}</h2>

			<p>{{$post->content}}</p>

			<a href="{{ url('posts') }}">Renvenir aux actualités >></a>
		</div>

		@include('partials.front.sidebar')
	</section>
@endsection
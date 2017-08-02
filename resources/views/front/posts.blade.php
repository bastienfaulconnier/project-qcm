@extends('layouts.master')

<h2>Touts les POSTS !</h2>

@section('content')
	
	@forelse ($posts as $post)
		<div class="post" style="background:#666; padding:10px; color:#FFF; margin-bottom:20px;">
			<div class="post-img">
				<img src="{{url($post->url_thumbnail)}}" alt="">
			</div>

			<div class="post-content">
				<h4>{{$post->title}}</h4>
				<p>
					{{$post->abstract}}
					<a href="#">Lire la suite</a>
				</p>
				<span>{{$post->status}}</span>
			</div>
		</div>
	@empty
		<p>Il n'y a aucun post pour le moment. Merci.</p>
	@endforelse

@endsection
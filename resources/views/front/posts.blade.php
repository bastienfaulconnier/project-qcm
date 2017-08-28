@extends('layouts.master')

@section('content')
	
	<section class="last-posts">
		<div class="all-posts eight columns">
	        <div class="head-section">
	            <h3>Toutes les actus</h3>
	            <hr>
	            <span>Toutes les actualités disponibles.</span>
	        </div>

			@forelse ($posts as $post)

				<div class="post six columns">
	                <div class="post-content">
	                    <h2>{{ $post->title }}</h2>
	                    <p>
	                        {{ $post->abstract }}
	                    </p>
	                    <a href="{{ url('posts', $post->id) }}">Lire la suite</a>
	                </div>

	                <img src="{{ URL::asset($post->url_thumbnail) }}" alt="">
	            </div>

			@empty
				<h5>Il n'y a pas de post pour le moment. Merci.</h5>
			@endforelse
	    </div>

	    @include('partials.front.sidebar')
	</section>

@endsection


@extends('layouts.master')

@section('content')
	
<div class="posts-part">
    <div class="columns">
        @forelse($posts as $post)
            <div class="post">
                <div class="post-img">
                    <img src="{{URL::asset($post->url_thumbnail)}}" alt="">
                </div>
                <div class="post-content">
                    <h3>{{$post->title}}</h3>
                    <span>{{$post->created_at->format('d/m/Y')}}</span>
                    <p>{{ $post->abstract }}</p>
                    <a href="{{url('posts', $post->id)}}">Lire la suite</a>
                </div>
            </div>
        @empty
            <p>Pas d'article enregistré.</p>
        @endforelse
    </div>
</div>
</section>

<section class="sidebar-content">
    @include('partials.front.sidebar')
</section>

@endsection


@extends('layouts.admin')

@section('content')

	<div class="row">
        <div class="col s12 m6">
          <div class="card green darken-4">
            <div class="card-content white-text">
              <span class="card-title">Derniers articles</span>
              @forelse($posts as $post)
                <a href="{{ route('posts.edit', $post->id) }}"><p> {{$post->title}} </p></a>
              @empty
              <p>Aucun article.</p>
              @endforelse
            </div>
            <div class="card-action">
              <a href="{{url('teacher/posts')}}">Voir tous les articles</a>
            </div>
          </div>
        </div>
      </div>

	  <div class="row">
        <div class="col s12 m6">
          <div class="card green darken-4">
            <div class="card-content white-text">
              <span class="card-title">Derniers QCM</span>
              <a href="#"><p>QCM #1</p></a>
      			  <a href="#"><p>QCM #2</p></a>
      			  <a href="#"><p>QCM #3</p></a>
            </div>
            <div class="card-action">
              <a href="{{url('teacher/questions')}}">Voir tous les QCM</a>
            </div>
          </div>
        </div>
      </div>

@endsection
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
              @forelse($questions as $question)
                <a href="{{route('questions.edit', $question->id)}}"><p>{{$question->title}}</p></a>
              @empty
                <p>Pas de QCM enregistré.</p>
              @endforelse
            </div>
            <div class="card-action">
              <a href="{{route('questions.index')}}">Voir tous les QCM</a>
            </div>
          </div>
        </div>
      </div>

@endsection
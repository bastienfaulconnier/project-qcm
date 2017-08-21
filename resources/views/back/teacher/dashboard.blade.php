@extends('layouts.admin')

@section('content')

	<div class="row">
        <div class="col s12 m6">
          <div class="card green darken-4">
            <div class="card-content white-text">
              <span class="card-title">3 articles</span>
              @forelse($posts as $post)
            <a href="#"><p> {{$post->title}} </p></a>
           @empty
           <p>Vide.</p>
           @endforelse
              {{--  <a href="#"><p>{{}}</p></a>
              <a href="#"><p>Article #2</p></a>
              <a href="#"><p>Article #3</p></a>  --}}
            </div>
            <div class="card-action">
              <a href="#">Voir tous les articles</a>
            </div>
          </div>
        </div>
      </div>

	  <div class="row">
        <div class="col s12 m6">
          <div class="card green darken-4">
            <div class="card-content white-text">
              <span class="card-title">3 fiches</span>
              <a href="#"><p>Fiches #1</p></a>
			  <a href="#"><p>Fiches #2</p></a>
			  <a href="#"><p>Fiches #3</p></a>
            </div>
            <div class="card-action">
              <a href="#">Voir toutes les fiches</a>
            </div>
          </div>
        </div>
      </div>

	  <div class="row">
        <div class="col s12 m6">
          <div class="card green darken-4">
            <div class="card-content white-text">
              <span class="card-title">3 élèves</span>
              <a href="#"><p>Elève #1</p></a>
			  <a href="#"><p>Elève #2</p></a>
			  <a href="#"><p>Elève #3</p></a>
            </div>
            <div class="card-action">
              <a href="#">Voir tous les élèves</a>
            </div>
          </div>
        </div>
      </div>

@endsection
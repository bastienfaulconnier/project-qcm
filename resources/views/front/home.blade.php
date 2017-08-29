@extends('layouts.master')

@section('content')
        @forelse($posts as $post)
    @if($loop->first)
        <div class="main-post">
            <div class="post-img">
                <img src="{{URL::asset($post->url_thumbnail)}}" alt="">
            </div>
            <div class="post-content">
                <h3>{{$post->title}}</h3>
                <span>{{$post->created_at->format('d/m/Y')}}</span>
                <p>{{$post->abstract}}</p>
                <a href="{{url('posts', $post->id)}}">Lire la suite</span></a>
            </div>
        </div>

        <div class="posts-part">
    @else
        <div class="post">
            <div class="post-img">
                <img src="{{URL::asset($post->url_thumbnail)}}" alt="">
            </div>
            <div class="post-content">
                <h3>{{$post->title}}</h3>
                <span>{{$post->created_at->format('d/m/Y')}}</span>
                <p>{{$post->abstract}}</p>
                <a href="{{url('posts', $post->id)}}">Lire la suite</a>
            </div>
        </div>
    @endif
@empty
    <p>Pas d'article enregistré.</p>
@endforelse
</div>

<div id="lycee" class="lycee-part parts">
    <hr>
    <h2>Le lycée</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    <div class="content-img">
        <img src="img/try-6.jpg" alt="">
    </div>
</div>

<div id="contact" class="contact-part parts">
    <hr>
    <h2>Contact</h2>
    <form method="post">
        <div class="form-input">
            <input type="text" name="prenom" placeholder="Prénom" required>
        </div>

        <div class="form-input">
            <input type="text" name="nom" placeholder="Nom" required>
        </div>
        
        <div class="form-input" id="input-mail">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        
        <div class="form-input" id="input-text">
            <textarea name="message" placeholder="Message..."></textarea>
        </div>

        <input type="submit" value="Envoyer">
    </form>
</div>
</section>

<section class="sidebar-content">
    @include('partials.front.sidebar')
</section>
@endsection





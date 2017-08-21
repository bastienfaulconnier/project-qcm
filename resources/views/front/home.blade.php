@extends('layouts.master')

@section('content')
        <div class="content">

        <section class="main-post">
            <img src="{{url($posts[0]->url_thumbnail)}}" alt="">

            <div class="main-content">
                <h2>{{ $posts[0]->title }}</h2>
                <p>{{ $posts[0]->abstract }}</p>
                <a href="{{url('posts', $posts[0]->id)}}">Lire la suite</a>        
            </div>  
        </section>

        <section class="last-posts">
            <div class="all-posts eight columns">
                <div class="head-section">
                    <h3>Dernières Actus</h3>
                    <hr>
                    <span>Toutes les dernières actualités dans le monde des mathématiques.</span>
                </div>

                <div class="post six columns">
                    <div class="post-content">
                        <h2>{{ $posts[1]->title }}</h2>
                        <p>
                            {{ $posts[1]->abstract }}
                        </p>
                        <a href="{{url('posts', $posts[1]->id)}}">Lire la suite</a>
                    </div>

                    <img src="{{url($posts[1]->url_thumbnail)}}" alt="">
                </div>
                <div class="post six columns">
                    <div class="post-content">
                        <h2>{{ $posts[2]->title }}</h2>
                        <p>
                            {{ $posts[2]->abstract }}
                        </p>
                        <a href="{{url('posts', $posts[2]->id)}}">Lire la suite</a>
                    </div>

                    <img src="{{url($posts[2]->url_thumbnail)}}" alt="">
                </div>

                <a href="{{ url('posts') }}">Voir toutes les actus >></a>
            </div>

            @include('partials.front.sidebar')
        </section>

        <section id="lycee">
            <div class="head-section eight columns">
                <h3>Le lycée</h3>
                <hr>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at iaculis eros, in sagittis odio. Ut consequat tortor sed duiefficitur, vel posuere ipsum semper. Ut id lorem porttitor, laoreet augue quis, mollis sem. Nunc et est interdum, sagittis
                justo id, volutpat mi. Sed enim risus, imperdiet eu lectus sit amet, consectetur placerat nisl. Nunc dapibus sagittis maximus. Fusce mattis scelerisque posuere. Proin fermentum arcu et tempus iaculis.</span>    
            </div>

            <img src="{{ URL::asset('img/fond-school.jpg') }}" alt="">
        </section>

        <section id="contact">
            <div class="head-section eight columns">
                <h3>Contact</h3>
                <hr>
                <span>Contactez nous.</span>  
            </div>

            <form class="eight columns" method="POST">
				{{ csrf_field() }}

                <input type="text" name="prenom" placeholder="Prénom" class="six columns" required>
                <input type="text" name="nom" placeholder="Nom" class="six columns" required>
                <input type="email" name="email" placeholder="Email" class="twelve columns" required>
                
                <textarea name="message" class="twelve columns" placeholder="Message..."></textarea>

                <input type="submit" value="envoyer">
            </form>
        </section>
@endsection



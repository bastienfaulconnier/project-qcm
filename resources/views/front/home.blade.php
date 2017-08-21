@extends('layouts.master')

@section('content')
        <div class="content">

        @forelse($posts as $post)
            @if($loop->first)

                <section class="main-post">
                    <img src="{{url($post->url_thumbnail)}}" alt="">

                    <div class="main-content">
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->abstract }}</p>
                        <a href="{{url('posts', $post->id)}}">Lire la suite</a>        
                    </div>  
                </section>

            @endif
        @empty
            <h5>Pas de post enregistré.</h5>
        @endforelse

        

        <section class="last-posts">
            <div class="all-posts eight columns">
                <div class="head-section">
                    <h3>Dernières Actus</h3>
                    <hr>
                    <span>Toutes les dernières actualités dans le monde des mathématiques.</span>
                </div>

                @forelse($posts as $post)
                    @if(!$loop->first)

                        <div class="post six columns">
                            <div class="post-content">
                                <h2>{{ $post->title }}</h2>
                                <p>
                                    {{ $post->abstract }}
                                </p>
                                <a href="{{url('posts', $post->id)}}">Lire la suite</a>
                            </div>

                            <img src="{{url($post->url_thumbnail)}}" alt="">
                        </div>

                    @endif
                @empty
                    <h5>Pas de post enregistré.</h5>
                @endforelse


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

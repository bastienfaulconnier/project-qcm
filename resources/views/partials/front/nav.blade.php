<header>
    <nav>
        <div class="first-nav">
            <a href="{{ url('/') }}">home</a>
            <a href="{{ url('/#lycee') }}">lycée</a>
            <a href="{{ url('/#contact') }}">contact</a>
            <a href="{{ url('posts') }}">posts</a>
        </div>

        <div class="second-nav">
            @if(auth()->check())
		        <a href="{{route('logout')}}">déconnexion</a>
		        <a href="{{route('teacher/home')}}">dashboard</a>
		    @else
				<a href="{{route('login')}}">connexion</a>
		    @endif
        </div>
    </nav>
</header>

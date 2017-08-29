<header>
    <nav>
        <a href="{{url('/')}}">home</a>
        <a href="{{url('/#lycee')}}">lycée</a>
        <a href="{{url('/#contact')}}">contact</a>
        <a href="{{url('posts')}}">posts</a>
        <hr>
        @if(auth()->check())
            <a href="{{route('teacher/home')}}">dashboard</a>
            <a href="{{route('logout')}}">déconnexion</a>
        @else
            <a href="{{route('login')}}">connexion</a>
        @endif
    </nav>
</header>
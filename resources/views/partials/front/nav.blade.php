<nav>
	<a href="{{ url('/') }}">Accueil</a>
	<a href="{{ url('posts') }}">Posts</a>
	<a href="{{ url('lycee') }}">Lycée</a>
	|
	@if(auth()->check())
        <a href="{{route('logout')}}">Se déconnecter</a>
        <a href="{{route('teacher/home')}}">dashboard</a>
    @else
		<a href="{{route('login')}}">Login</a>
    @endif
</nav>
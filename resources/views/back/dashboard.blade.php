@extends('layouts.admin')

<ul>
    <li>
        <a href="{{route('home')}}">Accueil</a>
    </li>
    <li>
        <a href="{{route('logout')}}">Se déconnecter</a>
    </li>
    <li>
        <a href="{{url('dashboard')}}">Dashboard</a>
    </li>
</ul>

@section('content')
	<p>Voici le dashboard !</p>
@endsection
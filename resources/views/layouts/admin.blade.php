<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>

	{{--  CSS local  --}}
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/adminstyle.css') }}">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Math Back-Office</title>
</head>

<body>
	<main>
		<div id="wrap" style="width:100%; margin:0 auto; padding:0;">
			<nav>
				<ul>
					<li>
						<a href="{{route('logout')}}">Retour au site</a>
					</li>
				</ul>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li>
						{{--  <a href="{{route('home')}}">Accueil</a>  --}}
						<p>Bonjour, admin</p>
					</li>
					<li>
						<a href="{{url('dashboard')}}">Dashboard</a>
					</li>
				</ul>
			</nav>

			<ul id="mav-mobile" class="side-nav fixed" style="transform: translateX(0%);">
				<li><div class="user-view">			
					<div class="background">
						<img src="{{ URL::asset('img/maths.jpg') }}">
					</div>
					<p><strong>Bonjour, admin</strong></p>
      				<p>Bonne journée !</p>
				</div></li>
    			<li><a class="waves-effect" href="#!">Dashboard</a></li>
    			<li><a class="waves-effect" href="#!">Fiches</a></li>
    			<li><a class="waves-effect" href="#!">Articles</a></li>				
    			<li><a class="waves-effect" href="#!">Commentaires</a></li>				
    			<li><a class="waves-effect" href="#!">Pages</a></li>				
    			<li><a class="waves-effect" href="#!">Élèves</a></li>				
			</ul>
			<a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
			
			@include('partials.back.teacher.nav')

			@include('partials.flash')
			
			<div class="content">
				<div>
					@yield('content')
				</div>

				{{--  @section('sidebar')
					<div class="right" style="width:30%; float:right;">
						Ici c'est la sidebar. Twitter and co.	
						
					</div>
				@show  --}}
			</div>

			@include('partials.back.footer')
		</div>
	</main>
</body>
</html>
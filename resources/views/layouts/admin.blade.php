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
	<div id="wrap" style="width:100%; margin:0 auto; padding:0;">
		<nav>
<<<<<<< HEAD
			<ul id="nav-mobile1" class="right hide-on-med-and-down">
			<a href="#" data-activates="nav-mobile" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
=======
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li>
					<a href="{{route('home')}}">Retour au site</a>
				</li>
>>>>>>> 06f76c4b884581a9d1e5f37609a0e5580959efd4
				<li>
					<a href="{{route('logout')}}">Se déconnecter</a>
				</li>
			</ul>
		</nav>
		
		@if(auth()->user()->role !== 'teacher')
			@include('partials.back.student.nav')
		@else
			@include('partials.back.teacher.nav')
		@endif
		

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

	{{-- JS local --}}
	<script src="{{ URL::asset('js/admin.js') }}"></script>
</body>
</html>
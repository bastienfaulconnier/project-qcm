<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Math Back-Office</title>
</head>

<body>
<<<<<<< HEAD
	<div id="wrap">
=======
	<div id="wrap" style="width:100%; margin:0 auto; padding:0;">
		<nav>
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
		</nav>

>>>>>>> 0757db8532fe35b0b437732412f6d0015ef5a975
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
</body>
</html>
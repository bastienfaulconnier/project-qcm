<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	{{--  CSS local  --}}
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/adminstyle.css') }}">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Math Back-Office</title>
	
</head>

<body>
	<div id="wrap" style="width:100%; margin:0 auto; padding:0;">
		<nav>
		<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul id="nav-mobile" class="right">
				<li>
					<a href="{{route('home')}}">Retour au site</a>
				</li>
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

		</div>
	</div>

	{{-- JS local --}}
	<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
	<script src="{{ URL::asset('js/admin.js') }}"></script>
	<script>
		// Lorsqu'on envoie le form
		$('.delete-form').on('submit', function (e) {
			e.preventDefault(); // Bloque l'envoi du formulaire
			let form = this;
			// Ouvre la modale
			$('#modal1').modal('open');
			
			// Ajoute un événement sur le bouton "OUI"
			$('#agree-delete').click( function () {
				form.submit();
			});
			
		});
	</script>
</body>
</html>
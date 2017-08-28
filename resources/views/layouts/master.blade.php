<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QCM Math</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/skeleton/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/skeleton/skeleton.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Noticia+Text" rel="stylesheet">
</head>

<body>
	<div id="wrapper">
		<div class="container">
			@include('partials.front.nav')

			@yield('content')
		</div>
	</div>

	@include('partials.front.footer')

    {{-- JS LOCAL --}}
</body>
</html>
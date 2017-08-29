<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Math</title>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    {{-- FONTS --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">
</head>

<body>
    @include('partials.front.nav')

	<div id="wrapper">
        <section class="half-content">
			@yield('content')
	</div>

	@include('partials.front.footer')

    {{-- JS LOCAL --}}
</body>
</html>


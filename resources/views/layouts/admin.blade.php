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
	<div id="wrap" style="width:100%; margin:0 auto; padding:0;">
		@include('partials.nav')
		
		<div class="content" style="width:1200px; margin:0 auto">
			<div class="left" style="width:70%; float:left;">
				@yield('content')
			</div>

			@section('sidebar')
				<div class="right" style="width:30%; float:right;">
					Ici c'est la sidebar. Twitter and co.	
					
				</div>
			@show
		</div>

		@include('partials.footer')
	</div>
</body>
</html>
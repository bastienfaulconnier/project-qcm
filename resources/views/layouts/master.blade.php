<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Math Actu</title>
</head>

<body>
	<div id="wrap" style="width:100%; margin:0 auto; padding:0;">
		@include('partials.front.nav')
		
		<div class="content" style="width:1200px; margin:0 auto; overflow:auto;">
			<div class="left" style="width:70%; float:left;">
				@yield('content')
			</div>

			{{--  @section('sidebar')
				<div class="right" style="width:20%; float:right;">
					Ici c'est la sidebar. Twitter and co.	
					
				</div>
			@show  --}}
		</div>

		@include('partials.front.footer')
	</div>
</body>
</html>
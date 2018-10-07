<!DOCTYPE html>
<html lang="en" style="width: 100%; height: 100%">
<head>
	<meta charset="UTF-8">
	<title>Onetel design studio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="design, web, mobile, development">
	<meta name="description" content="Onetel Design Studio">
	@yield('meta')
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Oswald" rel="stylesheet">
	<!-- <link rel="shortcut icon" type="image/png" href="images/logo.png"> -->
	<link rel="stylesheet" href="{{asset('css/all.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	
	@yield('css')

</head>
<body>
	<div class="wraper">
		<header>
			@yield('header')
		</header>
		
		<main>
			@yield('main')
		</main>
		
		<footer>
			@yield('footer')
		</footer>
	</div>



</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Laracast11')</title>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
</head>
<body>
	<!-- <ul>
		<li><a href="/">Home</a></li>
		<li><a href="/about">About</a></li>
		<li><a href="/contact">Contact</a></li>
	</ul> -->
	
	<div class="container">
		@yield('content')
	</div>
</body>
</html>
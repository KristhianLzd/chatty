<!DOCTYPE html>
<html lang="es">
<head>
	<title>Chatty</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	@include('templates.partials.navigation')
	<div class="container">
		@yield('content')
	</div>

</body>
</html>
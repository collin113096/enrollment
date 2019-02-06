<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row justify-content-center">		
				@yield('content')
		</div>
	</div>
</body>
</html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">		
				@yield('content')
		</div>
	</div>
</body>
</html>
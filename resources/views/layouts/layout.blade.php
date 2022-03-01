<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link rel="Shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" rel="preload" as="style" href="https://static2.lottiefiles.com/css/app.55284d.css">
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">

	@yield('css')
	<script src="{{ mix('js/app.js') }}" defer></script> <!-- el atributo defer hace que se ejecute al final de la carga-->
	<script src="https://static2.lottiefiles.com/js/manifest.495d02.js"></script>
	<script src="https://static2.lottiefiles.com/js/vendor.968e05.js"></script>
	<script src="{{asset ('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
	<script src="{{asset ('bootstrap/js/popper.min.js') }}"></script>
	<script src="{{asset ('bootstrap/js/bootstrap.min.js') }}"></script>

	<title>@yield('title', 'Ctrl Documents')</title>

</head>
<body>
	<div id="app">
		@include('partials.nav')
		@include('partials.session-status')


		<br><br>
		@yield('content')
	</div>
	<script
	  src="https://code.jquery.com/jquery-3.6.0.js"
	  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
	  crossorigin="anonymous">
  	</script>
  	@yield('script')
</body>
</html>

{{-- </head>
<body style="background-color:white">
	<div id="app">
		@include('partials.nav')
		@include('partials.session-status')
		<br><br>
		@yield('content')
	</div>
	<script
	  src="https://code.jquery.com/jquery-3.6.0.js"
	  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
	  crossorigin="anonymous">
  	</script>
  	@yield('script')
</body>
</html> --}}
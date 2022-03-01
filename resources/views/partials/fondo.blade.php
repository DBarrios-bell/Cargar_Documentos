<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('title', 'Aprendible')</title>
	@yield('css')
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
	<script src="{{ mix('js/app.js') }}" defer></script> <!-- el atributo defer hace que se ejecute al final de la carga-->


</head>
<body id="body">
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
	  <style type="text/css">
  	#body {
  background-image: url("background/FONDOXL.png");
  background-repeat:no-repeat;
  background-position-x: center;
  background-position-y:center;
  background-size: 90rem;
}
  </style>
</body>
</html>
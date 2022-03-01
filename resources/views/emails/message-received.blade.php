<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Enviando mensajes desde laravel</title>
</head>
	<p>Recibiste un mensaje de: {{ $msg ['name']}} - {{$msg['email']}} </p>
	<p><strong>Asunto</strong> {{  $msg ['subject']}}</p>
	<p><strong>Contenido</strong> {{  $msg ['content']}}</p>

</body>
</html>


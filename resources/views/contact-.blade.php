{{-- @extends('layout')


@section('content') --}}
	<h3>{{ __('Datos Contactos') }}</h3>


@include('partials.session-status')
	<form method="POST" action="{{ route('messages.store') }}">

		@csrf
		<input name="name" placeholder="Nombre..." value="{{ old('name')}}"><br>
		{!! $errors->first('name', '<small>:message</small><br>') !!}

		<input type="text" name="email" placeholder="Email..." value=" {{ old('email')}} "><br>
		{!! $errors->first('email', '<small>:message</small><br>') !!}

		<input name="subject" placeholder="Asunto..." value="Asunto prueba"><br>
		{!! $errors->first('subject', '<small>:message</small><br>') !!}

		<textarea name="content" placeholder="Mensaje..."></textarea><br>
		{!! $errors->first('content', '<small>:message</small><br>') !!}

		<button> {{ __('send')}} </button>
	</form>

{{-- @endsection --}}
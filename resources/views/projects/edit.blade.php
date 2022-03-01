@extends('layouts.layout')

@section('title', 'Ctrl | Editar proyecto')

@section('content')
	{{-- <h1>@lang('Edit Project')</h1> --}}

	@include('partials.validation-errors')

	<form method="POST" action="{{ route('projects.update', $project) }}">

		@method('PATCH')

		@include('projects._form-edit', ['btnText'=>'Actualizar' , 'btnText1' =>'Cancelar'])

	</form>

@endsection
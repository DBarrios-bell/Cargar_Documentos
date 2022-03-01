@extends('layouts.layout')

@section('title', 'Ctrl | Crear proyecto')

@section('content')



@include('sweetalert::alert')

		<form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">

			@include('projects._form', ['btnText'=>'Guardar' , 'btnText1' =>'Cancelar'])

		</form>

@endsection



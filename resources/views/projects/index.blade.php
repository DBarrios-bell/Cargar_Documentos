@extends('layout')

@section('title', 'Ctrl | Documentos')
@section('content')


<div class="container col-lg-10">


	@if( Auth::user()->nivel == 'Administrador')
		<div class="container lg-12" style="width: 30%" >
			<h1>@lang('Documentos')</h1>
			<i class="fas fa-plus-circle"></i>
			<i class="far fa-badge"></i>
		</div>
		<div class="container" >
			<a href="{{ route('projects.create') }}" class="container col-lg-11" style="display: grid; justify-content: end">
				<img src="/img/add.png" class="" alt="" style="width:50px ; height:50px">
			</a>
		</div>
		{{-- <a type="button" class="btn btn-primary" href="{{ route('projects.create') }}" role="button">Nuevo</a> --}}

		@include('projects._tablelistaradmin')
	@else

	<div class="container lg-12" style="width: 30%" >

		<h1>@lang('Documents')</h1>
	</div>

		@include('projects._tablelistar')

	@endif


</div>
@include('sweetalert::alert')
@endsection



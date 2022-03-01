<div class="row container">
	<div class="col-12">
		<table class="table" id="table_id">


		<thead>
			<th>Nombre</th>
			<th>Observacion</th>
			<th>Fecha creacion</th>
			<th>ver</th>
			<th>editar</th>
			<th>eliminar</th>
		
		</thead>
		<tbody>

			@foreach($projects as $project)


			<tr>
				<td>{{$project->nombre}}</td>
				<td>{{$project->observacion}}</td>
				<td>{{$project->created_at}}</td>
				<td><a class="btn btn-primary" href="/Archivos/{{$project->archivo}}" target="_blank">ver</a></td>
				<td><a class="btn btn-secondary" href=" {{ route('projects.edit' , $project) }} ">Editar</a></td>
				<td>
					<form method="POST" action=" {{ route('projects.destroy' , $project) }} ">
						@csrf @method('DELETE')
						<button class="btn btn-danger">Eliminar</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>

</div>
<!--Modelado de la tabla-->

@section('script')
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
	<script type="text/javascript">

    $('#table_id').DataTable({

    	language:{
    		 "decimal":        "",
    "emptyTable":     "No tienes datos cargados",
    "info":           "Mostrando _START_ al _END_ de _TOTAL_ Proyectos",
    "infoEmpty":      "Mostrando 0 al 0 de 0 Proyectos",
    "infoFiltered":   "(Filtrado de _MAX_ registros totales)",
    "infoPostFix":    "",
    "thousands":      ",",
    "lengthMenu":     "Mostrar _MENU_ Proyectos",
    "loadingRecords": "Cargando...",
    "processing":     "Procesando...",
    "search":         "Buscar:",
    "zeroRecords":    "No se encontraron registros coincidentes",
    "paginate": {
        "first":      "Primero",
        "last":       "Ultimo",
        "next":       "Siguiente",
        "previous":   "Anterior"
    },
    "aria": {
        "sortAscending":  ": activate to sort column ascending",
        "sortDescending": ": activate to sort column descending"
    }
    	}
    });

	</script>

@endsection

@section('css')
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection


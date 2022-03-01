<div class="row container">
	<div class="col-10">
		<table class="table" id="table_id">
		<thead>
			<th>titulo</th>
			<th>url - </th>
			<th>descripcion</th>
			<th>fecha creacion</th>
			<th>ver</th>
			
		</thead>
		<tbody>

			@foreach($ as $)


			<tr>
				<td>{{$->title}}</td>
				<td>{{$->url}}</td>
				<td>{{$->description}}</td>
				<td> {{$ ->created_at}} </td>
				<td><a class="btn btn-primary" href="/Archivos/{{$->pdf}}" target="_blank">ver</a></td>
				
			@endforeach

		</tbody>
	</table>
	</div>

</div>
@include('partials.modeltable')
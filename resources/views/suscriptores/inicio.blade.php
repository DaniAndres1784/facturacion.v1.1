@extends('master.master')

@section('contenido')
	<h1 class="title">Usuarios Servicios Publicos El Tambo-N</h1>
	
	<table id="tabla-suscriptores" class="table">
		<thead>
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Cedula</th>
			</tr>
		</thead>
		<tbody id="body-table">
			@forelse ($suscriptores as $suscriptor)
				<tr>
					<td>{{ $suscriptor->nombres }}</td>
					<td>{{ $suscriptor->apellidos }}</td>
					<td>{{ $suscriptor->cedula }}</td>
				</tr>
			@empty
				<td colspan="3">No hay usuarios</td>
			@endforelse
		</tbody>
	</table>
@endsection
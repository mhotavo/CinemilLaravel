@extends('layouts.admin')

@section('titlePage', 'Listar Fuentes')
@section('titlePanel', 'Listar Fuentes')
@section('content')
<div style="text-align: right;">
	<a href="{{ route('sources.create') }}" class="btn btn-success">Crear Fuente</a>
</div>
<table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>ID</th>
			<th>FUENTE</th>
			<th>ACCIÓN</th>
		</tr>
	</thead>
	<tbody>
			@foreach ($sources as $source)
			<tr>
				<td>{{ $source->id }}</td>
				<td>{{ $source->nom_fuente }}</td>
				<td>
					<a href ="{{ route('sources.edit', $source->id) }}" class="btn btn-warning"> <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
					<a href="{{ route('sources.destroy', $source->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este usuario?')"> <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
				</td>
			</tr>
			@endforeach
	</tbody>
</table> 
	{!! $sources->render() !!}
@endsection
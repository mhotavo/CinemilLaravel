@extends('layouts.admin')

@section('titlePage', 'Listar Usuarios')
@section('titlePanel', 'Listar Usuarios')
@section('content')
<div style="text-align: right;">
	<a href="{{ route('users.create') }}" class="btn btn-success">Crear Usuario</a>
</div>
<table class="table table-striped table-hover ">
	<thead>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>CORREO</th>
			<th>TIPO</th>
			<th>ACCIÓN</th>
		</tr>
	</thead>
	<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>
					@if ($user->type=="admin")
						<span class="label label-danger">{{ $user->type }}</span>
					@else
						<span class="label label-primary">{{ $user->type }}</span>
					@endif
				</td>
				<td>
					<a href ="{{ route('users.edit', $user->id) }}" class="btn btn-warning"> <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
					<a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este usuario?')"> <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
				</td>
			</tr>
			@endforeach
	</tbody>
</table> 
	{!! $users->render() !!}
@endsection
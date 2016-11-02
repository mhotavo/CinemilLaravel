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
				<td>{{ $user->mail }}</td>
				<td>
					@if ($user->type=="admin")
						<span class="label label-danger">{{ $user->type }}</span>
					@else
						<span class="label label-primary">{{ $user->type }}</span>
					@endif
				</td>
				<td>
					<a href="" class="btn btn-danger">Eliminar</a>
					<a href="" class="btn btn-warning">Editar</a>
				</td>
			</tr>
			@endforeach
	</tbody>
</table> 
	{!! $users->render() !!}
@endsection
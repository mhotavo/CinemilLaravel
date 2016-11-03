@extends('layouts.admin')

@section('titlePage', 'Editar Usuario')
@section('titlePanel', 'Editar Usuario ' . $user->name)
@section('content')

@if(count($errors)>0)
<div class="alert alert-dismissible alert-danger">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach 
	</ul>
</div>
@endif

{!! Form::open(['route'=>['users.update', $user->id], 'method'=>'PUT']) !!}
<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name', $user->name, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Correo Electronico') !!}
	{!! Form::email('email', $user->email, ['class'=>'form-control', 'placeholder'=>'Example@mail.com', 'required']) !!}
</div>
<div class="form-group">
	{!! Form::label('type', 'Tipo') !!}
	{!! Form::select('type', ['member'=>'Miembro', 'admin' =>'Administrador'], $user->type, ['class'=>'form-control', 'required']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@endsection
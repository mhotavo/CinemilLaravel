@extends('layouts.admin')

@section('titlePage', 'Crear Usuario')
@section('titlePanel', 'Crear Usuario')
@section('content')

@if(count($errors)>0)
<div class="alert alert-dismissible alert-danger">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Error!</strong> <a href="#" class="alert-link">
		@foreach ($errors as $error)
			<ul>{{ $error }}</ul>
		@endforeach 
</div>
@endif

{!! Form::open(['route'=>'users.store', 'method'=>'POST']) !!}
<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Correo Electronico') !!}
	{!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Example@mail.com', 'required']) !!}
</div>
<div class="form-group">
	{!! Form::label('password', 'Contraseña') !!}
	{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'********'], 'required') !!}
</div>
<div class="form-group">
	{!! Form::label('type', 'Tipo') !!}
	{!! Form::select('type', ['member'=>'Miembro', 'admin' =>'Administrador'], null, ['class'=>'form-control', 'required']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@endsection
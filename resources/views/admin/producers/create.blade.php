@extends('layouts.admin')

@section('titlePage', 'Crear Fuente')
@section('titlePanel', 'Crear Fuente')
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

{!! Form::open(['route'=>'sources.store', 'method'=>'POST']) !!}
<div class="form-group">
	{!! Form::label('nom_fuente', 'Nombre') !!}
	{!! Form::text('nom_fuente', null, ['class'=>'form-control', 'placeholder'=>'Nombre de la fuente', 'required']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@endsection
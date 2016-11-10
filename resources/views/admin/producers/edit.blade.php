@extends('layouts.admin')

@section('titlePage', 'Editar Fuente')
@section('titlePanel', 'Editar Fuente ' . $source->nom_fuente)
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

{!! Form::open(['route'=>['sources.update', $source->id], 'method'=>'PUT']) !!}
<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name', $source->nom_fuente, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Editar', ['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@endsection
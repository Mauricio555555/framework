@extends('layouts.app')

@section('title', 'Asignar docente')

@section('content')

{{ Form::open(array('route' => 'docente.store', 'method' => 'POST')) }}
		<div class="form-group">
			{{ Form::label('nombre', 'Nombre')}}
			{{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required'])}}
		</div>

		<div class="form-group">
			{{ Form::label('apellido', 'Apellido')}}
			{{ Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Apellidos', 'required'])}}
		</div>

		<div class="form-group">
			{{ Form::label('No_seguro', 'Número de seguro')}}
			{{ Form::text('No_seguro', null, ['class' => 'form-control', 'placeholder' => 'Número de seguro', 'required'])}}
		</div>

		<div class="form-group">
			{{ Form::label('telefono', 'Telefono')}}
			{{ Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Telefono', 'required'])}}
		</div>

		<div class="form-group">
			{{ Form::label('materia', 'Notas') }}
			{{ Form::select('materia', $materias, null, ['class' => 'form-control', 'placeholder' => 'Selecciones una opcion', 'required']) }}
		</div>

		<div class="form-group">
			{{ Form::label('user_id', 'Tipo') }}
			{{ Form::select('user_id', $users, null, ['class' => 'form-control', 'placeholder' => 'Selecciones una opcion', 'required']) }}
		</div>

		<div class="form-group">
			{{ Form::submit('Registrar', ['class' => 'btn btn-primary'])}}
		</div>
{{ Form::close() }}


@endsection
@extends('layouts.app')
@section('title', 'Crear materias')

@section('content')



{{ Form::open(array('route' => 'materias.store', 'method' => 'POST')) }}
		<div class="form-group">
			{{ Form::label('nombre', 'Nombre')}}
			{{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre materia', 'required'])}}
		</div>

		<div class="form-group">
			{{ Form::label('calificacion', 'Notas') }}
			{{ Form::select('calificacion', $notas, null, ['class' => 'form-control', 'placeholder' => 'Selecciones una opcion', 'required']) }}
		</div>

		<div class="form-group">
			{{ Form::submit('Registrar', ['class' => 'btn btn-primary'])}}
		</div>
{{ Form::close() }}

@endsection
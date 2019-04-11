@extends('layouts.app')

@section('title', 'Editar materias')

@section('content')

{{ Form::open(['route' => ['materias.update', $notas], 'method' => 'PUT']) }}

		<div class="form-group">
			{{ Form::label('nombre', 'Nombre')}}
			{{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre materia', 'required'])}}
		</div>

		<div class="form-group">
			{{ Form::label('calificacion', 'Notas') }}
			{{ Form::select('calificacion', $notas, ['class' => 'form-control', 'placeholder' => 'Selecciones una opcion', 'required']) }}
		</div>

		<div class="form-group">
			{{ Form::submit('Registrar', ['class' => 'btn btn-primary'])}}
		</div>
{{ Form::close() }}


@endsection
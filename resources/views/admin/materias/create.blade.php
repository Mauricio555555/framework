@extends('admin.main')

@section('title', 'Crear materias')

@section('content')

{{ Form::open(array('route' => 'materias.store', 'method' => 'POTS')) }}
		<div class="form-group">
			{{ Form::label('nombre', 'Nombre')}}
			{{ Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre materia', 'required'])}}
		</div>
		<div class="form-group">
			{{ Form::submit('Registrar', ['class' => 'btn btn-primary'])}}
		</div>
{{ Form::close() }}

@endsection
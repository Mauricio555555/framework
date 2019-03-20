@extends('admin.main')

@section('title', 'Agregar calificacion')

@section('content')

{{ Form::open(array('route' => 'notas.store', 'method' => 'POTS')) }}
		<div class="form-group">
			{{ Form::label('nota', 'Calificacion')}}
			{{ Form::text('nota', null, ['class' => 'form-control', 'placeholder' => '0 - 5', 'required'])}}
		</div>
		<div class="form-group">
			{{ Form::submit('Registrar', ['class' => 'btn btn-primary'])}}
		</div>
{{ Form::close() }}

@endsection
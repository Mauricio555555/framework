@extends('admin.main')

@section('title', 'Crear usuario')

@section('content')

	{{ Form::open(array('route' => 'users.store')) }}

		<div class="form-group">
			{{ Form::label('name', 'Nombre')}}
			{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required'])}}
		</div>
		<div class="form-group">
			{{ Form::label('email', 'Email')}}
			{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@correo.com', 'required'])}}
		</div>
		<div class="form-group">
			{{ Form::label('password', 'Password')}}
			{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mx1@S90y', 'required'])}}
		</div>
		<div class="form-group">
			{{ Form::label('type', 'Tipo')}}
			{{ Form::select('type', ['' => 'Elija una opcion','admin' => 'Administrador', 'students' => 'Estudiante', 'graduates' => 'Egresado', 'parents' => 'Padres', 'teachers' => 'Profesor'], null, ['class' => 'form-control'])}}
		</div>
		<div class="form-group">
			{{ Form::submit('Registrar', ['class' => 'btn btn-primary'])}}
		</div>

	{{ Form::close() }}

@endsection
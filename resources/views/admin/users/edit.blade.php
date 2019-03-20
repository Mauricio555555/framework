@extends('admin.main')

@section('title', 'Editar usuario ' . $users->name)

@section('content')

	 {!! Form::open(['route' => ['users.update', $users->id], 'method' => 'PUT']) !!}

		<div class="form-group">
			{{ Form::label('name', 'Nombre')}}
			{{ Form::text('name', $users -> name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required'])}}
		</div>
		<div class="form-group">
			{{ Form::label('email', 'Email')}}
			{{ Form::email('email', $users -> email, ['class' => 'form-control', 'placeholder' => 'example@correo.com', 'required'])}}
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
			{{ Form::submit('Editar', ['class' => 'btn btn-primary'])}}
		</div>

	{{ Form::close() }}

@endsection
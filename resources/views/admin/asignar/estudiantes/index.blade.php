@extends('layouts.app')

@section('title', 'Menu de usuario')

@section('content2')
	@if(Auth::user())
	@foreach($materias as $materia)
	
	@endforeach
		@foreach($estudiantes as $estudiante)
			@if(Auth::user()->id()==$estudiante->padres)
					<div class="card-group">
						<div class="card" style="width:400px">
					  	<img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="Card image">
					  		<div class="card-body">
					    		<h4 class="card-title">{{$estudiante->nombre}} {{$estudiante->apellido}}</h4>
								<p class="card-text">{{$estudiante->telefono}}</p>
								{{ Form::open(array('route' => 'materias.store', 'method' => 'POST')) }}
									<div class="form-group">
										{{ Form::label('nombre', 'Nombre', 'hidden')}}
										{{ Form::text('nombre', $estudiante->materia_id, ['class' => 'form-control', 'placeholder' => 'Nombre materia', 'required', 'hidden'])}}
									</div>
									<div class="form-group">
										{{ Form::label('id_estudiante', 'Nombre', 'hidden')}}
										{{ Form::text('id_estudiante', $estudiante->id, ['class' => 'form-control', 'placeholder' => 'Nombre materia', 'required', 'hidden'])}}
									</div>
									<div class="form-group">
										{{ Form::label('calificacion', 'Notas') }}
										{{ Form::text('calificacion', null, ['class' => 'form-control', 'placeholder' => 'Insertar calificacion', 'required']) }}
									</div>

									<div class="form-group">
										{{ Form::submit('Agregar calificacion', ['class' => 'btn btn-primary'])}}
									</div>
								{{ Form::close() }}</div>
						</div>
						<div class="card ">
					    	<div class="card-body text-center">
					      		<p class="card-text">Materia:</p>
					      		<p class="card-text">{{$estudiante->materia_id}}</p>
					      		<p class="card-text">Nombre del padre:</p>
					      		<p class="card-text">{{$estudiante->padres}}</p>
					      		<p class="card-text">Numero del salon:</p>
					      		<p class="card-text">{{$estudiante->No_salon}}</p>
					      		<p class="card-text">Numero del grado actual:</p>
					      		<p class="card-text">{{$estudiante->No_grado}}</p>
					    	</div>
						</div>
						<div class="card ">
					    	<div class="card-body text-center">
					      	<p class="card-text">Some text inside the first card</p>
					    	</div>
					  	</div>
					</div>
					
			@else
			@endif
					
		 @endforeach
	@else
	@endif

@endsection

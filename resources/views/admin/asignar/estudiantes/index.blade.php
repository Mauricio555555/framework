@extends('layouts.app')

@section('title', 'Menu de usuario')

@section('content2')

	@foreach($estudiantes as $estudiante)
	<div class="card-group">
		<div class="card" style="width:400px">
	  	<img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="Card image">
	  		<div class="card-body">
	    		<h4 class="card-title">{{$estudiante->nombre}} {{$estudiante->apellido}}</h4>
	    		<p class="card-text">{{$estudiante->telefono}}</p>
	    		<a href="{{ url('admin/notas/create') }}" class="btn btn-primary">Agregar Calificacion</a>
	  		</div>
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

 	@endforeach 

@endsection

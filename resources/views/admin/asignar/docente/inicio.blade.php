@extends('layouts.app')
@section('title', 'Materias')

@section('content1')


<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>

  <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

@if(Auth::user())
<div class="row">
  
     @foreach($docentes as $docente) 
     <div class="col-4">
      <div class="card">
        <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <div class="card">
             <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Escudo_Universidad_Mariana.jpg"  class="d-inline-block align-center" alt="John" style="width:100%">
              <h1>{{$docente->nombre}} {{$docente->apellido}}</h1>
              <p class="title">{{$docente->materia}}</p>
              <p class="title">{{$docente->telefono}}</p> 
              <p class="title">{{$docente->user_id}}</p>
              <p>Universidad Mariana</p>
              <div>
              <a href="#"><i class="fa fa-dribbble"></i></a> 
              <a href="#"><i class="fa fa-twitter"></i></a> 
              <a href="#"><i class="fa fa-linkedin"></i></a> 
              <a href="#"><i class="fa fa-facebook"></i></a>  
              @foreach($materias as $materia)   
                  @if(Auth::user()->id()==$materia->id_estudiante)                   
                      @foreach($estudiantes as $estudiante)
                        @if($docente->materia==$estudiante->materia_id)   
                        @endif 
                      @endforeach                   
                  @else   
                  @endif                   
              @endforeach
           </div>
         </div>
         {{ Form::open(array('route' => 'materias.store', 'method' => 'POST')) }}

                    <div class="form-group">
                      {{ Form::label('nombre', 'Nombre', 'hidden')}}
                      {{ Form::text('nombre', $docente->materia, ['class' => 'form-control', 'placeholder' => 'Nombre materia', 'required', 'hidden'])}}
                    </div>
                    <div class="form-group">
                      {{ Form::label('calificacion', 'Notas', 'hidden') }}
                      {{ Form::text('calificacion', 1, ['class' => 'form-control', 'placeholder' => 'Selecciones una opcion', 'required', 'hidden']) }}
                    </div>
                    <div class="form-group">
                      {{ Form::label('id_estudiante', 'Notas', 'hidden') }}
                      {{ Form::text('id_estudiante', Auth::user()->id(), ['class' => 'form-control', 'placeholder' => 'Selecciones una opcion', 'required', 'hidden']) }}
                    </div>

                    <div class="form-group">
                    <p>{{ Form::submit('Registrar', ['class' => 'btn button' ])}}</p>
                    </div>
                    {{ Form::close() }}    

                    {{ Form::open(array('route' => 'estudiantes.store', 'method' => 'POST')) }}
                          <div class="form-group">
                            {{ Form::label('nombre', 'Nombre', 'hidden')}}
                            {{ Form::text('nombre', $estudiante->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre materia', 'required', 'hidden'])}}
                          </div>
                        	<div class="form-group">
                        		{{ Form::label('apellido', 'Apellido', 'hidden')}}
                        		{{ Form::text('apellido', $estudiante->apellido, ['class' => 'form-control', 'placeholder' => 'Apellidos', 'required', 'hidden'])}}
                        	</div>
                        	<div class="form-group">
                        		{{ Form::label('No_seguro', 'Número de seguro', 'hidden')}}
                        		{{ Form::text('No_seguro', $estudiante->No_seguro, ['class' => 'form-control', 'placeholder' => 'Número de seguro', 'required', 'hidden'])}}
                        	</div>
                        	<div class="form-group">
                        		{{ Form::label('telefono', 'Telefono', 'hidden')}}
                        		{{ Form::text('telefono', $estudiante->telefono, ['class' => 'form-control', 'placeholder' => 'Telefono', 'required', 'hidden'])}}
                        	</div>
                        	<div class="form-group">
                        		{{ Form::label('id_docente', 'Usuario', 'hidden') }}
                        		{{ Form::text('id_docente', Auth::user()->id(), ['class' => 'form-control', 'placeholder' => 'Selecciones una opcion', 'required', 'hidden']) }}
                          </div>                                                    
                        	<div class="form-group">
                        		{{ Form::label('padres', 'Usuario', 'hidden') }}
                        		{{ Form::text('padres', $docente->id, ['class' => 'form-control', 'placeholder' => 'Selecciones una opcion', 'required', 'hidden']) }}
                        	</div>                       
                        	<div class="form-group">
                        		{{ Form::label('materia_id', 'Usuario', 'hidden') }}
                        		{{ Form::text('materia_id', $docente->materia, ['class' => 'form-control', 'placeholder' => 'Selecciones una opcion', 'required', 'hidden']) }}
                        	</div>

                        	<div class="form-group">
                        		{{ Form::submit('Actualizar', ['class' => 'btn button'])}}
                        	</div>
                      {{ Form::close() }}
                                     
         </div>
     </div>
      @endforeach
                     

</div>    

  <div class="text-center">
    {{$docentes->render()}}
  </div>
  @else
  <h1>Debes iniciar sesion</h1>
@endif
@endsection


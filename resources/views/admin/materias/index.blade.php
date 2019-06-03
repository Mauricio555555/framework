@extends('layouts.app')
@section('title', 'Lista de materias')

@section('content')

    <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <table> 
<th> <a href="{{url('admin/materias/create')}}" class="btn btn-info">Registrar nueva materia</a></th> 
<th style="color:white;">----------------------------------------------------------------</th>
 <!-- BUSCADORDE TAGS-->
 {!! Form::open(['route' => 'materias.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

    <div class="input-group">

      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!}
      <span class="input-group-addon" id="search" ><span class="fas fa-microscope"  aria-hidden="true"></span></span>
    </div>

  {!! Form::close() !!}

<!-- FIN DEL BUSCADOR -->
<!-- FIN DEL BUSCADOR -->

	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($materias as $materia)
    <tr>
        <td>{{$materia->id}}</td>
        <td>{{$materia->nombre}}</td>
        <td>       
          <a href="{{ route('admin.materias.destroy', $materia->id) }}" onclick="return confirm('Se eliminara la materia ')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true">Eliminar</span></a>

          <a href="{{ route('materias.edit', $materia->id) }}" class="btn btn-warning"> <span class="glyphicon glyphicon-wrench" aria-hidden="true">Editar</span></a>

        </td>
    </tr>    
    @endforeach
  </tbody>
</table>
  <div class="text-center">
    {{$materias->render()}}
  </div>


@endsection
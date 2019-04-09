@extends('layouts.app')

@section('title', 'Lista de materias')

@section('content')


<link  rel = "hoja de estilo"  href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <a href="{{url('admin/materias/create')}}" class="btn btn-info">Registrar nueva materia</a><hr>  
	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Nota</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($materias as $materia)
    <tr>
      <td>{{$materia->id}}</td>
      <td>{{$materia->nombre}}</td>
      <td>{{$materia->calificacion}}</td>
      <td>

        <a href="{{ route('admin.materias.destroy', $materia->id) }}" onclick="return confirm('Se eliminara la materia ')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true">Eliminar</span></a>

        <a href="" class="btn btn-warning"> <span class="glyphicon glyphicon-wrench" aria-hidden="true">Editar</span></a>

        <a href="{{ route('admin.notas.create', $materia->id) }}" class="btn btn-info"> <span class="glyphicon glyphicon-wrench" aria-hidden="true">Agregar notas</span></a>

      </td>
</td>
    </tr>    
    @endforeach
  </tbody>
</table>
  <div class="text-center">
    {{$materias->render()}}
  </div>

@endsection
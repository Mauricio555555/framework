@extends('layouts.app')

@section('title', 'Lista de materias')

@section('content')

<link  rel = "hoja de estilo"  href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Materia</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($docentes as $docente)
    <tr>
        <td>{{$docente->id}}</td>
        <td>{{$docente->nombre}}</td>
        <td>{{$docente->apellido}}</td>
        <td>{{$docente->materia}}</td>
        <td>       
          <a href="{{ route('admin.asignar.docente.destroy', $docente->id) }}" onclick="return confirm('Se eliminara el docente asignado ')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true">Eliminar</span></a>

        </td>
    </tr>    
    @endforeach
  </tbody>
</table>
  <div class="text-center">
    {{$docentes->render()}}
  </div>


@endsection
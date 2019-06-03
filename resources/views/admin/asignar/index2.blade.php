@extends('layouts.app')

@section('title', 'Asignar estudiante')

@section('content')

    <meta name="viewport" content="width=device-width, initial-scale=1">

 <table> 

<th style="color:white;">----------------------------------------------------------------</th>
 <!-- BUSCADORDE TAGS-->
 {!! Form::open(['route' => 'materias.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

    <div class="input-group">

      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!}
      <span class="input-group-addon" id="search" ><span class="fas fa-microscope"  aria-hidden="true"></span></span>
    </div>

  {!! Form::close() !!}
</table>

<!-- FIN DEL BUSCADOR -->


  <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <table class="table table-striped table-dark">
  <thead>   
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Tipo</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>

    @foreach($users as $user)
    <tr>
        @if($user->type == "students")
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>
            @if($user->type == "admin")
              <span class="badge badge-danger">{{$user->type}}</span>
            @else
              <span class="badge badge-primary">{{$user->type}}</span>
            @endif
        </td>
        <td>
          <a href="{{ route('estudiantes.create', $user->id) }}" class="btn btn-warning">Asignar estudiante<span class="icon icon-wrench" aria-hidden="true"></span></a>
        </td>
        @endif
    </tr>    
    @endforeach
  </tbody>
</table>
<div class="text-center">
  {{$users->render()}}
</div>


@endsection


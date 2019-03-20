@extends('admin.main')

@section('title', 'Lista de usuarios')


@section('content')

<link  rel = "hoja de estilo"  href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
   

<a href="{{url('admin/users/create')}}" class="btn btn-info">Registrar nuevo usuario</a><hr>
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
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>
      		@if($user->type == "admin")
      			<span class="badge badge-danger">{{$user->type}}</span>
      		@else
      			<span class="badge badge-primary">{{$user->type}}</span>
      		@endif

      </td>
      <td><a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('Se eliminara el usuario ')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"> <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
    </tr>    
    @endforeach
  </tbody>
</table>
{{$users->render()}}

@endsection

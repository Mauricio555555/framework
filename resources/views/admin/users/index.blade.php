@extends('admin.main')

@section('title', 'Lista de usuarios')


@section('content')
<link  rel = " hoja de estilo "  href = " //maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css ">
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
      <td><a href="" class="btn btn-danger"></a><a href="" class="btn btn-warning"></a></td>
    </tr>    
    @endforeach
  </tbody>
</table>
{{$users->render()}}

@endsection

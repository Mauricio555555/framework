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
<table> 

    <tbody>
     @foreach($docentes as $docente)

          <!-- Add icon library -->
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              
              <div class="card">
               <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Escudo_Universidad_Mariana.jpg"  class="d-inline-block align-center" alt="John" style="width:100%">
                <h1>{{$docente->nombre}} {{$docente->apellido}}</h1>
                <p class="title">{{$docente->materia}}</p>
                <p class="title">{{$docente->telefono}}</p> 
                <p class="title">{{$docente->user_id}}</p>
                <p>Universidad Mariana</p>
                <a href="#"><i class="fa fa-dribbble"></i></a> 
                <a href="#"><i class="fa fa-twitter"></i></a> 
                <a href="#"><i class="fa fa-linkedin"></i></a> 
                <a href="#"><i class="fa fa-facebook"></i></a> 
                <p><button onclick="location.href = '{{ url('admin/asignar/docente/menu') }}'" >Ingresar</button></p>
              </div>
           @endforeach    

  </tbody>
</table>
  <div class="text-center">
    {{$docentes->render()}}
  </div>
@endsection


<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

  <!-- Image and text -->

<div class="header">  
  <h1 >   <img  src="https://upload.wikimedia.org/wikipedia/commons/9/97/Escudo_Universidad_Mariana.jpg" width="160" height="160" class="d-inline-block align-center" alt=""> 
    <br> <br> COLEGIO UM</h1>
  <p>Ingenieria de sistemas - Frameworks.</p>
</div>
@if(Auth::user())
<div class="navbar">
  @if(Auth::user()->teacher())    
    <a href="{{url('admin/estudiantes')}}">Menu principal</a>
  @elseif(Auth::user()->students()) 
    <a href="{{url('admin/asignar/docente/inicio')}}">Materias</a>
  @elseif(Auth::user()->usuario())  
  <a href="{{url('/login')}}">Inicio <span class="sr-only">(current)</span></a>
     <a href="{{url('admin/materias')}}">Materias</a>
      <a href="{{url('admin/users')}}">Usuarios</a>
        <a href="{{url('admin/asignar')}}">Asignar docente</a>
        <a href="{{url('admin/asignarestu')}}">Asignar estudiante</a>

  @endif

</div>
   <div class="hr-divider">
        <h3 class="hr-divider-content hr-divider-heading">
   
        </h3>
    </div>
@endif
</body>




<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Escudo_Universidad_Mariana.jpg" width="160" height="160" class="d-inline-block align-top" alt="">
    
  </a>
  <h5 >COLEGIO UM</h5>
</nav>

<br><br><br><br><br><br>
<hr>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{url('/login')}}">Inicio <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="{{url('admin/users')}}">Usuarios</a>
      <a class="nav-item nav-link" href="{{url('admin/materias')}}">Materias</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>
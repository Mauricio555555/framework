@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido {{Auth::user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user())
                        @if(Auth::user()->usuario())

                            <a href="{{url('admin/users')}}"><h3>Continuar</h3></a>
                                <img align=center border=0  src="https://upload.wikimedia.org/wikipedia/commons/9/97/Escudo_Universidad_Mariana.jpg" width="160" height="160" class="d-inline-block align-center" alt="">
                        @else
                            <a href="{{url('admin/materias')}}"><h3>Continuar</h3></a>
                                <img align=center border=0  src="https://upload.wikimedia.org/wikipedia/commons/9/97/Escudo_Universidad_Mariana.jpg" width="160" height="160" class="d-inline-block align-center" alt="">
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

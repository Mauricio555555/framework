
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



{{ Form::open(array('route' => 'notas.store', 'method' => 'POTS')) }}
		<div class="form-group">
			{{ Form::label('nota', 'Calificacion')}}
			{{ Form::text('nota', null, ['class' => 'form-control', 'placeholder' => '0 - 5', 'required'])}}
		</div>
		<div class="form-group">
			{{ Form::submit('Registrar', ['class' => 'btn btn-primary'])}}
		</div>
{{ Form::close() }}

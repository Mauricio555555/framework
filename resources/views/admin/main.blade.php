<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Default') | Panel de administracion</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>
	@include('admin.parcial.nav')

	<section>
		@include('flash::message')
		<hr>
		@yield('content')	
	</section>

	<script src="{{asset('plugins/js/jquery/jquery-3.3.1.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Notitajada </title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
    <link rel="stylesheet" href="css/login.css">
  
</head>

<body>
	<div class="wrap2">
		<h1>Únete a <strong><a href="{{ route('inicio') }}">Notitajada</a></strong></h1>
		<p class="pregistro">La mejor fuente de noticias diarias personalizadas</p>
		
	</div>
  <div class="wrap3 wrap">
  	<form method="POST" action="{{ url('registrado') }}">
  		{!! csrf_field() !!}
  		@if (count($errors)>0)
  			@foreach($errors->all() as $error)
				<div>{{$error}}</div>
  			@endforeach
  		@endif

  		@if (session('response'))
			<div class="registrosuccess">
				{{session('response')}}
			</div>
  		@endif
		<input class="borderarriba" name="email" type="text" placeholder="nombre" required>
		<div class="bar">
			<i></i>
		</div>
		<input name="age" type="number" placeholder="edad" required>
		<div class="bar">
			<i></i>
		</div>
		<input name="password" type="text" placeholder="objeto favorito" required>
		<div class="bar">
			<i></i>
		</div>
		<input name="object" type="text" placeholder="bebida favorita" required>
		<div class="bar">
			<i></i>
		</div>
		<input name="friend" id="amigo" type="text" placeholder="nombre y apellido de un/a amigo/a" required>
		<div class="bar">
			<i></i>
		</div>
		<input class="bordeabajo" name="name" type="text" placeholder="una parte del cuerpo" required>
		<a href="" class="forgot_link">forgot ?</a>
		<button type="submit">Registrarse</button>
	</form>
</div>
</body>

</html>

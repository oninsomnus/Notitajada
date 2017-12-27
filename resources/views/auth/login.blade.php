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
		<h1>Ingresa ya a <strong><a href="{{ route('inicio') }}">Notitajada</a></strong></h1>
		
	</div>
  <div class="wrap">
	<div class="avatar">
      <img src="{{ url('img/banana.png') }}">
	</div>
		<form action="{{ route('login') }}" method="POST">
			{!! csrf_field() !!}
			<input name="email" type="text" placeholder="nombre" required>
			 {!! $errors->first('email', 'email errado')!!}
			<div class="bar">
				<i></i>
			</div>
			<input name="password" type="password" placeholder="bebida favorita" required>
			{!! $errors->first('password', 'pass errada')!!}
			<a href="" class="forgot_link">forgot ?</a>
			<button type="submit">Ingresar</button>
		</form>
	</div>

</body>

</html>

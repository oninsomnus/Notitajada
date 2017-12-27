@extends('layout')

@section('content')

  	<header class="text-center" name="home">
		<div class="intro-text">
		    <h1>Bienvenido a <strong>Notitajada</strong></h1>
		    <p>Tu fuente de noticias al día</p>
		    <a href="{{ route('login') }}" class="btn btn-default btn-lg page-scroll">Ingresar</a> 
		</div>
	</header>

@endsection
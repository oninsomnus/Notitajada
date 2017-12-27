@extends('layout')

@section('content')

	<header class="notiback">
		<div class="text-noticia">
			<input type="hidden" value="{{auth()->user()->friend}}" class="uppercase">
			<h1 class="text-center">
				El {{auth()->user()->name}} de {{auth()->user()->friend}} destila {{auth()->user()->object}} por una enfermedad rara
			</h1>
			<p>El {{auth()->user()->name}} de <span class="nombreFinal"></span> destila {{auth()->user()->object}} desde hace casi {{auth()->user()->age}} años. ¿Lo más sorprendente de todo? No bebe {{auth()->user()->object}} jamás.
			<br>
			Sufre una curiosa enfermedad rara, conocida como ‘síndrome de autodestilación’: un exceso de levadura en el intestino delgado origina {{auth()->user()->object}} que es absorbido por la sangre. Esto significa que cada vez que toma azúcar o hidratos de carbono los transforma en {{auth()->user()->object}}.
			<br>
			Este trastorno hace que <span class="nombreFinal"></span>, sufra prácticamente a diario los efectos de una borrachera, con su consecuente resaca.
			<br>
			<span class="nombreFinal"></span> ha explicado en ‘Mi Diario’ que la comida comenzó a sentarle mal siendo adolescente, pero que los efectos fueron empeorando con los años. Especialmente cuando ingería cualquier comida con altos contenidos de hidratos de carbono, “sufría martilleantes jaquecas, náuseas terribles, en ocasiones vomitaba y sufría deshidratación, sudores fríos, temblor en las manos… Era como si la noche anterior hubiera salido, pero sin haber consumido nada de {{auth()->user()->object}}, ha asegurado.
			<br>
			La enfermedad que padece, por el momento, no tiene cura. Sólo puede adaptar su dieta, para que sea baja en azúcares. </p>
				<nav aria-label="...">
				  <ul class="pager">
				    <li><a href="#">Siguiente</a></li>
				  </ul>
				</nav>
		</div>
	</header>
	<script type="text/javascript">
		var amigo = document.querySelector('.uppercase').value;
		var nombreFinal = document.querySelector('.nombreFinal');
		var upletter = amigo.substring(0,1);
		var ancho = amigo.length;
		var downletter = amigo.substring(1, ancho);
		upletter = upletter.toUpperCase();
		downletter = downletter.toLowerCase();
		
		var nombreAmi = upletter+downletter;
		console.log(nombreAmi);

		nombreFinal.innerHTML = nombreAmi;
	</script>
@endsection
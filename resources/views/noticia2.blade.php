@extends('layout')

@section('content')

	<header class="notiback">
		<div class="text-noticia">
			<input type="hidden" value="{{auth()->user()->email}}" class="uppercase">
			<h1 class="text-center">
				Una adicta a la {{auth()->user()->object}} toma cincuenta vasos al día
			</h1>

			<p>
				<span class="nombreFinal"></span>, de {{auth()->user()->age}} años, toma nada menos que 50 latas de {{auth()->user()->object}} al día, o lo que es lo mismo, unas tres {{auth()->user()->object}} por hora.
				<br>
				Esta adicción le hace gastarse alrededor de 800 dólares al mes, pero según asegura <span class="nombreFinal"></span>, “estar abastecida de {{auth()->user()->object}} es igual de importante para mí como pagar el recibo de la luz”.
				<br>
				Pero esta adicción, no solo le ha hecho pagar un alto precio económico, sino que también le ha empezado a pasar factura a su salud. La alta cantidad de {{auth()->user()->object}} que consume le hace tener dolores de cabeza constantes, además suele sentirse siempre muy cansada ya que la bebida apenas le deja dormir. Lo peor es que en ocasiones ha llegado a tener alucinaciones.
				<br>
				“Veo cosas muy extrañas como naranjas volando por la habitación. Entonces me tengo que sentar para calmarme”, cuenta <span class="nombreFinal"></span>.
				<br>
				Ahora, consciente de su adicción, está buscando cualquier tratamiento médico que le ayude a superarla.

			</p>
				<nav aria-label="...">
				  <ul class="pager">
				    <li><a href="{{ route('noticia') }}">Siguiente</a></li>
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
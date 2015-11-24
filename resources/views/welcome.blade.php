<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>mercadeo</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('fonts.css') }}" rel="stylesheet">

	</head>
	<body>
		<hr id="encabezado">
		<img id="imagen" src="{{ url('/imagenes/sena.PNG')}}">
		<p>
			| DIAGNOSTICO DE MERCADEO 
		</p>
		<hr id="encabezado1">
		<header>
		<nav>
			<ul>
				<li><a href="{{ url('Empresas') }}"><span class="segundo"><i class="icon icon-office"></i></span>Empresas</a></li>
				<li><a href="#"><span class="tercero"><i class="icon icon-location2"></i></span>Ubicacion</a>
					<ul id="color">
						<li><a href="{{ url('Ciudades') }}">Ciudades</a></li>
						<li><a href="{{ url('Localidades') }}">Localidades</a></li>
					</ul>	
				</li>
				<li><a href="{{ url('Cuestionario') }}"><span class="cuarto"><i class="icon icon-pencil2"></i></span>Cuestionarios</a></li>
				<li><a href="{{ url('DOFA') }}"><span class="sexto"><i class="icon icon-accessibility"></i></span>DOFA</a></li>
				<li><a href="{{ url('Recomendaciones')}}"><span class="septimo"><i class="icon icon-list2"></i></span>Recomendaciones</a></li>
				<li><a href="{{ url ('auth/logout') }}"><span class="primero"><i class="icon icon-power"></i></span>CERRAR SESI&OacuteN</a></li>
			</ul>
		</nav>
	</header>
		<img id="imagen1" src="{{ url('/imagenes/Mercadeo.jpg')}}">

		<footer>
		<span id="bajo">
		.:: Servicio Nacional de Aprendizaje SENA – Dirección General Calle 57 No. 8-69, Bogotá D.C - PBX (57 1) 5461500<br>
		Línea gratuita de atención al ciudadano Bogotá 5925555 – Resto del país 018000 910270<br>
		
		</span>
	</footer>
</bod>
</html>

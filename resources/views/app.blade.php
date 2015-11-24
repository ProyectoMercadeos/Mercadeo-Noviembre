<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mercadeo</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('fonts.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="/JS/jquery.min.js"></script>
		<script src="/JS/html5shiv.min.js"></script>
		<script src="/JS/bootstrap.min.js"></script>
		
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
				<li><a href="{{ url ('/')}}"><span class="tercero"><i class="icon icon-home"></i></span>inicio</a></li>
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
		@yield('content')
		<footer>
			<span id="bajo">
				.:: Servicio Nacional de Aprendizaje SENA – Dirección General Calle 57 No. 8-69, Bogotá D.C - PBX (57 1) 5461500<br>
				Línea gratuita de atención al ciudadano Bogotá 5925555 – Resto del país 018000 910270<br>
				
				
			</span>
		</footer>

		<!-- Scripts -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
		

</body>
</html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>mercadeo</title>
			<style>

	#imagen
	{
		width: 100%;
		max-width: 3000px;
	}

	footer{
		 text-align: center;
      margin-top: 5%;
      font-family: Verdana, Geneva, sans-serif;
      font-size: 20px;
     background-color: #FFA500;
     border-radius: 12px;

	}
	.texto-box{
	  margin: 10px auto;
	  width: 500px;
	  height: 380px;
	  background-color:#A9A9A9;
	  padding: 10px;
	  border-radius: 20px;
	  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
	  -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
	  box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
	  font-family: Verdana, Geneva, sans-serif;
  }
  .texto1-box{
	  margin: 10px auto;
	  width: 400px;
	  height: 180px;
	  background-color:gray;
	  padding: 10px;
	  border-radius: 100px;
	  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
	  -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
	  box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
	  text-align: center;
  	font-family: Verdana, Geneva, sans-serif;
  	background: #04B404;
  }
  

  .form-group{
  width:150%;
  margin: 10px;
  margin-left:190px 
}
#encabezado
{
 border: 2px solid #FFA500;

}
#encabezado1
{
  border: 2px solid #FFA500;
  margin-top: 25px;
}
#p2
{
  text-align: center;
  margin-top:-80px; 
  font-family: Verdana, Geneva, sans-serif;
  font-size: 50px;
  padding-bottom: 5px;

}
#imagen
{
  width: 7%;
  margin-left: 15%;
  margin-top: 2%;
 
}
 


 	</style>

		</head>
	<body>
		<hr id="encabezado">
		<img id="imagen" src="{{ url('/imagenes/sena.PNG')}}">
		<p id="p2">
			| DIAGNOSTICO DE MERCADEO 
		</p>
	<hr id="encabezado1">
		<form>
		<div class="texto-box">
				Señor usuario:<br><br><br>

				Gracias por verificar el diagnostico.<br><br><br>
			<div class="texto1-box">
				<p id="p1">

					"un cliente satisfecho es la mejor<br>
					estrategia de negocio de todos"<br> 
					Michael Leboeuf<br><br>

					"Entre mas rapido genere confianza,<br>
					mas rapido genera una venta"<br><br>
				</p>
			</div>	
				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<a class="link" href="{{ url('/auth/login') }}">Regresar al inicio </a><br>
					</div>
				</div>	
		</div>
		</form>
		<footer>
		<span id="bajo">
		.:: Servicio Nacional de Aprendizaje SENA – Dirección General Calle 57 No. 8-69, Bogotá D.C - PBX (57 1) 5461500<br>
		Línea gratuita de atención al ciudadano Bogotá 5925555 – Resto del país 018000 910270<br>
		
		</span>
	</footer>
</body>
</html>
	

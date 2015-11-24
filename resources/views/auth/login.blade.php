<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>mercadeo</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	<style>
	form
{
	text-align: center;
	
	
}
body{
  background-color: #f5f5f5;
}
.login-box{
  position:relative;
  margin: 10px auto;
  width: 500px;
  height: 380px;
  background-color: #fff;
  padding: 20px;
  border-radius: 3px;
  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
  -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
  box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
  font-family: Verdana, Geneva, sans-serif;
  
}
.lb-header{
  position:relative;
  color: #00415d;
  margin: 5px 5px 10px 5px;
  padding-bottom:10px;
  border-bottom: 1px solid #eee;
  text-align:center;
  height:28px;
}
.lb-header a{
  margin: 0 25px;
  padding: 0 20px;
  text-decoration: none;
  color: #666;
  font-weight: bold;
  font-size: 15px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.lb-header .active{
  color: #238276;
  font-size: 18px;
  font-family: Verdana, Geneva, sans-serif;
}
.social-login{
  position:relative;
  float: left;
  width: 100%;
  height:auto;
  padding: 10px 0 15px 0;
  border-bottom: 1px solid #eee;
  font-family: Verdana, Geneva, sans-serif;
}
.social-login a{
  position:relative;
  float: left;
  width:calc(40% - 8px);
  text-decoration: none;
  color: #fff;
  border: 1px solid rgba(0,0,0,0.05);
  padding: 12px;
  border-radius: 2px;
  font-size: 12px;
  text-transform: uppercase;
  margin: 0 3%;
  text-align:center;
  font-family: Verdana, Geneva, sans-serif;
}
.social-login a i{
  position: relative;
  float: left;
  width: 20px;
  top: 2px;
  font-family: Verdana, Geneva, sans-serif;
}
.social-login a:first-child{
  background-color: #49639F;
}
.social-login a:last-child{
  background-color: #DF4A32;
}
.email-login,.email-signup{
  position:relative;
  float: left;
  width: 100%;
  height:auto;
  margin-top: 20px;
  text-align:center;
  font-family: Verdana, Geneva, sans-serif;
}
.form-group{
  width:100%;
  margin-bottom: 10px;
}
.form-group input[type="email"],
.form-group input[type="password"]{
  width: calc(50% - 22px);
  height:45px;
  outline: none;
  border: 1px solid #ddd;
  padding: 0 10px;
  border-radius: 2px;
  color: #333;
  font-size:0.8rem;
  -webkit-transition:all 0.1s linear;
  -moz-transition:all 0.1s linear;
  transition:all 0.1s linear;
  font-family: Verdana, Geneva, sans-serif;
}
.form-group input:focus{
  border-color: #358efb;
}
.form-group button{
  width:50%;
  background-color: #238276;
  border: none;
  outline: none;
  color: #fff;
  font-size: 14px;
  font-weight: normal;
  padding: 14px 0;
  border-radius: 2px;
  text-transform: uppercase;
  font-family: Verdana, Geneva, sans-serif;
}
.forgot-password{
  width:50%;
  text-align: left;
  text-decoration: underline;
  color: #888;
  font-size: 0.75rem;
  font-family: Verdana, Geneva, sans-serif;
}
 #imagen
  {
    width:100%;
   
  }
  #imagen1
  {
  	width: 10%;
  	margin-left: 45%;
  	

  }
  footer
    {
      width: 98%;
      position: absolute;
      text-align: center;
      margin-top: 30%;
      font-family: Verdana, Geneva, sans-serif;
      font-size: 20px;
     background-color: #FFA500;
     border-radius: 12px;
     bottom: -120px;

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
		<img id="imagen1" src="{{ url('/imagenes/login.png')}}">   				
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<div class="login-box">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						 <div class="lb-header">
						 <a href="#" class="active" id="login-box-link">INICIO DE SESI&OacuteN</a>
			     		</div>


						<div class="form-group">
							<label class="col-md-4 control-label">Usuario </label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Recordar contraseña
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">INGRESAR</button><br>
								<a href="{{ url('/auth/register') }}" class="forgot-password">Registrar</a>
								<a href="{{ url('/password/email') }}" class="forgot-password">Has Olvidado Tu Contraseña</a>
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
</bod>
</html>

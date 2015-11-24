<!DOCTYPE HTML>
<html>
<head>
	<title>mercadeo</title>
<style>
	form
{
	text-align: center;
	margin: 6%;
}
body{
  background-color: #f5f5f5;
}
.login-box{
  position:relative;
  margin: 10px auto;
  width: 500px;
  height: 465px;
  background-color: #fff;
  padding: 10px;
  margin-top: -60px;
  border-radius: 3px;
  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
  -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
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
}
.social-login{
  position:relative;
  float: left;
  width: 100%;
  height:auto;
  padding: 10px 0 15px 0;
  border-bottom: 1px solid #eee;
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
}
.social-login a i{
  position: relative;
  float: left;
  width: 20px;
  top: 2px;
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
}
.form-group{
  width:100%;
  margin-bottom: 10px;
}
.form-group input[type="email"],
.form-group input[type="password"],
.form-group input[type="text"]{
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
}
.forgot-password{
  width:50%;
  text-align: left;
  text-decoration: underline;
  color: #888;
  font-size: 0.75rem;
}
 #imagen
  {
  width: 7%;
  margin-left: 15%;
  margin-top: 2%;
   
  }
  #imagen1
  {
  	width: 10%;
  	margin-left: 43%;

  }

  
  footer
    {
      width: 98%;
      
      text-align: center;
      margin-top: -5%;
      font-family: Verdana, Geneva, sans-serif;
      font-size: 20px;
     background-color: #FFA500;
     border-radius: 12px;
     bottom: -0px;

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

		</style>
	</head>
	<body>

					@if (count($errors) > 0)
						<div class="alert alert-danger">

							<strong>Atencion!</strong> Sus Datos No Estan LLenos Correctamente<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
                          <hr id="encabezado">
    <img id="imagen" src="{{ url('/imagenes/sena.PNG')}}">
    <p id="p2">
      | DIAGNOSTICO DE MERCADEO 
    </p>
  <hr id="encabezado1">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<div class="login-box">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						 <div class="lb-header">
						 <a href="#" class="active" id="login-box-link">Registro</a>
			     		</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>
              <div class="form-group">
              <label class="col-md-4 control-label">Tipo</label>
              <div class="col-md-6">
              <select name="type">
              <option> Seleccione Una</option>
                <option>Administrador</option>
                <option>Analista</option>
                 <option>Auditor</option>
                  <option>Cliente</option>
              </select>
              </div>
            </div>
						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail</label>
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
							<label class="col-md-4 control-label">Confirmar contraseña</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>
         

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Registrar
								</button>
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
				</div>

</body>
</html>

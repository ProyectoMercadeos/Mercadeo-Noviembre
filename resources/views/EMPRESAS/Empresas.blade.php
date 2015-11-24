@extends('app')
@section('content')
<link href="{{ asset('/css/appEmpresa.css') }}" rel="stylesheet">
<div class="container">
	<div class="row">
		<div id="empresa"class="col-md-10 col-md-offset-1">
		
						{!! Form::open(['route' => 'Empresas.store', 'method' => 'post', 'novalidate']) !!}
					<h2>Registro de empresas</h2>
					<div class="form-group">
						{!! Form::label('full_Nombre', 'Nombre de Empresa') !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('full_Origen_capital', 'Origen Capital') !!}<br>
						{!! Form::text('Nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::text('Origen_capital', null, ['class' => 'form-control', 'required' => 'required']) !!}
					</div>
					
					<div class="form-group">
						{!! Form::label('full_direccion', 'Direccion') !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('full_Estrato', 'Estrato') !!}<br>
						{!! Form::text('Direccion', null, ['class' => 'form-control', 'required' => 'required']) !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::text('Estrato', null, ['class' => 'form-control', 'required' => 'required']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('full_correo', 'Correo') !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('full_telefono', 'Telefono') !!}<br>
						{!! Form::text('Correo', null, ['class' => 'form-control', 'required' => 'required']) !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::text('Telefono', null, ['class' => 'form-control', 'required' => 'required']) !!}
			
					</div>
													
					<div class="form-group">	
						{!! Form::label('full_Sector de actividad', 'Sector de actividad') !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('full_Tamaño_de_empresa', 'Tamaño de empresa') !!}<br>
						{!! Form::text('Sector_de_actividad', null, ['class' => 'form-control', 'required' => 'required']) !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::text('Tamaño_de_empresa', null, ['class' => 'form-control', 'required' => 'required']) !!}
					</div>
					
					<div class="form-group">	
						{!! Form::label('full_fk_localidad', 'localidad') !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('full_barrio', 'Barrio') !!}<br>
						{!! Form::select('Fk_localidad',$Localidades, null, ['class' => 'form-control', 'required' => 'required']) !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::text('Barrio', null, ['class' => 'form-control', 'required' => 'required']) !!}
					</div><br>
									
					
					<div class="form-group1">
						{!! Form::submit('Enviar', ['class' => 'btn btn-succes']) !!}
					</div>
					{!! Form::close() !!}
				
		
			</div>

		</div>
	</div>
@endsection
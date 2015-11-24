@extends ('app')
@section('content')
<link href="{{ asset('/css/appEmpresa.css') }}" rel="stylesheet">
<div class= "container">
	    <div class="row">
	    
	    	<div id="empresa"class="col-md-10 cold-md-offset-1">
	    		{!! Form::model($Empresas,['route' => 'Empresas.update','method' => 'put', 'novalidate']) !!}
	    	<h2>Actualizar datos de la empresa</h2>
	    	{!! Form::hidden('id', $Empresas->id) !!}

	    	<div class="form-group2">
	    		{!! Form::label('full_Nombre', 'Nombre de empresa') !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('full_fk_localidad','Localidad') !!}<br>
	    		{!! Form::text('Nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::text('Fk_localidad', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	    
	    	<div class="form-group2">
				{!! Form::label('full_barrio','Barrio') !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('full_estrato','Estrato') !!}<br>
	    		{!! Form::text('Barrio', null, ['class' => 'form-control', 'required' => 'required']) !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::text('Estrato', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	    	
	    	<div class="form-group2">
	    		{!! Form::label('full_Sector de actividad','Sector de actividad') !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('full_Tamaño de empresa','Tamaño de empresa') !!}<br>
	    		{!! Form::text('Sector_de_actividad', null, ['class' => 'form-control', 'required' => 'required']) !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::text('Tamaño_de_empresa', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	    	
	    	<div class="form-group2">
	    		{!! Form::label('full_correo','Correo') !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('full_Telefono','Telefono') !!}<br>
	    		{!! Form::text('Correo', null, ['class' => 'form-control', 'required' => 'required']) !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::text('Telefono', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	    	
	    	<div class="form-group2">
	    		{!! Form::label('full_Direccion','Direccion') !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('full_Origen_capital', 'Origen Capital') !!}<br>
	    		{!! Form::text('Direccion', null, ['class' => 'form-control', 'required' => 'required']) !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::text('Origen_capital', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div><br>
	    		    	
	    	<div class="form-group1">
	    		{!! Form::submit('Enviar', ['class' => 'btn btn-success ']) !!}
	    	</div>	
	    {!! Form::close() !!}
	</div>
 </div>
</div>
@endsection


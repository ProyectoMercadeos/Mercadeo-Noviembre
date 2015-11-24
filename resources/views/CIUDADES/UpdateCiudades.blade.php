@extends ('app')
@section('content')
<link href="{{ asset('/css/appUbicacion.css') }}" rel="stylesheet">
<div class= "container">
	    <div class="row">
	    	<div class="col-md-10 cold-md-offset-1">
	    		{!! Form::model($Ciudades,['route' => 'Ciudades.update','method' => 'put', 'novalidate']) !!}
	    		<h2>Actualizar dato de ciudad</h2>
	    		{!! Form::hidden('id', $Ciudades->id) !!}

	    	<div class="form-group">
	    		{!! Form::label('full_nombre', 'Nombre de ciudad') !!}
	    		{!! Form::text('Nombre_ciudad', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div><br>
	      	<div class="form-group1">
	    		{!! Form::submit('Enviar', ['class' => 'btn btn-success ']) !!}
	    	</div>	
	    {!! Form::close() !!}
	</div>
 </div>
</div>
@endsection


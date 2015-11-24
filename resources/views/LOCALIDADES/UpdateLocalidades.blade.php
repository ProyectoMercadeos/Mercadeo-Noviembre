@extends ('app')
@section('content')
<link href="{{ asset('/css/appUbicacion.css') }}" rel="stylesheet">
<div class= "container">
	    <div class="row">
	    	<div class="col-md-10 cold-md-offset-1">
	    		{!! Form::model($Localidades,['route' => 'Localidades.update','method' => 'put', 'novalidate']) !!}
	    		<h2>Actualizar datos de localidad</h2>
	    	{!! Form::hidden('id', $Localidades->id) !!}

	    	<div class="form-group">
	    		{!! Form::label('full_Nombrea', 'Nombre') !!}
	    		{!! Form::text('Nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	        <div class="form-group">
	    		{!! Form::label('full_fk_ciudad','Fk_ciudad') !!}
	    		{!! Form::text('Fk_ciudad', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::submit('Enviar', ['class' => 'btn btn-success ']) !!}
	    	</div>	
	    {!! Form::close() !!}
	</div>
 </div>
</div>
@endsection


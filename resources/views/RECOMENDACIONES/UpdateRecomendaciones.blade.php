@extends ('app')
@section('content')
<div class= "container">
	    <div class="row">
	    	<div class="col-md-10 cold-md-offset-1">
	    		{!! Form::model($Recomendaciones,['route' => 'Recomendaciones.update','method' => 'put', 'novalidate']) !!}

	    	{!! Form::hidden('id', $Recomendaciones->id) !!}

	    	<div class="form-group">
	    		{!! Form::label('descripcion', 'Descripcion') !!}
	    		{!! Form::text('Descripcion', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>	
	    	<div class="form-group">
	    		{!! Form::submit('Enviar', ['class' => 'btn btn-success ']) !!}
	    	</div>	
	    {!! Form::close() !!}
	</div>
 </div>
</div>
@endsection


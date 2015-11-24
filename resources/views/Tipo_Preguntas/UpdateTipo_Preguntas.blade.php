@extends ('app')
@section('content')
<div class= "container">
	    <div class="row">
	    	<div class="col-md-10 cold-md-offset-1">
	    		{!! Form::model($Tipo_Preguntas,['route' => 'Tipo_Preguntas.update','method' => 'put', 'novalidate']) !!}

	    	{!! Form::hidden('id', $Tipo_Preguntas->id) !!}

	    	<div class="form-group">
	    		{!! Form::label('full_Tdescripcion', 'TDescripcion') !!}
	    		{!! Form::text('TDescripcion', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	        <div class="form-group">
	    		{!! Form::label('full_fk_pregunta','Fk_Pregunta') !!}
	    		{!! Form::text('Fk_Pregunta', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::submit('Enviar', ['class' => 'btn btn-success ']) !!}
	    	</div>	
	    {!! Form::close() !!}
	</div>
 </div>
</div>
@endsection

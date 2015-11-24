@extends ('app')
@section('content')
<div class= "container">
	    <div class="row">
	    	<div class="col-md-10 cold-md-offset-1">
	    		{!! Form::model($Preguntas,['route' => 'Preguntas.update','method' => 'put', 'novalidate']) !!}

	    	{!! Form::hidden('id', $Preguntas->id) !!}

	    	<div class="form-group">
	    		{!! Form::label('full_texto', 'Texto') !!}
	    		{!! Form::text('Texto', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	        <div class="form-group">
	    		{!! Form::label('full_Indicaciones','Indicaciones') !!}
	    		{!! Form::text('Indicaciones', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	       	<div class="form-group">
	    		{!! Form::submit('Enviar', ['class' => 'btn btn-success ']) !!}
	    	</div>	
	    {!! Form::close() !!}
	</div>
 </div>
</div>
@endsection


@extends ('app')
@section('content')
<div class= "container">
	    <div class="row">
	    	<div class="col-md-10 cold-md-offset-1">
	    		{!! Form::model($Encuestas,['route' => 'Encuestas.update','method' => 'put', 'novalidate']) !!}

	    	{!! Form::hidden('id', $Encuestas->id) !!}

	    	<div class="form-group">
	    		{!! Form::label('full_descripcion', 'Descripcion') !!}
	    		{!! Form::text('Descripcion', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	        <div class="form-group">
	    		{!! Form::label('full_fk_empresa','Fk_empresa') !!}
	    		{!! Form::text('Fk_empresa', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	        <div class="form-group">
	    		{!! Form::label('full_fk_funcionario','Fk_funcionario') !!}
	    		{!! Form::text('Fk_funcionario', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::label('full_fecha','Fecha') !!}
	    		{!! Form::text('Fecha', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	    	
	    	<div class="form-group">
	    		{!! Form::submit('Enviar', ['class' => 'btn btn-success ']) !!}
	    	</div>	
	    {!! Form::close() !!}
	</div>
 </div>
</div>
@endsection


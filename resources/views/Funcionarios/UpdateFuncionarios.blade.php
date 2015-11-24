@extends ('app')
@section('content')
<div class= "container">
	    <div class="row">
	    	<div class="col-md-10 cold-md-offset-1">
	    		{!! Form::model($Funcionarios,['route' => 'Funcionarios.update','method' => 'put', 'novalidate']) !!}

	    	{!! Form::hidden('id', $Funcionarios->id) !!}

	    	<div class="form-group">
	    		{!! Form::label('full_nombre', 'Nombre') !!}
	    		{!! Form::text('Nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	        <div class="form-group">
	    		{!! Form::label('full_correo','Correo') !!}
	    		{!! Form::text('Correo', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    	</div>
	    	<div class="form-group">
	    		{!! Form::submit('Enviar', ['class' => 'btn btn-success ']) !!}
	    	</div>	
	    {!! Form::close() !!}
	</div>
 </div>
</div>
@endsection
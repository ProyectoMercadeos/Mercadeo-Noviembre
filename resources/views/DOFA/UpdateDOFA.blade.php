@extends ('app')
@section('content')
<div class= "container">
	    <div class="row">
	    	<div class="col-md-10 cold-md-offset-1">
	    		{!! Form::model($DOFA,['route' => 'DOFA.update','method' => 'put', 'novalidate']) !!}

	    	{!! Form::hidden('id', $DOFA->id) !!}

	    	<div class="form-group">
	    		{!! Form::label('full_Descripcion', 'Descripcion') !!}
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
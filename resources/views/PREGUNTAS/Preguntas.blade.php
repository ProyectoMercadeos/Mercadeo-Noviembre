@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route' => 'Preguntas.store', 'method' => 'post', 'novalidate']) !!}
			<div class="form-group">
				{!! Form::label('full_Texto', 'Texto') !!}
				{!! Form::text('Texto', null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('full_Indicaciones', 'Indicaciones') !!}
				{!! Form::text('Indicaciones', null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Enviar',['class' => 'btn btn-succes']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection
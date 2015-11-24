@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route' => 'Respuestas.store', 'method' => 'post', 'novalidate']) !!}
			<h2>nueva respuesta</h2>
			<div class="form-group">
				{!! Form::label('full_descripcion', 'Descripcion') !!}
				{!! Form::text('Descripcion', null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('full_fk_pregunta', 'Preguntas') !!}
				{!! Form::text('Fk_Pregunta', null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Enviar',['class' => 'btn btn-succes']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection
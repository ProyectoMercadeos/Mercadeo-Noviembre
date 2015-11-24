@extends('app')
@section('content')
<link href="{{ asset('/css/appUbicacion.css') }}" rel="stylesheet">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route' => 'Ciudades.store', 'method' => 'post', 'novalidate']) !!}
			<h2>Registro de ciudad</h2>
			<div class="form-group">
				{!! Form::label('full_nombre', 'Nombren de ciudad') !!}
				{!! Form::text('Nombre_ciudad', null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div><br>
			<div class="form-group1">
				{!! Form::submit('Enviar',['class' => 'btn btn-succes']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection
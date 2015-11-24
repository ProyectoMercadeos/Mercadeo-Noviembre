 @extends('app')
@section('content')
<link href="{{ asset('/css/appUbicacion.css') }}" rel="stylesheet">
<div class="Container" >
		<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route' => 'Localidades.store', 'method' => 'post', 'novalidate']) !!}
			<h2>Registro de localidades</h2>
			<div class="form-group">
				{!! Form::label('full_Nombre', 'Nombre') !!}
				{!! Form::text('Nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('full_fk_ciudad', 'Ciudad') !!}
				{!! Form::select('Fk_ciudad',$Ciudades,null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Enviar',['class' => 'btn btn-succes']) !!}
			</div>
			
		</div>
	</div>
</div>
{!! Form::close() !!}
@endsection
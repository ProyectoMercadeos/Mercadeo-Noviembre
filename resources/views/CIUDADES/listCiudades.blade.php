 @extends('app')
@section('content')
<link href="{{ asset('/css/appUbicacion.css') }}" rel="stylesheet">
<script src="/JS/script.js"></script>
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'Ciudades/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
		<h2>Registro de ciudades</h2>
		<div class="form-group">
			<label for="exampleInputNombre3">Nombre de ciudad</label>
			<input type="text" class="form-control" name = "Nombre_ciudad" >
		</div>
		<button id="link1" type="submit" class="btn btn-default">Buscar</button>
		
		<a id="link" href="{{ route('Ciudades.create') }}" class="btn btn-primary">Crear</a>
	
		<br>
		<h2>Consultas</h2>
		<table id="link2" class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th>Nombre_ciudad</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Ciudades as $Ciudades)
				<tr>
					<td>{{ $Ciudades->Nombre_ciudad }}</td>
					<td>
						<a class="btn btn-primary btn-xs" href="{{ route('Ciudades.edit',['id' => $Ciudades->id] )}}">Editar</a>
						<a class="btn btn-danger btn-xs" href="{{ route('Ciudades/destroy',['id' => $Ciudades->id] )}}">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
{!! Form::close() !!}
@endsection
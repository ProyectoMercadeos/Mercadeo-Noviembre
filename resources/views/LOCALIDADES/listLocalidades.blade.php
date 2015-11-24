@extends('app')
@section('content')
<link href="{{ asset('/css/appUbicacion.css') }}" rel="stylesheet">
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'Localidades/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
		<h2>Registro de localidadaes</h2>
		<div class="form-group">
			<label for="exampleInputNombre3">Nombre</label>
			<input type="text" class="form-control" name = "Nom" >
		</div>
	
		<button id="link1" type="submit" class="btn btn-default">Buscar</button>
		
		<a id="link" href="{{ route('Localidades.create') }}" class="btn btn-primary">Crear</a>
		
		<br>
		<h2>Consultas</h2>
		<table id="link2" class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Ciudad</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Localidades as $Localidades)
				<tr>
					<td>{{ $Localidades->Nombre }}</td>
					<td>{{ $Localidades->ciudades }}</td>
                    <td>
						<a class="btn btn-primary btn-xs" href="{{ route('Localidades.edit',['id' => $Localidades->id] )}}">Editar</a>
						<a class="btn btn-danger btn-xs" href="{{ route('Localidades/destroy',['id' => $Localidades->id] )}}">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
{!! Form::close() !!}
@endsection
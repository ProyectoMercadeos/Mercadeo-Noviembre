@extends('app')
@section('content')

<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'Encuestas/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
		<h2>Registro de encuestas</h2>
		<div class="form-group">
			<label for="exampleInputDescripcion7">Descripcion</label>
			<input type="text" class="form-control" name = "Descripcion" >
		</div>
	
		<button type="submit" class="btn btn-default">Buscar</button>
		


		<a href="{{ route('Encuestas.create') }}" class="btn btn-primary">Crear</a>
		
		<br>
		<h2>Consultas</h2>
		<table id="tama1" class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th>Descripcion</th>
					<th>empresa</th>
					<th>funcionario</th>
					<th>pregunta</th>
					<th>Fecha</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Encuestas as $Encuestas)
				<tr>
					<td>{{ $Encuestas->Descripcion }}</td>
					<td>{{ $Encuestas->Fk_empresa }}</td>
                    <td>{{ $Encuestas->Fk_funcionario }}</td>
                    <td>{{ $Encuestas->Fk_Pregunta }}</td>
					<td>{{ $Encuestas->Fecha }}</td>
					<td>
						<a class="btn btn-primary btn-xs" href="{{ route('Encuestas.edit',['id' => $Encuestas->id] )}}">Editar</a>
						<a class="btn btn-danger btn-xs" href="{{ route('Encuestas/destroy',['id' => $Encuestas->id] )}}">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
{!! Form::close() !!}

@endsection
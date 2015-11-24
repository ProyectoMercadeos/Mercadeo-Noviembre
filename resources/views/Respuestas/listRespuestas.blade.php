@extends('app')
@section('content')
<div class="container">
	<div class="row">

		{!! Form::open(['route' => 'Respuestas/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
		<div class="form-group">
			<h2>Registro de Respuestas</h2>
			<label for="exampleInputDescripcion3">Descripcion</label>
			<input type="text" class="form-control" name = "Descripcion" >
		</div>
	
		<button type="submit" class="btn btn-default">Buscar</button>
		


		<a href="{{ route('Respuestas.create') }}" class="btn btn-primary">Crear</a>
		
		<br>
		<h2>Consultas</h2>
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th>Descripcion</th>
					<th>Fk_Preguntas</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Respuestas as $Respuestas)
				<tr>
					<td>{{ $Respuestas->Descripcion }}</td>
					<td>{{ $Respuestas->Fk_Preguntas }}</td>
                    <td>
						<a class="btn btn-primary btn-xs" href="{{ route('Respuestas.edit',['id' => $Respuestas->id] )}}">Editar</a>
						<a class="btn btn-danger btn-xs" href="{{ route('Respuestas/destroy',['id' => $Respuestas->id] )}}">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
{!! Form::close() !!}
@endsection
@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'Tipo_Preguntas/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
		<h2>Registro de tipos de preguntas</h2>
		<div class="form-group">
			<label for="exampleInputDescripcion1">TDescripcion</label>
			<input type="text" class="form-control" name = "Descripcion" >
		</div>
	
		<button type="submit" class="btn btn-default">Buscar</button>
		


		<a href="{{ route('Tipo_Preguntas.create') }}" class="btn btn-primary">Crear</a>
		
		<br>
		<h2>Consultas</h2>
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th>TDescripcion</th>
					<th>Fk_Pregunta</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Tipo_Preguntas as $Tipo_Preguntas)
				<tr>
					<td>{{ $Tipo_Preguntas->TDescripcion }}</td>
					<td>{{ $Tipo_Preguntas->Fk_Pregunta }}</td>
                    <td>
						<a class="btn btn-primary btn-xs" href="{{ route('Tipo_Preguntas.edit',['id' => $Tipo_Preguntas->id] )}}">Editar</a>
						<a class="btn btn-danger btn-xs" href="{{ route('Tipo_Preguntas/destroy',['id' => $Tipo_Preguntas->id] )}}">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
{!! Form::close() !!}
@endsection
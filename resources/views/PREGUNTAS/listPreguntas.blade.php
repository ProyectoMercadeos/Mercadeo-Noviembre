@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'Preguntas/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
		<div class="form-group">
			<h2>Registro de preguntas</h2>
			<label for="exampleInputTexto7">Texto</label>
			<input type="text" class="form-control" name = "Tex" >
		</div>
	
		<button type="submit" class="btn btn-default">Search</button>
		


		<a href="{{ route('Preguntas.create') }}" class="btn btn-primary">Crear</a>
		
		<br>
		<h2>Consultas</h2>
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th>Texto</th>
					<th>Indicaciones</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Preguntas as $Preguntas)
				<tr>
					<td>{{ $Preguntas->Texto }}</td>
					<td>{{ $Preguntas->Indicaciones }}</td>
					<td>
						<a class="btn btn-primary btn-xs" href="{{ route('Preguntas.edit',['id' => $Preguntas->id] )}}">Editar</a>
						<a class="btn btn-danger btn-xs" href="{{ route('Preguntas/destroy',['id' => $Preguntas->id] )}}">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
{!! Form::close() !!}
@endsection
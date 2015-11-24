@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'DOFA/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
		<h2>Registro de DOFA</h2>
		<div class="form-group">
			<label for="exampleInputDescripcion4">Descripcion</label>
			<input type="text" class="form-control" name = "Descrip" >
		</div>
		
		<button type="submit" class="btn btn-default">Search</button>
		

		<a href="{{ route('DOFA.create') }}" class="btn btn-primary">Crear</a>
		
		<br>
		<h2>Consultas</h2>
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th>Descripcion</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				@foreach($DOFA as $DOFA)
				<tr>
					<td>{{ $DOFA->Descripcion }}</td>
					<td>
						<a class="btn btn-primary btn-xs" href="{{ route('DOFA.edit',['id' => $DOFA->id] )}}">Editar</a>
						<a class="btn btn-danger btn-xs" href="{{ route('DOFA/destroy',['id' => $DOFA->id] )}}">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
{!! Form::close() !!}
@endsection
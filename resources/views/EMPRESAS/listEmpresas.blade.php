@extends('app')
@section('content')
<div class="container">
  <div class="row">
   
    {!! Form::open(['route' => 'Empresas/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
    <h2>Registro de empresas</h2>
   <div class="form-group">
     <label for="exampleInputNombre12">Nombre</label>
     <input type="text" class="form-control" name = "Nombre" >
    </div>
    <button  type="submit" class="btn btn-default">Buscar</button>

    <a href="{{ route('Empresas.create') }}" class="btn btn-primary">Crear</a>
 

  
    <br>
    <h2>Consultas</h2>
    <table class="table table-condensed table-striped table-bordered">
      <thead>
        <tr>
          <td>Nombre de empresa</td>
          <td>Barrio</td>
          <td>Direccion</td>
          <td>Estrato</td>
          <td>Telefono</td>
          <td>Correo</td>
          <td>Sector de actividad</td>
          <td>Tamaño de empresa</td>
          <td>Localidad</td>
          <td>Origen capital</td>

         
          <td>Accion</td>
         <i class="icon icon-location2"></i>
        </tr>
      </thead>
      <tbody>

				@foreach($Empresas as $Empresas)
				<tr>
          <td>{{ $Empresas->Nombre }}</td>
          <td>{{ $Empresas->Barrio }}</td>
          <td>{{ $Empresas->Direccion }}</td>
          <td>{{ $Empresas->Estrato }}</td>
          <td>{{ $Empresas->Telefono }}</td> 
          <td>{{ $Empresas->Correo }}</td>  
          <td>{{ $Empresas->Sector_de_actividad }}</td>
          <td>{{ $Empresas->Tamaño_de_empresa }}</td>
          <td>{{ $Empresas->localidad }}</td>
          <td>{{ $Empresas->Origen_capital }}</td>
					
					<td>
						<a class="btn btn-primary btn-xs" href="{{ route('Empresas.edit',['id' => $Empresas->id] )}}">Editar</a>
						<a class="btn btn-danger btn-xs" href="{{ route('Empresas/destroy',['id' => $Empresas->id] )}}">Eliminar</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</div>
{!! Form::close() !!}
@endsection
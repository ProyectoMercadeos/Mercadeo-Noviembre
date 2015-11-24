<?php namespace App\Http\Controllers;
use App\Models\Empresas as Empresas;
use App\Models\Localidades as Localidades;
use App\Http\Requests;
use App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	
	    $Empresas = Empresas::all();
	    $Empresas = Empresas::orderby('Correo','ASC')->select(
	    	'empresas.*',
	    	'localidades.Nombre as localidad')
	    	->join('localidades','localidades.id','=','empresas.Fk_localidad')
	    	->paginate(4);
	    	
		return \View::make('Empresas/listEmpresas',compact('Empresas'));



	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		$Localidades = ['Localidades' => Localidades::lists('Nombre','id')];
		return \View::make('Empresas/Empresas',$Localidades);


	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$Empresas = new Empresas;
		$Empresas->Correo= $request->Correo;
		$Empresas->Telefono= $request->Telefono;
		$Empresas->Direccion= $request->Direccion;
		$Empresas->Nombre= $request->Nombre;
		$Empresas->Barrio= $request->Barrio;
		$Empresas->Estrato= $request->Estrato;
		$Empresas->Sector_de_actividad= $request->Sector_de_actividad;
		$Empresas->Tamaño_de_empresa= $request->Tamaño_de_empresa;
		$Empresas->Fk_localidad = $request->Fk_localidad;
		$Empresas->Origen_capital = $request->Origen_capital;
		$Empresas->save();
		return redirect('Empresas');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$Empresas = Empresas::find($id);
		return\View::make('EMPRESAS/UpdateEmpresas',compact('Empresas'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		//
		$Empresas = Empresas::find($request->id);
		$Empresas->Correo= $request->Correo;
		$Empresas->Telefono= $request->Telefono;
		$Empresas->Direccion= $request->Direccion;
		$Empresas->Nombre= $request->Nombre;
		$Empresas->Barrio= $request->Barrio;
		$Empresas->Estrato= $request->Estrato;
		$Empresas->Sector_de_actividad= $request->Sector_de_actividad;
		$Empresas->Tamaño_de_empresa= $request->Tamaño_de_empresa;
		$Empresas->Fk_localidad = $request->Fk_localidad;
		$Empresas->Origen_capital = $request->Origen_capital;
		$Empresas->save();
		return redirect('Empresas');
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$Empresas = Empresas::find($id);
		$Empresas->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$Empresas = Empresas::where('Nombre','like','%'.$request->Nombre.'%')->get();
		return \View::make('Empresas/listEmpresas',compact('Empresas'));
	}


}

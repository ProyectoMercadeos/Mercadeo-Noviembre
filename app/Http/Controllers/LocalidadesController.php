<?php namespace App\Http\Controllers;
use App\Models\Localidades as Localidades;
use App\Models\Ciudades as Ciudades;
use App\Http\Requests;
use App\Http\Controllers;

use Illuminate\Http\Request;

class LocalidadesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$Localidades = Localidades::all();
		$Localidades = Localidades::orderby('Nombre','ASC')->select(
	    	'localidades.*',
	    	'ciudades.Nombre_ciudad as ciudades')
	    	->join('ciudades','ciudades.id','=','localidades.Fk_ciudad')
	    	->paginate(4);
		return \View::make('LOCALIDADES/listLocalidades',compact('Localidades'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$Ciudades = ['Ciudades' => Ciudades::lists('Nombre_ciudad','id')];
		return \View::make('LOCALIDADES/Localidades',$Ciudades);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$Localidades = new Localidades;
		$Localidades->Nombre= $request->Nombre;
		$Localidades->Fk_ciudad= $request->Fk_ciudad;
		$Localidades->save();
		return redirect('Localidades');
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
		$Localidades = Localidades::find($id);
		return\View::make('LOCALIDADES/UpdateLocalidades',compact('Localidades'));
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
		$Localidades = Localidades::find($request->id);
		$Localidades->Nombre = $request->Nombre;
		$Localidades->Fk_ciudad = $request->Fk_ciudad;
		$Localidades->save();
		return redirect('Localidades');
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
		$Localidades = Localidades::find($id);
		$Localidades->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$Localidades = Localidades::where('Nombre','like','%'.$request->Nom.'%')->get();
		return \View::make('Localidades/listLocalidades',compact('Localidades'));
	}

}

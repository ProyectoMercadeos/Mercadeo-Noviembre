<?php namespace App\Http\Controllers;
use App\Models\Ciudades as Ciudades;
use App\Http\Requests;
use App\Http\Controllers;
use Illuminate\Http\Request;


class CiudadesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// 
		$Ciudades = Ciudades::all();
		return \View::make('CIUDADES/listCiudades',compact('Ciudades'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		 return \View::make('CIUDADES/Ciudad');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$Ciudades = new Ciudades;
		$Ciudades->Nombre_ciudad= $request->Nombre_ciudad;
		$Ciudades->save();
		return redirect('Ciudades');
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
		$Ciudades = Ciudades::find($id);
		return\View::make('CIUDADES/UpdateCiudades',compact('Ciudades'));
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
		$Ciudades = Ciudades::find($request->id);
		$Ciudades->Nombre_ciudad= $request->Nombre_ciudad;
		$Ciudades->save();
		return redirect('Ciudades');
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
		$Ciudades = Ciudades::find($id);
		$Ciudades->delete();
		return redirect()->back();
	}
	
	public function search(Request $request)
	{
		$Ciudades = Ciudades::where('Nombre_ciudad','like','%'.$request->Nombre_ciudad.'%')->get();
		return \View::make('CIUDADES/listCiudades',compact('Ciudades'));
	}

}

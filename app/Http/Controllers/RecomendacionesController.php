<?php namespace App\Http\Controllers;
use App\Models\Recomendaciones as Recomendaciones;
use App\Http\Requests;
use App\Http\Controllers;

use Illuminate\Http\Request;

class RecomendacionesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
		public function index()
	{
		//
	    $Recomendaciones = Recomendaciones::all();
		return \View::make('RECOMENDACIONES/listRecomendaciones',compact('Recomendaciones'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	  return \View::make('RECOMENDACIONES/Recomendaciones');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$Recomendaciones = new Recomendaciones;
		$Recomendaciones->Descripcion= $request->Descripcion;
		$Recomendaciones->save();
		return redirect('Recomendaciones');
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
		$Recomendaciones = Recomendaciones::find($id);
		return\View::make('RECOMENDACIONES/UpdateRecomendaciones',compact('Recomendaciones'));

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
		$Recomendaciones = Recomendaciones::find($request->id);
		$Recomendaciones->Descripcion = $request->Descripcion;
		$Recomendaciones->save();
		return redirect('Recomendaciones');
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
		$Recomendaciones = Recomendaciones::find($id);
		$Recomendaciones->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$Recomendaciones = Recomendaciones::where('Descripcion','like','%'.$request->Descripcion.'%')->get();
		return \View::make('RECOMENDACIONES/listRecomendaciones',compact('Recomendaciones'));
	}


}
	 
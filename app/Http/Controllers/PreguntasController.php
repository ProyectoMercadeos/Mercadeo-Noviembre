<?php namespace App\Http\Controllers;
use App\Models\Preguntas as Preguntas;
use App\Http\Requests;
use App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	    $Preguntas = Preguntas::all();
		return \View::make('PREGUNTAS/listPreguntas',compact('Preguntas'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	  return \View::make('PREGUNTAS/Preguntas');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$Preguntas = new Preguntas;
		$Preguntas->Texto= $request->Texto;
		$Preguntas->Indicaciones= $request->Indicaciones;
		$Preguntas->save();
		return redirect('Preguntas');
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
		$Preguntas = Preguntas::find($id);
		return\View::make('PREGUNTAS/UpdatePreguntas',compact('Preguntas'));

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
		$Preguntas = Preguntas::find($request->id);
		$Preguntas->Texto = $request->Texto;
		$Preguntas->Indicaciones = $request->Indicaciones;
		$Preguntas->save();
		return redirect('Preguntas');
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
		$Preguntas = Preguntas::find($id);
		$Preguntas->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$Preguntas = Preguntas::where('Texto','like','%'.$request->Texto.'%')->get();
		return \View::make('PREGUNTAS/listEncuestas',compact('Preguntas'));
	}


}

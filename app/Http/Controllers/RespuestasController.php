<?php namespace App\Http\Controllers;
use App\Models\Respuestas as Respuestas;
use App\Http\Requests;
use App\Http\Controllers;

use Illuminate\Http\Request;

class RespuestasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$Respuestas = Respuestas::all();
		return \View::make('Respuestas/listRespuestas',compact('Respuestas'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return \View::make('Respuestas/Respuestas');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$Respuestas = new Respuestas;
		$Respuestas->Descripcion= $request->Descripcion;
		$Respuestas->Fk_Preguntas= $request->Fk_Preguntas;
		$Respuestas->save();
		return redirect('Respuestas');
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
		$Respuestas = Respuestas::find($id);
		return\View::make('Respuestas/UpdateRespuestas',compact('Respuestas'));
	
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
		$Respuestas = Respuestas::find($request->id);
		$Respuestas->Descripcion = $request->Descripcion;
		$Respuestas->Fk_Preguntas = $request->Fk_Preguntas;
		$Respuestas->save();
		return redirect('Respuestas');
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
		$Respuestas = Respuestas::find($id);
		$Respuestas->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$Respuestas = Respuestas::where('Descripcion','like','%'.$request->Descripcion.'%')->get();
		return \View::make('Respuestas/listRespuestas',compact('Respuestas'));
	}

}

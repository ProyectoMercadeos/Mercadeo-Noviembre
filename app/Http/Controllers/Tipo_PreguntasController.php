<?php namespace App\Http\Controllers;
use App\Models\Tipo_Preguntas as Tipo_Preguntas;
use App\Http\Requests;
use App\Http\Controllers;

use Illuminate\Http\Request;

class Tipo_PreguntasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$Tipo_Preguntas = Tipo_Preguntas::all();
		return \View::make('Tipo_Preguntas/listTipo_Preguntas',compact('Tipo_Preguntas'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return \View::make('Tipo_Preguntas/Tipo_Preguntas');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$Tipo_Preguntas = new Tipo_Preguntas;
		$Tipo_Preguntas->TDescripcion= $request->TDescripcion;
		$Tipo_Preguntas->Fk_Pregunta= $request->Fk_Pregunta;
		$Tipo_Preguntas->save();
		return redirect('Tipo_Preguntas');
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
		$Tipo_Preguntas = Tipo_Preguntas::find($id);
		return\View::make('Tipo_Preguntas/UpdateTipo_Preguntas',compact('Tipo_Preguntas'));
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
		$Tipo_Preguntas = Tipo_Preguntas::find($request->id);
		$Tipo_Preguntas->TDescripcion = $request->TDescripcion;
		$Tipo_Preguntas->Fk_Pregunta = $request->Fk_Pregunta;
		$Tipo_Preguntas->save();
		return redirect('Tipo_Preguntas');
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
		$Tipo_Preguntas = Tipo_Preguntas::find($id);
		$Tipo_Preguntas->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$Tipo_Preguntas = Tipo_Preguntas::where('Descripcion','like','%'.$request->Descripcion.'%')->get();
		return \View::make('Tipo_Preguntas/listTipo_Preguntas',compact('Tipo_Preguntas'));
	}

}
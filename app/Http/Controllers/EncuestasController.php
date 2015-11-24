<?php namespace App\Http\Controllers;
use App\Models\Encuestas as Encuestas;
use App\Http\Requests;
use App\Http\Controllers;
use Illuminate\Http\Request;


class EncuestasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	    $Encuestas = Encuestas::all();
		return \View::make('Encuestas/listEncuestas',compact('Encuestas'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	  return \View::make('Encuestas/Encuestas');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$Encuestas = new Encuestas;
		$Encuestas->Descripcion= $request->Descripcion;
		$Encuestas->Fk_empresa= $request->Fk_empresa;
		$Encuestas->Fk_funcionario= $request->Fk_funcionario;
		$Encuestas->Fk_Pregunta= $request->Fk_Pregunta;
		$Encuestas->Fecha= $request->Fecha;
		$Encuestas->save();
		return redirect('Encuestas');
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
		$Encuestas = Encuestas::find($id);
		return\View::make('Encuestas/UpdateEncuestas',compact('Encuestas'));

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
		$Encuestas = Encuestas::find($request->id);
		$Encuestas->Descripcion = $request->Descripcion;
		$Encuestas->Fk_empresa = $request->Fk_empresa;
		$Encuestas->Fk_funcionario = $request->Fk_funcionario;
		$Encuestas->Fk_Pregunta= $request->Fk_Pregunta;
		$Encuestas->Fecha = $request->Fecha;
		$Encuestas->save();
		return redirect('Encuestas');
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
		$Encuestas = Encuestas::find($id);
		$Encuestas->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$Encuestas = Encuestas::where('Descripcion','like','%'.$request->Descripcion.'%')->get();
		return \View::make('Encuestas/listEncuestas',compact('Encuestas'));
	}


}

<?php namespace App\Http\Controllers;

use App\Models\Funcionarios as Funcionarios;
use App\Http\Controllers\FuncionariosController;
use App\Http\Requests;
use App\Http\Controllers;
use Illuminate\Http\Request;

class FuncionariosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	    $Funcionarios = Funcionarios::all();
		return \View::make('Funcionarios/listFuncionarios',compact('Funcionarios'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
			  return \View::make('Funcionarios/Funcionarios');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$Funcionarios = new Funcionarios;
		$Funcionarios->Nombre= $request->Nombre;
		$Funcionarios->Correo= $request->Correo;
		$Funcionarios->save();
		return redirect('Funcionarios');
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
		$Funcionarios = Funcionarios::find($id);
		return\View::make('Funcionarios/UpdateFuncionarios',compact('Funcionarios'));
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
		$Funcionarios = Funcionarios::find($request->id);
		$Funcionarios->Nombre = $request->Nombre;
		$Funcionarios->Correo = $request->Correo;
		$Funcionarios->save();
		return redirect('Funcionarios');
	}
	public function search(Request $request){
		$Funcionarios = Funcionarios::where('Nombre','like','%'.$request->Nombre.'%')->get();
		return \View::make('Funcionarios/listFuncionarios',compact('Funcionarios'));
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
		$Funcionarios = Funcionarios::find($id);
		$Funcionarios->delete();
		return redirect()->back();
	}

}

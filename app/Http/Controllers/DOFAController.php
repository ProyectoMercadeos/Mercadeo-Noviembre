<?php namespace App\Http\Controllers;
use App\Models\DOFA as DOFA;
use App\Http\Requests;
use App\Http\Controllers;

use Illuminate\Http\Request;

class DOFAController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$DOFA = DOFA::all();
		return \View::make('DOFA/listDOFA',compact('DOFA'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return \View::make('DOFA/DOFA');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$DOFA = new DOFA;
		$DOFA->Descripcion= $request->Descripcion;
		$DOFA->save();
		return redirect('DOFA');

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
		$DOFA = DOFA::find($id);
		return\View::make('DOFA/UpdateDOFA',compact('DOFA'));
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
		$DOFA = DOFA::find($request->id);
		$DOFA->Descripcion = $request->Descripcion;
		$DOFA->save();
		return redirect('DOFA');
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
		$DOFA = DOFA::find($id);
		$DOFA->delete();
		return redirect()->back();
	}

	public function search(Request $request)
	{
		$DOFA = DOFA::where('Descripcion','like','%'.$request->Descripcion.'%')->get();
		return \View::make('DOFA/listDOFA',compact('DOFA'));
	}


}

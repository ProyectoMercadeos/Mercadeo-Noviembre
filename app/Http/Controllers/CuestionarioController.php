<?php namespace App\Http\Controllers;
use App\Models\Cuestionario as Cuestionario;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Preguntas;
use App\Models\Tipo_preguntas;
use App\Models\Respuestas;
use App\Models\Encuestas;
use Illuminate\Http\Request;

class CuestionarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		
		return \View::make('CUESTIONARIOS/Cuestionario',compact('Cuestionario'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		if ($request->ajax()) {
		
			$Tipo_preguntas = new Tipo_preguntas;
			$Tipo_preguntas ->TDescripcion = $request ->TDescripcion;
			$Tipo_preguntas-> save();

			$Preguntas = new Preguntas;
			$Preguntas ->Texto = $request ->Texto;
			$Preguntas-> save();

			
		/*
		 Detalle_Evaluacion_Pregunta
		
		*/
	 	$Tipo_preguntas=Tipo_preguntas::orderBy('created_at','DESC')->first();
	 	$Preguntas=Preguntas::orderBy('created_at','DESC')->first();

		  	
		 	for ($i=1; $i <= $request->Cantidad; $i++) { 

		 	\DB::table('Preguntas')->insertGetId(
			[$Tipo_preguntas->id,'FK_Pregunta'=>$request->FK_Pregunta [$i] ]);	
		 }
		 return redirect('Cuestionario');		 
		}
	
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
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
	}

}

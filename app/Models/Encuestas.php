<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Encuestas extends Model {

	//
	protected $table = 'Encuestas';
	protected $fillable	= ['Descripcion','Fk_empresa','Fk_funcionario','Fk_Pregunta','Fecha'];
	protected $guarded = ['id'];

}

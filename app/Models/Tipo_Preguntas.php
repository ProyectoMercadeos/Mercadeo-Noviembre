<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_Preguntas extends Model {

	//
	protected $table = 'tipo__preguntas';
	protected $fillable	= ['TDescripcion','Fk_Pregunta'];
	protected $guarded = 'id';
}

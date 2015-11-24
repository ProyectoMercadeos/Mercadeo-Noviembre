<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model {

	//
	protected $table = 'respuestas';
	protected $fillable	= ['Descripcion','Fk_Preguntas'];
	protected $guarded = 'id';

}

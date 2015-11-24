<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model {

	//
	protected $table = 'Preguntas';
	protected $fillable	= ['Texto','Indicaciones'];
	protected $guarded = 'id';

}

<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recomendaciones extends Model {

	//
	protected $table = 'Recomendaciones';
	protected $fillable	= ['Descripcion'];
	protected $guarded = 'id';

}

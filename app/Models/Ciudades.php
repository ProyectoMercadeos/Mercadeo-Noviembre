<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model {

	//
	protected $table = 'Ciudades';
	protected $fillable	= ['Nombre_ciudad'];
	protected $guarded = 'id';
}

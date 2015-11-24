<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localidades extends Model {

	//
	protected $table = 'Localidades';
	protected $fillable	= ['Nombre','Fk_ciudad'];
	protected $guarded = 'id';

}

<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DOFA extends Model {

	//
	protected $table = 'd_o_f_as';
	protected $fillable	= ['Descripcion'];
	protected $guarded = 'id';

}

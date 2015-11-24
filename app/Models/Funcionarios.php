<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model {

	//
	protected $table = 'Funcionarios';
	protected $fillable	= ['Nombre','Correo'];
	protected $guarded = ['id'];

}

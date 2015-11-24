<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model {

	//
	protected $table = 'Empresas';
	protected $fillable	= ['Correo','Telefono','Direccion','Nombre','Barrio','Estrato','Sector de actividad','Tamaño de empresa','Fk_localidad','Origen_capital'];
	protected $guarded = 'id';	
}

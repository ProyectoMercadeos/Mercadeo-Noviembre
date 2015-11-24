<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empresas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Correo');
			$table->string('Telefono');
			$table->string('Direccion');
			$table->string('Nombre');
			$table->string('Barrio');
			$table->string('Estrato');
			$table->string('Sector_de_actividad');
			$table->string('Tamaño_de_empresa');
			$table->string('Origen_capital');

			$table->integer('Fk_localidad')->unsigned();
			$table->foreign('Fk_localidad')->references('id')->on('localidades');

			
		
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('empresas');
	}

}

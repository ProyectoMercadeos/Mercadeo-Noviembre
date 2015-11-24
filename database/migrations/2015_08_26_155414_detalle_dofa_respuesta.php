<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleDofaRespuesta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle__dofa__respuestas', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('Fk_respuesta')->unsigned();
			$table->foreign('Fk_respuesta')->references('id')->on('Respuestas');
			
			$table->integer('Fk_DOFA')->unsigned();
			$table->foreign('Fk_DOFA')->references('id')->on('d_o_f_as');
			
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
		//
	}

}

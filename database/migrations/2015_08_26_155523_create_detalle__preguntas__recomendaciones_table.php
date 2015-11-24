<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePreguntasRecomendacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle__preguntas__recomendaciones', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('Fk_DOFA_Pregunta')->unsigned();
			$table->foreign('Fk_DOFA_Pregunta')->references('id')->on('detalle__dofa__respuestas');

			$table->integer('Fk_Recomendaciones')->unsigned();
			$table->foreign('Fk_Recomendaciones')->references('id')->on('recomendaciones');
			
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
		Schema::drop('detalle__preguntas__recomendaciones');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoPreguntasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo__preguntas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('TDescripcion');

			$table->integer('Fk_Pregunta')->unsigned();
			$table->foreign('Fk_Pregunta')->references('id')->on('preguntas');
			
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
		Schema::drop('tipo__preguntas');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('respuestas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('DescripcionR');
			$table->string('Tipo');


			$table->integer('Fk_Preguntas')->unsigned();
			$table->foreign('Fk_Preguntas')->references('id')->on('Preguntas');

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
		Schema::drop('respuestas');
	}

}

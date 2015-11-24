<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDOFAsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('d_o_f_as', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Descripcion');

			$table->integer('Fk_Encuesta')->unsigned();
			$table->foreign('Fk_Encuesta')->references('id')->on('Encuestas');
			
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
		Schema::drop('d_o_f_as');
	}

}

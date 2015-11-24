<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalidadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('localidades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Nombre');

			$table->integer('Fk_ciudad')->unsigned();
			$table->foreign('Fk_ciudad')->references('id')->on('ciudades');
			
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
		Schema::drop('localidades');
	}

}

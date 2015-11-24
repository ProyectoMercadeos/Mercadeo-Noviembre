<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encuestas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('DescripcionE');

			$table->integer('Fk_empresa')->unsigned();
			$table->foreign('Fk_empresa')->references('id')->on('Empresas');
			
			$table->integer('Fk_funcionario')->unsigned();
			$table->foreign('Fk_funcionario')->references('id')->on('Funcionarios');
			
			$table->integer('Fk_Pregunta')->unsigned();
			$table->foreign('Fk_Pregunta')->references('id')->on('Preguntas');
			

			$table->string('Fecha');
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
		Schema::drop('encuestas');
	}

}

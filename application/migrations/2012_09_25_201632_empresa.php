<?php

class Empresa {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('empresas', function($table){
			$table->create();
			$table->increments('id');
			$table->String('nombre');
			$table->String('calle');
			$table->String('telefono');
			$table->String('calles_aledanas');
			$table->String('colonia');
			$table->String('codigo_postal');
			$table->String('horario');
			$table->String('ciudad');
			$table->String('estado');
			$table->String('dias_descanso');
			$table->timestamps();
			});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('empresas');
	}

}
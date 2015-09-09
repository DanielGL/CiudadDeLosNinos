<?php

class Create_Estudio_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estudios', function($table){
			$table->increments('id');
			$table->date('fecha_solicitud');
			$table->date('fecha_ingreso_fam');
			$table->integer('clave');
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
		Schema::drop('estudios');
	}

}
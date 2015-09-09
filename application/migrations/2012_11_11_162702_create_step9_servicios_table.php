<?php

class Create_Step9_Servicios_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('step9_servicios', function($table){
			$table->increments('id');
			$table->integer('step9_id');
			$table->string('nombre');
			$table->string('tiene');
			$table->integer('mensual');
			$table->integer('adeudos');
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
		//
	}

}
<?php

class Create_Step10_Vehiculos {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('step10_vehiculos', function($table){
			$table->increments('id');
			$table->integer('step10_id');
			$table->string('propietario');
			$table->string('anio');
			$table->string('pagos_mensuales');
			$table->string('marca');
			$table->integer('valor_comercial');
			$table->string('cantidad_adeudo');
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
		Schema::drop('step10_vehiculos');
	}

}
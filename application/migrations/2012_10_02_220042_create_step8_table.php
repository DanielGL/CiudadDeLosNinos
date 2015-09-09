<?php

class Create_Step8_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('step8', function($table){
			$table->increments('id');
			$table->integer('estudio_id');
			$table->integer('drenaje');
			$table->integer('combustible');
			$table->integer('luz');
			$table->integer('estado_vivienda');
			$table->string('mejoras');
			$table->string('tipo_mejoras');
			$table->string('vivienda_cuenta');
			$table->integer('television');
			$table->integer('internet');
			$table->integer('cable');
			$table->integer('negocio');
			$table->string('negocio_tipo');
			$table->string('negocio_ubicacion');
			$table->string('negocio_dias_trabajo');
			$table->string('negocio_dias_descanso');
			$table->string('negocio_horario');
			$table->integer('valor_approx');
			$table->integer('renta_mensual');
			$table->integer('ingreso_diario');
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
		Schema::drop('step8');
	}

}
<?php

class Create_Step3 {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('step3', function($table){
			$table->increments('id');
			$table->integer('estudio_id');
			$table->string('escolaridad_padre');
			$table->string('escolaridad_madre');
			$table->integer('grado_padre');
			$table->integer('grado_madre');
			$table->string('nivel_padre');
			$table->string('nivel_madre');
			$table->integer('numero_hermanos');
			$table->string('nombre_hermanos');
			$table->integer('edad_hermanos');
			$table->string('nivel_hermanos');
			$table->integer('grado_hermanos');
			$table->string('dependencia_economica');
			$table->string('nombre_dependiente');
			$table->integer('edad_dependiente');
			$table->boolean('trabaja_actualmente_dependiente');
			$table->string('donde_trabaja_dependiente');
			$table->string('area_trabajo_dependiente');
			$table->string('puesto_dependiente');
			$table->string('descripcion_dependiente');
			$table->integer('salario_mensual_dependiente');
			$table->integer('antiguedad_dependiente');
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
		Schema::drop('step3');
	}

}
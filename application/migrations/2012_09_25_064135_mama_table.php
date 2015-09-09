<?php

class Mama_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mama', function($table){
			$table->increments('id');
			$table->String('nombre');
			$table->integer('edad');
			$table->String('fecha_nacimiento');
			$table->String('lugar_nacimiento');
			$table->String('telefono');
			$table->String('celular')->nullable();
			$table->String('email');
			$table->String('trabajo');
			$table->String('titulo');
			$table->String('profesion');
			$table->String('empresa');
			$table->integer('ingreso');
			$table->String('area_de_trabajo');
			$table->String('antiguedad_en_la_empresa');
			$table->String('puesto');
			$table->String('descripcion_de_lo_que_hace');
			$table->String('trabajos_anteriores');
			$table->String('nombre_de_la_anterior_empresa');
			$table->String('motivos_de_cambio');
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
		Schema::drop('mama');
	}

}
<?php

class Create_Step4_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('step4',function($table){
			$table->increments('id');
			$table->integer('estudio_id');
			$table->string('nombre');
			$table->integer('edad');
			$table->date('fecha_nacimiento');
			$table->string('pais_nacimiento');
			$table->string('estado_nacimiento');
			$table->string('ciudad_nacimiento');
			$table->string('estado_otro');
			$table->string('telefono');
			$table->string('celular');
			$table->string('email');
			$table->string('trabaja_actualmente');
			$table->string('menor_ingreso');
			$table->string('titulo');
			$table->string('profesion');
			$table->integer('cantidad_sueldo');
			$table->string('empresa_labora');
			$table->string('area_desempeno');
			$table->string('puesto');
			$table->integer('salario_integrado');
			$table->integer('anios_antiguedad');
			$table->string('descripcion');
			$table->string('calle');
			$table->string('colonia');
			$table->string('entre_calles');
			$table->integer('numero');
			$table->integer('codigo_postal');
			$table->string('ciudad');
			$table->string('estado');
			$table->string('telefono_trabajo');
			$table->string('horario');
			$table->string('dias_descanso');
			$table->string('trabajo_anterior');
			$table->string('motivo_separacion');
			$table->string('motivo_cambio');
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
		Schema::drop('step4');
	}

}
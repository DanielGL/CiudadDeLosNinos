<?php

class Create_Step1_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('step1', function($table){
			$table->increments('id');
			$table->integer('estudio_id');
			$table->string('nombre_completo');
			$table->integer('edad');
			$table->string('curp');
			$table->date('fecha_nacimiento');
			$table->boolean('trabaja');
			$table->string('sexo');
			$table->string('lugar_nacimiento');
			$table->string('lugar_trabaja');
			$table->string('oficio');
			$table->string('nivel');
			$table->string('reprobado');
			$table->string('reprobado_cual');
			$table->string('escuela_procedencia');
			$table->string('escuela_procedencia_tipo');
			$table->integer('tipo_escuela_procedencia_pago');
			$table->integer('promedio_grado_anterior');
			$table->string('papas_estado_civil');
			$table->string('se_casaron_por');
			$table->string('fecha_casaron');
			$table->string('grado');
			$table->string('niveles');
			$table->string('repetido_grado');
			$table->string('grado_reprobado');
			$table->string('mensualidad');
			$table->integer('edad_caso_el');
			$table->integer('edad_caso_ella');
			$table->string('religion');
			$table->integer('total_hijos');
			$table->boolean('viven_padres');
			$table->boolean('vive_mp');
			$table->string('colonia');
			$table->string('entre_calles');
			$table->integer('numero');
			$table->string('calle');
			$table->string('ciudad');
			$table->string('estado');
			$table->integer('codigo_postal');
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
		Schema::drop('step1');
	}

}
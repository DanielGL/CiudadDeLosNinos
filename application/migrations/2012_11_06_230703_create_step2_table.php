<?php

class Create_Step2_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('step2',function($table){
			$table->increments('id');
			$table->integer('estudio_id');
			$table->string('calle');
			$table->integer('numero');
			$table->string('colonia');
			$table->string('entre_calles',65);
			$table->integer('codigo_postal');
			$table->string('ciudad');
			$table->string('estado');
			$table->integer('telefono');
			$table->integer('celular');
			$table->string('email');
			$table->string('enfermedades_papa');
			$table->string('otra_enfermedad_papa');
			$table->string('enfermedades_madre');
			$table->string('otra_enfermedad_madre');
			$table->string('enfermedades_alumno');
			$table->string('otra_enfermedad_alumno');
			$table->string('servicio_medico');
			$table->string('otro_servicio');
			$table->string('ningun_servicio');
			$table->string('religion_alumno');
			$table->string('religion_padre');
			$table->string('religion_madre');
			$table->string('todos_catolicos');
			$table->string('sacramentos_alumno');
			$table->string('sacramentos_padre');
			$table->string('sacramentos_madre');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down(){
		Schema::drop('step2');
	}

}
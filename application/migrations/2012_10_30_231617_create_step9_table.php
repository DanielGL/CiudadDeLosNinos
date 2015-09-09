<?php

class Create_Step9_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('step9', function($table){
			$table->increments('id');
			$table->integer('estudio_id');
			$table->string('presupuesto');
			$table->string('tiene_deudas');
			$table->string('transporte_escuela');
			$table->string('costo_transporte_papa');
			$table->string('costo_transporte_mama');
			$table->string('costo_transporte_hijos');
			$table->string('servicios_luz');
			$table->string('servicios_agua');
			$table->string('servicios_gas');
			$table->string('servicios_telefono');
			$table->string('servicios_internet');
			$table->string('servicios_cable');
			$table->string('hijos_egresados');
			$table->string('hijos_cuantos');
			$table->string('proyecto_familiar');
			$table->string('familia');
			$table->string('anio_reingreso');
			$table->timestamps();
		});

		Schema::create('step9_deudas', function($table){
			$table->increments('id');
			$table->integer('step9_id');
			$table->string('donde');
			$table->string('que');
			$table->string('cuanto');
			$table->string('tiempo');
			$table->timestamps();
		});

		Schema::create('step9_hijos', function($table){
			$table->increments('id');
			$table->integer('step9_id');
			$table->string('nombre');
			$table->string('egreso');
			$table->timestamps();
		});

		Schema::create('step9_semanales', function($table){
			$table->increments('id');
			$table->integer('step9_id');
			$table->string('nombre');
			$table->string('consumo');
			$table->string('gasto');
			$table->timestamps();
		});

		Schema::create('step9_mensuales', function($table){
			$table->increments('id');
			$table->integer('step9_id');
			$table->string('nombre');
			$table->string('gasto');
			$table->timestamps();
		});

		Schema::create('step9_gastos', function($table){
			$table->increments('id');
			$table->integer('step9_id');
			$table->string('nombre');
			$table->string('gasto');
			$table->timestamps();
		});

		Schema::create('step9_otros_salud', function($table){
			$table->increments('id');
			$table->integer('step9_id');
			$table->string('nombre');
			$table->string('parentesco');
			$table->string('tipo_enfermedad');
			$table->string('tiempo_padecer');
			$table->string('costo_mensual');
			$table->string('observaciones');
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
		Schema::drop('step9');
		Schema::drop('step9_deudas');
		Schema::drop('step9_hijos');
		Schema::drop('step9_semanales');
		Schema::drop('step9_mensuales');
		Schema::drop('step9_gastos');
		Schema::drop('step9_otros_salud');
	}

}
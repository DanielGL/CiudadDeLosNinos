<?php

class Create_Alumnos {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alumnos', function($table){
			$table->create();
			$table->increments('id');
			$table->string('nombre',45);
			$table->string('apellidoPaterno',45);
			$table->string('apellidaMaterno',45);
			$table->date('fechaNacimiento');
			$table->integer('edad');
			$table->string('municipioNacimiento',45);
			$table->string('estadoNacimiento',45);
			$table->string('paisNacimiento',45);
			$table->string('curp',45);
			$table->string('sexo',45);
			$table->string('nivel',45);
			$table->integer('gradoaCursar');
			$table->string('escuelaPrecedencia',45);
			$table->string('calleEscuela',45);
			$table->string('coloniaEscuela',45);
			$table->string('calleDomicilio',45);
			$table->string('entreCalles',45);
			$table->string('noDomicilio',45);
			$table->string('coloniaDomicilio',45);
			$table->integer('codigoPostal');
			$table->string('telefono',45);
			$table->string('celular',45);
			$table->string('estado',45);
			$table->string('enfermedad',45);
			$table->string('discapacidad',45);
			$table->integer('idRegistro');
			$table->float('calificacion');
			$table->string('estatus',45);
		});


	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alumnos');
	}

}
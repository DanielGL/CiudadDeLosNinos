<?php

class Create_Familia_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('familia',function($table){
			$table->increments('idFamilia');
			$table->string('nombreP');
			$table->string('apellidoPaternoP');
			$table->string('apellidoMaternoP');
			$table->string('estadoCivilP');
			$table->integer('edadP');
			$table->string('oficioP');
			$table->string('telefonoP');
			$table->integer('ingresoMensualP');
			$table->string('empresaP');
			$table->string('nombreM');
			$table->string('apellidoPaternoM');
			$table->string('apellidoMaternoM');
			$table->string('estadoCivilM');
			$table->integer('edadM');
			$table->string('oficioM');
			$table->string('telefonoM');
			$table->integer('ingresoMensualM');
			$table->string('empresa');
			$table->integer('AlumnoId');
			$table->timestamps();

		});
		//
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema:drop('familia');
	}

}
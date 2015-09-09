<?php

class Otro_Ingreso_Familiar_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('otro_ingreso_familiar', function($table){
			$table->create();
			$table->increments('id');
			$table->String('nombre');
			$table->integer('edad');
			$table->integer('salario_mensual');
			$table->integer('cantidad_mensual_que_aporta');
			$table->integer('ingreso_familiar');
			$table->String('ocupacion');
			$table->String('empresa_donde_trabaja');
			$table->String('horario');
			$table->String('antiguedad');
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
		Schema::drop('otro_ingreso_familiar');
	}

}
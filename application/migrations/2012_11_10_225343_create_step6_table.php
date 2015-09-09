<?php

class Create_Step6_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('step6',function($table){
			$table->increments('id');
			$table->integer('estudio_id');
			$table->string('nombre_1');
			$table->integer('edad_1');
			$table->string('ocupacion_1');
			$table->string('nombreempresa_1');
			$table->string('horario_1');
			$table->string('laborar_1');
			$table->string('parentesco_1');
			$table->string('otro_1');
			$table->integer('salario_1');
			$table->integer('cantidad_1');
			$table->string('nombre_2');
			$table->integer('edad_2');
			$table->string('ocupacion_2');
			$table->string('nombreempresa_2');
			$table->string('horario_2');
			$table->string('laborar_2');
			$table->string('parentesco_2');
			$table->string('otro_2');
			$table->integer('salario_2');
			$table->integer('cantidad_2');
			$table->string('nombre_3');
			$table->integer('edad_3');
			$table->string('ocupacion_3');
			$table->string('nombreempresa_3');
			$table->string('horario_3');
			$table->string('laborar_3');
			$table->string('parentesco_3');
			$table->string('otro_3');
			$table->integer('salario_3');
			$table->integer('cantidad_3');
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
		Schema::drop('step6');
	}

}
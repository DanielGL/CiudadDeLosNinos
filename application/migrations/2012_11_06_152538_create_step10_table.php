<?php

class Create_Step10_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('step10',function($table){
			$table->increments('id');
			$table->integer('estudio_id');
			$table->integer('numero_vehiculos');
			$table->string('nombre_recomendacion_1');
			$table->string('nombre_recomendacion_2');
			$table->string('direccion_recomendacion_1');
			$table->string('direccion_recomendacion_2');
			$table->string('parentesco_recomendacion_1');
			$table->string('parentesco_recomendacion_2');
			$table->string('telefono_recomendacion_1');
			$table->string('telefono_recomendacion_2');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down(){
		Schema::drop('step10');
	}

}
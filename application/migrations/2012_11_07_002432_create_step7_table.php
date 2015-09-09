<?php

class Create_Step7_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('step7', function($table) {
			$table->increments('id');
			$table->integer('estudio_id');
			$table->string('dependientes_familia',40);
			$table->string('motivos_dependencia',60);
			$table->string('numero_personas',25);
			$table->string('distancia_ciudad_de_los_ninios',25);
			$table->string('numero_cuartos',25);
			$table->string('numero_niveles',25);
			$table->string('metros_construccion',25);
			$table->string('cuartos_dormir',10);
			$table->string('material_techo',10);
			$table->string('material_piso',10);
			$table->string('material_paredes',10);
			$table->string('cuarto_cocinar',20);
			$table->string('cuarto_cocinar_y_dormir',20);
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
		Schema::drop('step7');
	}

}
<?php

class Create_Table_Step3_Hermanos {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('step3_hermanos', function($table){
			$table->increments('id');
			$table->integer('step3_id');
			$table->string('nombre_hermanos');
			$table->string('edad_hermanos');
			$table->string('nivel_hermanos');
			$table->string('grado_hermanos');
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
		Schema::drop('step3_hermanos');
	}

}
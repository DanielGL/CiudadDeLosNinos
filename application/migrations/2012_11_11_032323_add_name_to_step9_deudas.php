<?php

class Add_Name_To_Step9_Deudas {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('step9_deudas', function($table){
			$table->string('nombre');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('step9_deudas', function ($table)
		{
			$table->drop_column('nombre');
		});
	}

}
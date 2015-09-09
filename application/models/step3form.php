<?php

class Step3Form extends  FormBaseModel\Base {
	public static $rules = array(
		'step3_1_escolaridad_padre'     => 'required|numeric|between:1,10',
		'step3_1_escolaridad_madre'     => 'required|numeric|between:1,10',
		'step3_1_grado_padre'           => 'integer',
		'step3_1_grado_padre_nivel'     => 'required',
		'step3_1_grado_madre'           => 'integer',
		'step3_1_grado_madre_nivel'     => 'required',
		'step3_1_numero_hermanos'       => 'required',
		'step3_1_nombre_hermanos'       => 'item_with:step3_1_numero_hermanos',
		'step3_1_edad_hermanos'         => 'item_with:step3_1_numero_hermanos',
		'step3_1_nivel_hermanos'        => 'item_with:step3_1_numero_hermanos',
		'step3_1_grado_hermanos'        => 'item_with:step3_1_numero_hermanos',
		'step3_2_dependencia_economica' => 'required',
		'step3_2_nombre'                => 'required',
		'step3_2_edad'                  => 'numeric',
		'step3_2_trabaja_actualmente'   => 'required',
		'step3_2_donde_trabaja'         => '',
		'step3_2_area_trabajo'          => '',
		'step3_2_puesto'                => '',
		'step3_2_descripcion'           => '',
		'step3_2_salario_mensual'       => 'numeric',
		'step3_2_antiguedad'            => ''
		);

	public static $step3_1_escolaridad = array(
		0 => 'Seleccione una opción',
		1  => 'Preescolar',
		2  => 'Primaria',
		3  => 'Secundaria',
		4  => 'Preparatoria',
		5  => 'Preparatoria técnica',
		6  => 'Carrera técnica',
		7  => 'Carrera comercial',
		8  => 'Normal',
		9  => 'Profesional',
		10  => 'Maestría o doctorado'
		);

	public static $step3_2_dependencia_economica = array(
	    0 => 'Seleccione una opción',
		1 => 'Padre',
		2 => 'Madre',
		3 => 'Ambos',
		4 => 'Abuelo/a',
		5 => 'Hermano/a',
		6 => 'Tio/a/',
		7 => 'Primo/a',
		8 => 'Amigo',
		9 => 'Otro'
		);

	public static $yesno = array(
		1 => 'Si',
		2 => 'No'
		);

	public static $step3_1_numero_hermanos = array(0,1,2,3,4,5,6,7,8,9);


	public static function register_validators() {
		Validator::register('item_with', function($attribute, $value, $parameters) {
			return true;
		});
	}

}

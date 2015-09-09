<?php

class Step8Form extends  FormBaseModel\Base {
	public static $rules = array(
		'step8_1_drenaje'                => 'required',
		'step8_2_combustible'            => 'required',
		'step8_3_luz'                    => 'required',
		'step8_4_estado_vivienda'        => 'required',
		'step8_5_mejoras'                => 'required',
		'step8_6_tipo_mejoras'           => 'required',
		'step8_7_vivienda_cuenta'        => 'required',
		'step8_8_television'             => 'required',
		'step8_9_internet'               => 'required',
		'step8_10_cable'                 => 'required',
		'step8_11_negocio'               => 'required',
		'step8_11_negocio_tipo'          => '',
		'step8_11_negocio_ubicacion'     => '',
		'step8_11_negocio_dias_trabajo'  => '',
		'step8_11_negocio_dias_descanso' => '',
		'step8_11_negocio_horario'       => '',
		'step8_11_valor_approx'          => 'numeric',
		'step8_11_renta_mensual'         => 'numeric',
		'step8_11_ingreso_diario'        => 'numeric'
		);

	public static $step8_1_drenaje = array(
		0 => 'A la red pública',
		1 => 'A una fosa séptica',
		2 => 'A una tubería que va a dar a una grieta',
		3 => 'A una tubería que va a un río o canal',
		4 => 'No tiene drenaje'
		);

	public static $step8_2_combustible = array(
		0 => 'Gas',
		1 => 'Leña',
		2 => 'Carbón',
		3 => 'Petróleo',
		4 => 'Electricidad'
		);

	public static $step8_4_estado_vivienda = array(
		0 => 'Propia y totalmente pagada',
		1 => 'Propia y esta pagándose',
		2 => 'No es propia y se renta',
		3 => 'No es propia y está prestada o se cuida',
		4 => 'Otra:'
		);

	public static $step8_5_mejoras = array(
		0 => 'Nunca',
		1 => 'Cada año',
		2 => 'Cada 2 años',
		3 => 'Cada 3 años',
		4 => 'Cada 4 años o más'
		);

	public static $step8_6_tipo_mejoras = array(
		0 => 'Pintura',
		1 => 'Impermeabilización',
		2 => 'Remodelación',
		3 => 'Ampliación',
		4 => 'Otro'
		);

	public static $step8_7_vivienda_cuenta = array(
		1 => 'Radio o radiograbadora',
		2 => 'Videocasetera y/o DVD',
		3 => 'Licuadora',
		4 => 'Refrigerador',
		5 => 'Lavadora',
		6 => 'Teléfono',
		7 => 'Boiler',
		8 => 'Computadora',
		9 => 'Celular'
		);

	public static $step8_8_television = array(
		0 => 'Ninguno',
		1 => 'Uno',
		2 => 'Dos',
		3 => 'Tres',
		4 => 'Cuatro o más'
		);

	public static $yesno = array(
		1 => 'Si',
		2 => 'No'
		);


	public static function register_validators() {
		Validator::register('item_with', function($attribute, $value, $parameters) {
			return true;
		});
	}

}

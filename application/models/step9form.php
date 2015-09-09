<?php

class Step9Form extends  FormBaseModel\Base {
	public static $rules = array(
		'step9_1_presupuesto'                 => 'required|numeric|between:1,2',
		'step9_1_gastos_inscripciones'        => 'required|numeric',
		'step9_1_gastos_uniformes'            => 'required|numeric',
		'step9_1_gastos_oficial'              => 'required|numeric',
		'step9_1_gastos_deportivo_verano'     => 'required|numeric',
		'step9_1_gastos_deportivo_invierno'   => 'required|numeric',
		'step9_1_gastos_zapatos'              => 'required|numeric',
		'step9_1_gastos_tenis'                => 'required|numeric',
		'step9_1_gastos_libros'               => 'required|numeric',
		'step9_1_gastos_utiles_escolares'     => 'required|numeric',
		'step9_1_gastos_otros_escuela'        => 'required|numeric',
		'step9_1_mensuales_alimentacion'      => 'required|numeric',
		'step9_1_mensuales_transporte'        => 'required|numeric',
		'step9_1_mensuales_servicios'         => 'required|numeric',
		'step9_1_mensuales_pago_casa'         => 'required|numeric',
		'step9_1_mensuales_consultas_medicas' => 'required|numeric',
		'step9_1_mensuales_medicinas'         => 'required|numeric',
		'step9_1_mensuales_ropa'              => 'required|numeric',
		'step9_1_mensuales_diversion'         => 'required|numeric',
		'step9_1_mensuales_colegiaturas'      => 'required|numeric',
		'step9_1_mensuales_otro'              => 'required|numeric',
		'step9_1_semanal_leche'               => 'semanal',
		'step9_1_semanal_huevo'               => 'semanal',
		'step9_1_semanal_lacteos'             => 'semanal',
		'step9_1_semanal_pan'                 => 'semanal',
		'step9_1_semanal_tortillas'           => 'semanal',
		'step9_1_semanal_granos'              => 'semanal',
		'step9_1_semanal_carne'               => 'semanal',
		'step9_1_semanal_pollo'               => 'semanal',
		'step9_1_semanal_pescado'             => 'semanal',
		'step9_1_semanal_frutas'              => 'semanal',
		'step9_1_semanal_verduras'            => 'semanal',
		'step9_1_semanal_postres'             => 'semanal',
		'step9_1_semanal_aguas'               => 'semanal',
		'step9_1_semanal_refrescos'           => 'semanal',
		'step9_1_semanal_abarrotes'           => 'semanal',
		'step9_1_semanal_limpieza'            => 'semanal',
		'step9_1_deudas'                      => 'required|numeric|between:1,2',
		'step9_1_deudas_donde'                => 'deudas',
		'step9_1_deudas_que'                  => 'deudas',
		'step9_1_deudas_cuanto'               => 'deudas',
		'step9_1_deudas_tiempo'               => 'deudas',
		'step9_1_transporte_escuela'          => 'required|numeric',
		'step9_1_transporte_costo_papa'       => 'required|numeric',
		'step9_1_transporte_costo_mama'       => 'required|numeric',
		'step9_1_transporte_costo_hijos'      => 'required|numeric',
		'step9_1_servicios_luz'               => 'servicios',
		'step9_1_servicios_agua'              => 'servicios',
		'step9_1_servicios_gas'               => 'servicios',
		'step9_1_servicios_telefono'          => 'servicios',
		'step9_1_servicios_internet'          => 'servicios',
		'step9_1_servicios_cable'             => 'servicios',
		'step9_2_hijos_egresados'             => 'required|numeric|between:1,2',
		'step9_2_hijos_cuantos'               => 'hijos_cuantos',
		'step9_2_hijos_datos_nombre'          => 'hijos',
		'step9_2_hijos_datos_egreso'          => 'hijos',
		'step9_2_proyecto_familiar'           => 'required',
		'step9_2_familia'                     => 'required|numeric|between:1,2',
		'step9_2_ano_reingreso'               => 'reingreso',
		'step9_3_nombre'                      => '',
		'step9_3_parentesco'                  => '',
		'step9_3_tipo_enfermedad'             => '',
		'step9_3_tiempo_padecer'              => '',
		'step9_3_costo_mensual'               => 'numeric',
		'step9_3_observaciones'               => ''
		);

	public static $step9_1_escolaridad = array(
		-1 => 'Seleccione una opción',
		0  => 'Preescolar',
		1  => 'Primaria',
		2  => 'Secundaria',
		3  => 'Preparatoria',
		4  => 'Preparatoria técnica',
		5  => 'Carrera técnica',
		6  => 'Carrera comercial',
		7  => 'Normal',
		8  => 'Profesional',
		9  => 'Maestría o doctorado'
		);

	public static $step9_1_reingreso = array(1 => 'Familia de nuevo ingreso', 2 => 'Familia de reingreso');

	public static $step9_1_transporte_escuela = array(
		0 => 'Transporte urbano',
		1 => 'Carro propio',
		2 => 'Transporte escolar privado',
		3 => 'Transporte dado por la escuela'
		);

	public static function register_validators() {
		Validator::register('item_with', function($attribute, $value, $parameters) {
			return true;
		});
		Validator::register('deudas', function($attribute, $value, $parameters) {
			if(Input::get('step9_1_deudas') == 1) {
				return count(Input::get('step9_1_deudas_donde')) == count(Input::get('step9_1_deudas_que')) &&
						count(Input::get('step9_1_deudas_donde')) == count(Input::get('step9_1_deudas_cuanto')) &&
						count(Input::get('step9_1_deudas_donde')) == count(Input::get('step9_1_deudas_tiempo'));
			}
			return true;
		});
		Validator::register('servicios', function($attribute, $value, $parameters) {
			$valid = true;
			$valid = $valid && is_array($value);
			$valid = $valid && isset($value[0]) && isset($value[1]) && isset($value[2]);
			$valid = $valid && is_numeric($value[1]) && is_numeric($value[2]);
			return $valid;
		});
		Validator::register('hijos', function($attribute, $value, $parameters) {
			if(Input::get('step9_2_hijos_egresados')=='2'){
				return true;
			}
			$cuantos = Input::get('step9_2_hijos_cuantos')?: 0;
			if(Input::get('step9_2_hijos_egresados') == '1' &&
				Input::get('step9_2_hijos_cuantos') > 0)
			{
				$valid = true;
				foreach ($value as $key => $val) {
					$valid = $valid && !empty($val);
				}
				return $valid;
			}
			return false;
		});
		Validator::register('hijos_cuantos', function($attribute, $value, $parameters) {
			if(Input::get('step9_2_hijos_egresados') == '1' && is_numeric($value)) {
				return true;
			}
			else if(Input::get('step_2_hijos_egresados')=='2'){
				return true;
			}else{
				return false;
			}
		});
		Validator::register('reingreso', function($attribute, $value, $parameters) {
			if(Input::get('step9_2_familia') == '1' && is_numeric($value)) {
				return !empty($value);
			}
			return false;
		});
		Validator::register('semanal', function($attribute, $value, $parameters) {
			$consumo = $value[0];
			$costo = $value[1];

			return (is_numeric($consumo) && is_numeric($costo));
		});
	}

}

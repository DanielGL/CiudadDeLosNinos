<?
class Step10Form extends FormBaseModel\Base {

	public static $rules = array(
		'step10_num_vehiculos'   =>'required',
		'step10_propietario'     =>'vehiculos',
		'step10_marca'           =>'vehiculos',
		'step10_ano'             =>'vehiculos',
		'step10_val_comercial'   =>'vehiculos',
		'step10_pagos_mensuales' =>'vehiculos',
		'step10_cantidad_adeudo' =>'vehiculos',
		'rec1_nombre'            =>'required',
		'rec2_nombre'            =>'required',
		'rec1_direccion'         =>'required',
		'rec2_direccion'         =>'required',
		'rec1_parentesco'        =>'required',
		'rec2_parentesco'        =>'required',
		'rec1_telefono'          =>'required',
		'rec2_telefono'          =>'required'
	);

	public static $carros = array(
	0 =>'0',
	1 =>'1',
	2 =>'2',
	3 =>'3',
	4 =>'4'

	);

	public static function register_validators() {
		Validator::register('vehiculos', function($attribute, $value, $parameters) {
			$vehiculos = true;
			$step10_propietario     = Input::get('step10_propietario', array());
			$step10_marca           = Input::get('step10_marca', array());
			$step10_ano             = Input::get('step10_ano', array());
			$step10_val_comercial   = Input::get('step10_val_comercial', array());
			$step10_pagos_mensuales = Input::get('step10_pagos_mensuales', array());
			$step10_cantidad_adeudo = Input::get('step10_cantidad_adeudo', array());
			for ($i=1; $i <= Input::get('step10_num_vehiculos', 0) ; $i++) {
				$vehiculos = $vehiculos && isset($step10_propietario[$i]) && !empty($step10_propietario[$i]);
				$vehiculos = $vehiculos && isset($step10_marca[$i]) && !empty($step10_marca[$i]);
				$vehiculos = $vehiculos && isset($step10_ano[$i]) && !empty($step10_ano[$i]);
				$vehiculos = $vehiculos && isset($step10_val_comercial[$i]) && !empty($step10_val_comercial[$i]);
				$vehiculos = $vehiculos && isset($step10_pagos_mensuales[$i]) && !empty($step10_pagos_mensuales[$i]);
				$vehiculos = $vehiculos && isset($step10_cantidad_adeudo[$i]) && !empty($step10_cantidad_adeudo[$i]);
			}
			return $vehiculos;
		});
	}

}
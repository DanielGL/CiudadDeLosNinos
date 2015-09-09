<?php

class Step8 extends BaseModel {
	public static $table = 'step8';

	public static function populate($inputs = array())
	{
		$step8 = new Step8();

		$step8->setValue('drenaje','step8_1_drenaje',$inputs);
		$step8->setValue('combustible','step8_2_combustible',$inputs);
		$step8->setValue('luz','step8_3_luz',$inputs);
		$step8->setValue('estado_vivienda','step8_4_estado_vivienda',$inputs);
		$step8->setValue('mejoras','step8_5_mejoras',$inputs);
		$step8->setValue('tipo_mejoras','step8_6_tipo_mejoras',$inputs);
		$step8->setValue('vivienda_cuenta','step8_7_vivienda_cuenta',$inputs);
		$step8->setValue('television','step8_8_television',$inputs);
		$step8->setValue('internet','step8_9_internet',$inputs);
		$step8->setValue('cable','step8_10_cable',$inputs);
		$step8->setValue('negocio','step8_11_negocio',$inputs);
		$step8->setValue('negocio_tipo','step8_11_negocio_tipo',$inputs);
		$step8->setValue('negocio_ubicacion','step8_11_negocio_ubicacion',$inputs);
		$step8->setValue('negocio_dias_trabajo','step8_11_negocio_dias_trabajo',$inputs);
		$step8->setValue('negocio_dias_descanso','step8_11_negocio_dias_descanso',$inputs);
		$step8->setValue('negocio_horario','step8_11_negocio_horario',$inputs);
		$step8->setValue('valor_approx','step8_11_valor_approx',$inputs);
		$step8->setValue('renta_mensual','step8_11_renta_mensual',$inputs);
		$step8->setValue('ingreso_diario','step8_11_ingreso_diario',$inputs);

		return $step8;
	}
		public function get_drenaje()
	{
		return Step8Form::$step8_1_drenaje[$this->get_attribute('drenaje')];
	}
		public function get_combustible()
	{
		return Step8Form::$step8_2_combustible[$this->get_attribute('combustible')];
	}
		public function get_luz()
	{
		return Step8Form::$yesno[$this->get_attribute('luz')];
	}
		public function get_estado_vivienda()
	{
		return Step8Form::$step8_4_estado_vivienda[$this->get_attribute('estado_vivienda')];
	}
		public function get_mejoras()
	{
		return Step8Form::$step8_5_mejoras[$this->get_attribute('mejoras')];
	}
		public function get_tipo_mejoras()
	{
		return Step8Form::$step8_6_tipo_mejoras[$this->get_attribute('tipo_mejoras')];
	}


	public function get_vivienda_cuenta()
	{
		if($this->get_attribute('vivienda_cuenta') != NULL) {
		$cuentacon = explode(',', $this->get_attribute('vivienda_cuenta'));
		$con = '';
		foreach ($cuentacon as $val) {
			$con .= Step8Form::$step8_7_vivienda_cuenta[$val];
		}
		return $con;
		}
		return '';
	}
		public function get_television()
	{
		return Step8Form::$step8_8_television[$this->get_attribute('television')];
	}
		public function get_internet()
	{
		return Step8Form::$yesno[$this->get_attribute('internet')];
	}
		public function get_cable()
	{
		return Step8Form::$yesno[$this->get_attribute('cable')];
	}
		public function get_negocio()
	{
		return Step8Form::$yesno[$this->get_attribute('negocio')];
	}

}
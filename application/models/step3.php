<?php

class Step3 extends BaseModel {
	public static $table = 'step3';

	public static function populate($inputs = array())
	{
		$step3 = new Step3();

		$step3->setValue('escolaridad_padre','step3_1_escolaridad_padre', $inputs);
		$step3->setValue('escolaridad_madre','step3_1_escolaridad_madre', $inputs);
		$step3->setValue('grado_padre','step3_1_grado_padre', $inputs);
		$step3->setValue('grado_madre','step3_1_grado_madre', $inputs);
		$step3->setValue('nivel_padre','step3_1_grado_padre_nivel', $inputs);
		$step3->setValue('nivel_madre','step3_1_grado_madre_nivel', $inputs);
		$step3->setValue('numero_hermanos','step3_1_numero_hermanos', $inputs);
		$step3->setValue('dependencia_economica','step3_2_dependencia_economica', $inputs);
		$step3->setValue('nombre_dependiente','step3_2_nombre', $inputs);
		$step3->setValue('edad_dependiente','step3_2_edad', $inputs);
		$step3->setValue('trabaja_actualmente_dependiente','step3_2_trabaja_actualmente', $inputs);
		$step3->setValue('donde_trabaja_dependiente','step3_2_donde_trabaja', $inputs);
		$step3->setValue('area_trabajo_dependiente','step3_2_area_trabajo', $inputs);
		$step3->setValue('puesto_dependiente','step3_2_puesto', $inputs);
		$step3->setValue('descripcion_dependiente','step3_2_descripcion', $inputs);
		$step3->setValue('salario_mensual_dependiente','step3_2_salario_mensual', $inputs);
		$step3->setValue('antiguedad_dependiente','step3_2_antiguedad', $inputs);

		$step3->save();

		$hermanos = Step3::populate_hermanos($inputs);
		$step3->hermanos()->save($hermanos);
		return $step3;
	}

	public function hermanos()
	{
		return $this->has_many('Step3_Hermano');
	}

		public static function populate_hermanos($inputs = array()){
			$hermanos = array();
			for($i=1; $i <= $inputs['step3_1_numero_hermanos']; $i++){
				$hermano                  = new Step3_Hermano();
				$hermano->nombre_hermanos = isset($inputs['step3_1_nombre_hermanos'])? $inputs['step3_1_nombre_hermanos'][$i] : '';
				$hermano->edad_hermanos   = isset($inputs['step3_1_edad_hermanos'])? $inputs['step3_1_edad_hermanos'][$i] : '';
				$hermano->nivel_hermanos  = isset($inputs['step3_1_nivel_hermanos'])? $inputs['step3_1_nivel_hermanos'][$i] : '';
				$hermano->grado_hermanos  = isset($inptus['step3_1_grado_hermanos'])? $inptus['step3_1_grado_hermanos'][$i] : '';
				array_push($hermanos,$hermano);
			}
			return $hermanos;
		}

		public function get_escolaridad_padre()
		{
			return Step3Form::$step3_1_escolaridad[$this->get_attribute('escolaridad_padre')];
		}

		public function get_escolaridad_madre()
		{
			return Step3Form::$step3_1_escolaridad[$this->get_attribute('escolaridad_madre')];
		}

		public function get_nivel_padre()
		{
			return Step3Form::$step3_1_escolaridad[$this->get_attribute('nivel_padre')];
		}

		public function get_nivel_madre()
		{
			return Step3Form::$step3_1_escolaridad[$this->get_attribute('nivel_madre')];
		}

		public function get_dependencia_economica()
		{
			return Step3Form::$step3_2_dependencia_economica[$this->get_attribute('dependencia_economica')];
		}

		public function get_trabaja_actualmente_dependiente()
		{
			return Step3Form::$step3_2_dependencia_economica[$this->get_attribute('dependencia_economica')];
		}


}
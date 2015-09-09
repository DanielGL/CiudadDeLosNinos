<?php

class Step7 extends BaseModel {
	public static $table = 'step7';

	public static function populate($inputs = array())
	{
		$step7 = new step7();

		$step7->setValue('dependientes_familia','ODFdependientes_familia', $inputs);
		$step7->setValue('motivos_dependencia','motivos_dependencia', $inputs);
		$step7->setValue('numero_personas','numero_personas', $inputs);
		$step7->setValue('distancia_ciudad_de_los_ninios','distancia_CDLN', $inputs);
		$step7->setValue('numero_cuartos','no_cuartos', $inputs);
		$step7->setValue('numero_niveles','no_niveles', $inputs);
		$step7->setValue('metros_construccion','metros_construccion', $inputs);
		$step7->setValue('cuartos_dormir','cuartos_dormir', $inputs);
		$step7->setValue('material_techo','material_techo', $inputs);
		$step7->setValue('material_piso','material_piso', $inputs);
		$step7->setValue('material_paredes','material_paredes', $inputs);
		$step7->setValue('cuarto_cocinar','cuarto_cocinar', $inputs);
		$step7->setValue('cuarto_cocinar_y_dormir','cuarto_cocinary_dormir', $inputs);
		return $step7;
	}

		public function get_dependientes_familia()
	{

		if($this->get_attribute('dependientes_familia') != NULL) {
		$dependientes = explode(',', $this->get_attribute('dependientes_familia'));
		$dep = '';
		foreach ($dependientes as $val) {
			$dep .= Step7Form::$dependientes_familia[$val];
		}
		return $dep;
		}
		return '';
	}
		public function get_material_techo()
	{
		return Step7Form::$materiales[$this->get_attribute('material_techo')];
	}
		public function get_material_piso()
	{
		return Step7Form::$materiales[$this->get_attribute('material_piso')];
	}
		public function get_material_paredes()
	{
		return Step7Form::$materiales[$this->get_attribute('material_paredes')];
	}
		public function get_cuarto_cocinar()
	{
		return Step7Form::$yesno[$this->get_attribute('cuarto_cocinar')];
	}	
		public function get_cuarto_cocinar_y_dormir()
	{
		return Step7Form::$yesno[$this->get_attribute('cuarto_cocinar_y_dormir')];
	}


}
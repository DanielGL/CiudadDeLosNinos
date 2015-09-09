<?php

class Step2 extends BaseModel {
	public static $table = 'step2';

	public static function populate($inputs = array())
	{
		$step2 = new Step2();

		$step2->setValue('calle','dda_calle',  $inputs);
		$step2->setValue('numero','dda_no',  $inputs);
		$step2->setValue('colonia','dda_colonia',  $inputs);
		$step2->setValue('entre_calles','dda_entrecalles',  $inputs);
		$step2->setValue('codigo_postal','dda_cp',  $inputs);
		$step2->setValue('ciudad','dda_ciudad',  $inputs);
		$step2->setValue('estado','dda_estado',  $inputs);
		$step2->setValue('telefono','dda_telefono',  $inputs);
		$step2->setValue('celular','dda_celular',  $inputs);
		$step2->setValue('email','dda_email',  $inputs);
		$step2->setValue('enfermedades_papa','enfermedades_papa',  $inputs);
		$step2->setValue('otra_enfermedad_papa','enfermedades_otrosp',  $inputs);
		$step2->setValue('enfermedades_madre','enfermedades_mama',  $inputs);
		$step2->setValue('otra_enfermedad_madre','enfermedades_otrosm',  $inputs);
		$step2->setValue('enfermedades_alumno','enfermedades_alumno',  $inputs);
		$step2->setValue('otra_enfermedad_alumno','enfermedades_otrosa',  $inputs);
		$step2->setValue('servicio_medico','servicio_medico_alumno',  $inputs);
		$step2->setValue('otro_servicio','otro_servicio',  $inputs);
		$step2->setValue('ningun_servicio','ningun_servicio',  $inputs);
		$step2->setValue('religion_alumno','religion_alumno',  $inputs);
		$step2->setValue('religion_padre','religion_padre',  $inputs);
		$step2->setValue('religion_madre','religion_madre',  $inputs);
		$step2->setValue('todos_catolicos','todos_catolicos',  $inputs);
		$step2->setValue('sacramentos_alumno','sacramentos_alumno',  $inputs);
		$step2->setValue('sacramentos_padre','sacramentos_padre',  $inputs);
		$step2->setValue('sacramentos_madre','sacramentos_madre',  $inputs);

		return $step2;
	}

	public function get_enfermedades_papa()
	{
		if($this->get_attribute('enfermedades_papa') != NULL) {
		$enfermedades = explode(',', $this->get_attribute('enfermedades_papa'));
		$enf = '';
		foreach ($enfermedades as $val) {
			$enf .= Step2Form::$salud_enfermedades[$val];
		}
		return $enf;
		}
		return '';
	}

	public function get_enfermedades_madre()
	{
		if($this->get_attribute('enfermedades_madre') != NULL) {
		$enfermedades = explode(',', $this->get_attribute('enfermedades_madre'));
		$enf = '';
		foreach ($enfermedades as $val) {
			$enf .= Step2Form::$salud_enfermedades[$val];
		}
		return $enf;
		}
		return '';
	}

	public function get_enfermedades_alumno()
	{
		if($this->get_attribute('enfermedades_alumno') != NULL) {
		$enfermedades = explode(',', $this->get_attribute('enfermedades_alumno'));
		$enf = '';
		foreach ($enfermedades as $val) {
			$enf .= Step2Form::$salud_enfermedades[$val];
		}
		return $enf;
		}
		return '';
	}

	public function get_servicio_medico()
	{
		if($this->get_attribute('servicio_medico') != NULL) {
		$enfermedades = explode(',', $this->get_attribute('servicio_medico'));
		$enf = '';
		foreach ($enfermedades as $val) {
			$enf .= Step2Form::$servicio_medico_alumnos[$val];
		}
		return $enf;
		}
		return '';
	}

	public function get_religion_alumno()
	{
		return Step2Form::$religion[$this->get_attribute('religion_alumno')];
	}

	public function get_religion_padre()
	{
		return Step2Form::$religion[$this->get_attribute('religion_padre')];
	}

	public function get_religion_madre()
	{
		return Step2Form::$religion[$this->get_attribute('religion_madre')];
	}

	public function get_todos_catolicos()
	{

		return Step2Form::$yesno[$this->get_attribute('todos_catolicos')];
	}

	public function get_sacramentos_alumno()
	{
		if($this->get_attribute('sacramentos_alumno') != NULL) {
		$enfermedades = explode(',', $this->get_attribute('sacramentos_alumno'));
		$enf = '';
		foreach ($enfermedades as $val) {
			$enf .= Step2Form::$sacramentos[$val];
		}
		return $enf;
		}
		return '';
	}

	public function get_sacramentos_padre()
	{
		if($this->get_attribute('sacramentos_padre') != NULL) {
		$enfermedades = explode(',', $this->get_attribute('sacramentos_padre'));
		$enf = '';
		foreach ($enfermedades as $val) {
			$enf .= Step2Form::$sacramentos[$val];
		}
		return $enf;
		}
		return '';
	}

	public function get_sacramentos_madre()
	{
		if($this->get_attribute('sacramentos_madre') != NULL) {
			$enfermedades = explode(',', $this->get_attribute('sacramentos_madre'));
			$enf = '';
			foreach ($enfermedades as $val) {
				$enf .= Step2Form::$sacramentos[$val];
			}
			return $enf;
		}
		return '';
	}
}
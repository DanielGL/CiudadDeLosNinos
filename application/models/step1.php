<?php

class Step1 extends BaseModel {
	public static $table = 'step1';

	public static function populate($inputs = array())
	{
		$step1 = new Step1();

		$step1->setValue('nombre_completo', 'stepo_nombre_completo', $inputs);
		$step1->setValue('edad', 'stepo_edad', $inputs);
		$step1->setValue('curp', 'stepo_curp', $inputs);
		$step1->setValue('fecha_nacimiento', 'stepo_dob', $inputs);
		$step1->setValue('trabaja', 'stepo_trabaja', $inputs);
		$step1->setValue('sexo', 'stepo_sexo', $inputs);
		$step1->setValue('lugar_nacimiento', 'stepo_lugardeNac', $inputs);
		$step1->setValue('lugar_trabaja', 'stepo_lugartrabaja', $inputs);
		$step1->setValue('oficio', 'stepo_oficio', $inputs);
		$step1->setValue('escuela_procedencia', 'stepo_escu_proced', $inputs);
		$step1->setValue('escuela_procedencia_tipo', 'stepo_tipo_escuela_proc', $inputs);
		$step1->setValue('tipo_escuela_procedencia_pago', 'stepo_mensualidad', $inputs);
		$step1->setValue('promedio_grado_anterior', 'stepo_promedio_grado_anterior', $inputs);
		$step1->setValue('papas_estado_civil', 'stepo_papas_estado_civil', $inputs);
		$step1->setValue('se_casaron_por', 'stepo_se_casaronpor', $inputs);
		$step1->setValue('fecha_casaron', 'stepo_fecha_casaron', $inputs);
		$step1->setValue('grado', 'step1_grado', $inputs);
		$step1->setValue('niveles', 'step1_niveles', $inputs);
		$step1->setValue('repetido_grado', 'stepo_repetido_grado', $inputs);
		$step1->setValue('grado_reprobado', 'stepo_grado', $inputs);
		$step1->setValue('mensualidad', 'stepo_mensualidad', $inputs);
		$step1->setValue('edad_caso_el', 'stepo_edad_caso_el', $inputs);
		$step1->setValue('edad_caso_ella', 'stepo_edad_caso_ella', $inputs);
		$step1->setValue('religion', 'stepo_which_iglesia', $inputs);
		$step1->setValue('total_hijos', 'stepo_total_hijos', $inputs);
		$step1->setValue('viven_padres', 'stepo_vive_padres', $inputs);
		$step1->setValue('vive_mp', 'stepo_vive_mp', $inputs);
		$step1->setValue('colonia', 'stepo_colonia', $inputs);
		$step1->setValue('entre_calles', 'stepo_entre_calles', $inputs);
		$step1->setValue('numero', 'stepo_numero', $inputs);
		$step1->setValue('calle', 'stepo_calle', $inputs);
		$step1->setValue('ciudad', 'stepo_ciudad', $inputs);
		$step1->setValue('estado', 'stepo_estado', $inputs);
		$step1->setValue('codigo_postal', 'stepo_cp', $inputs);

		return $step1;
	}

	public function get_sexo()
	{
		return Step1Form::$depende_de[$this->get_attribute('sexo')];
	}

	public function get_trabaja()
	{
		return Step1Form::$trabajo_de[$this->get_attribute('trabaja')];
	}

	public function get_escuela_procedencia_tipo()
	{
		return Step1Form::$tipoescuela_de[$this->get_attribute('escuela_procedencia_tipo')];
	}

	public function get_papas_estado_civil()
	{
		return Step1Form::$stepo_papawhs_de[$this->get_attribute('papas_estado_civil')];
	}

	public function get_se_casaron_por()
	{
		if($this->get_attribute('se_casaron_por')) {
			return Step1Form::$stepo_papawhs_por[$this->get_attribute('se_casaron_por')];
		}
		return '';
	}

	public function get_niveles()
	{
		return Step1Form::$step1_niveles[$this->get_attribute('niveles')];
	}

	public function get_repetido_grado()
	{
		return Step1Form::$repetido_de[$this->get_attribute('repetido_grado')];
	}

	public function get_viven_padres()
	{
		return Step1Form::$viveconpadres_de[$this->get_attribute('viven_padres')];
	}

	public function get_vive_mp()
	{
		if($this->get_attribute('vive_mp')) {
			return Step1Form::$mp_de[$this->get_attribute('vive_mp')];
		}
		return '';
	}


}
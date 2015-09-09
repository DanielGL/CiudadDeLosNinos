<?php

class Step5 extends BaseModel {
	public static $table = 'step5';

	public static function populate($inputs = array())
	{
		$step5 = new Step5();

		$step5->setValue('nombre','madre_nombre',$inputs);
		$step5->setValue('edad','madre_edad',$inputs);
		$step5->setValue('fecha_nacimiento','madre_fecha_nacimiento',$inputs);
		$step5->setValue('pais_nacimiento','madre_pais_nacimiento',$inputs);
		$step5->setValue('estado_nacimiento','madre_estado_nacimiento',$inputs);
		$step5->setValue('ciudad_nacimiento','madre_ciudad_nacimiento',$inputs);
		$step5->setValue('estado_otro','madre_estado_otro',$inputs);
		$step5->setValue('telefono','madre_telefono',$inputs);
		$step5->setValue('celular','madre_celular',$inputs);
		$step5->setValue('email','madre_email',$inputs);
		$step5->setValue('trabaja_actualmente','om_trabaja_actualmente',$inputs);
		$step5->setValue('menor_ingreso','om_menor_ingreso',$inputs);
		$step5->setValue('titulo','om_titulo',$inputs);
		$step5->setValue('profesion','om_profesion',$inputs);
		$step5->setValue('cantidad_sueldo','om_cantidad_sueldo',$inputs);
		$step5->setValue('empresa_labora','om_empresa_labora',$inputs);
		$step5->setValue('area_desempeno','om_area_desempeno',$inputs);
		$step5->setValue('puesto','om_puesto',$inputs);
		$step5->setValue('salario_integrado','om_salario_integrado',$inputs);
		$step5->setValue('anios_antiguedad','om_anos_antiguedad',$inputs);
		$step5->setValue('descripcion','om_descripcion',$inputs);
		$step5->setValue('calle','om_calle',$inputs);
		$step5->setValue('colonia','om_colonia',$inputs);
		$step5->setValue('entre_calles','om_entre_calles',$inputs);
		$step5->setValue('numero','om_num_calle',$inputs);
		$step5->setValue('codigo_postal','om_cp',$inputs);
		$step5->setValue('ciudad','om_ciudad',$inputs);
		$step5->setValue('estado','om_estado',$inputs);
		$step5->setValue('telefono_trabajo','om_telefono',$inputs);
		$step5->setValue('horario','om_horario',$inputs);
		$step5->setValue('dias_descanso','om_dias_descanso',$inputs);
		$step5->setValue('trabajo_anterior','om_trabajo_anterior',$inputs);
		$step5->setValue('motivo_separacion','om_motivo_separacion',$inputs);
		$step5->setValue('motivo_cambio','om_motivo_cambio',$inputs);

		return $step5;
	}

	public function get_estado_nacimiento()
	{
		return Step5Form::$estados[$this->get_attribute('estado_nacimiento')];
	}

	public function get_trabaja_actualmente()
	{
		return Step5Form::$yesno[$this->get_attribute('trabaja_actualmente')];
	}

	public function get_menor_ingreso()
	{
		return Step5Form::$yesno[$this->get_attribute('menor_ingreso')?: 0];
	}

	public function get_estado()
	{
		return Step5Form::$estados[$this->get_attribute('estado')];
	}

	public function get_dias_descanso()
	{
		if($this->get_attribute('dias_descanso') != NULL) {
		$enfermedades = explode(',', $this->get_attribute('dias_descanso'));
		$enf = '';
		foreach ($enfermedades as $val) {
			$enf .= Step5Form::$dias[$val];
		}
		return $enf;
		}
		return '';
	}
}
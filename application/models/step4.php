<?php

class step4 extends BaseModel {
	public static $table = 'step4';

	public static function populate($inputs = array())
	{
		$step4 = new Step4();

		$step4->setValue('nombre','step4_nombre',$inputs);
		$step4->setValue('edad','step4_edad',$inputs);
		$step4->setValue('fecha_nacimiento','step4_fecha_nacimiento',$inputs);
		$step4->setValue('pais_nacimiento','step4_pais_nacimiento',$inputs);
		$step4->setValue('estado_nacimiento','step4_estado_nacimiento',$inputs);
		$step4->setValue('ciudad_nacimiento','step4_ciudad_nacimiento',$inputs);
		$step4->setValue('estado_otro','step4_estado_otro',$inputs);
		$step4->setValue('telefono','step4_telefono',$inputs);
		$step4->setValue('celular','step4_celular',$inputs);
		$step4->setValue('email','step4_email',$inputs);
		$step4->setValue('trabaja_actualmente','step4op_trabaja_actualmente',$inputs);
		$step4->setValue('menor_ingreso','step4op_menor_ingreso',$inputs);
		$step4->setValue('titulo','step4op_titulo',$inputs);
		$step4->setValue('profesion','step4op_profesion',$inputs);
		$step4->setValue('cantidad_sueldo','step4op_cantidad_sueldo',$inputs);
		$step4->setValue('empresa_labora','step4op_empresa_labora',$inputs);
		$step4->setValue('area_desempeno','step4op_area_desempeno',$inputs);
		$step4->setValue('puesto','step4op_puesto',$inputs);
		$step4->setValue('salario_integrado','step4op_salario_integrado',$inputs);
		$step4->setValue('anios_antiguedad','step4op_anos_antiguedad',$inputs);
		$step4->setValue('descripcion','step4op_descripcion',$inputs);
		$step4->setValue('calle','step4op_calle',$inputs);
		$step4->setValue('colonia','step4op_colonia',$inputs);
		$step4->setValue('entre_calles','step4op_entre_calles',$inputs);
		$step4->setValue('numero','step4op_num_calle',$inputs);
		$step4->setValue('codigo_postal','step4op_cp',$inputs);
		$step4->setValue('ciudad','step4op_ciudad',$inputs);
		$step4->setValue('estado','step4op_estado',$inputs);
		$step4->setValue('telefono_trabajo','step4op_telefono',$inputs);
		$step4->setValue('horario','step4op_horario',$inputs);
		$step4->setValue('dias_descanso','step4op_dias_descanso',$inputs);
		$step4->setValue('trabajo_anterior','step4op_trabajo_anterior',$inputs);
		$step4->setValue('motivo_separacion','step4op_motivo_separacion',$inputs);
		$step4->setValue('motivo_cambio','step4op_motivo_cambio',$inputs);


		return $step4;
	}

	public function get_estado_nacimiento()
	{
		return Step4Form::$estados[$this->get_attribute('estado_nacimiento')];
	}

	public function get_trabaja_actualmente()
	{
		return Step4Form::$yesno[$this->get_attribute('trabaja_actualmente')];
	}

	public function get_menor_ingreso()
	{
		return Step4Form::$yesno[$this->get_attribute('menor_ingreso')?: 0];
	}

	public function get_estado()
	{
		return Step4Form::$estados[$this->get_attribute('estado')];
	}

	public function get_dias_descanso()
	{
		if($this->get_attribute('dias_descanso') != NULL) {
		$enfermedades = explode(',', $this->get_attribute('dias_descanso'));
		$enf = '';
		foreach ($enfermedades as $val) {
			$enf .= Step4Form::$dias[$val];
		}
		return $enf;
		}
		return '';
	}
}
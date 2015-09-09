<?php

class Step9 extends BaseModel {
	public static $table = "step9";
	public function estudio()
	{
		return $this->belongs_to('Estudio');
	}
	public function deudas()
	{
		return $this->has_many('Step9_Deuda');
	}

	public function hijos()
	{
		return $this->has_many('Step9_Hijo');
	}

	public function semanales()
	{
		return $this->has_many('Step9_Semanal');
	}

	public function mensuales()
	{
		return $this->has_many('Step9_Mensual');
	}

	public function gastos()
	{
		return $this->has_many('Step9_Gasto');
	}

	public function servicios()
	{
		return $this->has_many('Step9_Servicio');
	}

	public function otros_salud()
	{
		return $this->has_many('Step9_OtroSalud');
	}

	public static function populate($inputs = array())
	{
		$instance = new static();

		$instance->setValue('presupuesto','step9_1_presupuesto', $inputs);
		$instance->setValue('tiene_deudas','step9_1_deudas', $inputs);
		$instance->setValue('transporte_escuela','step9_1_transporte_escuela', $inputs);
		$instance->setValue('costo_transporte_papa','step9_1_transporte_costo_papa', $inputs);
		$instance->setValue('costo_transporte_mama','step9_1_transporte_costo_mama', $inputs);
		$instance->setValue('costo_transporte_hijos','step9_1_transporte_costo_hijos', $inputs);
		$instance->setValue('hijos_egresados','step9_2_hijos_egresados', $inputs);
		$instance->setValue('hijos_cuantos','step9_2_hijos_cuantos', $inputs);
		$instance->setValue('proyecto_familiar','step9_2_proyecto_familiar', $inputs);
		$instance->setValue('familia','step9_2_familia', $inputs);
		$instance->setValue('anio_reingreso','step9_2_ano_reingreso', $inputs);

		$deudas = array();
		$inputs['step9_1_deudas_donde'] = isset($inputs['step9_1_deudas_donde'])? $inputs['step9_1_deudas_donde'] : array();
		foreach ($inputs['step9_1_deudas_donde'] as $key => $value) {
			$deuda = new Step9_Deuda();
			$deuda->donde  = $inputs['step9_1_deudas_donde'][$key];
			$deuda->que    = $inputs['step9_1_deudas_que'][$key];
			$deuda->cuanto = $inputs['step9_1_deudas_cuanto'][$key];
			$deuda->tiempo = $inputs['step9_1_deudas_tiempo'][$key];
			array_push($deudas, $deuda);
		}

		$inputs['step9_2_hijos_cuantos'] = (isset($inputs['step9_2_hijos_cuantos']))? $inputs['step9_2_hijos_cuantos'] : 0;
		$hijos = array();
		for ($i=0; $i < $inputs['step9_2_hijos_cuantos']; $i++) {
			$hijo = new Step9_Hijo();
			$hijo->nombre = $inputs['step9_2_hijos_datos_nombre'][$i];
			$hijo->egreso = $inputs['step9_2_hijos_datos_egreso'][$i];
			array_push($hijos, $hijo);
		}
		$gastos    = Step9::populate_gastos($inputs);
		$mensuales = Step9::populate_mensuales($inputs);
		$semanales = Step9::populate_semanales($inputs);
		$servicios = Step9::populate_servicios($inputs);

		$otros_salud = new Step9_OtroSalud();
		$otros_salud->setValue('nombre','step9_3_nombre',$inputs);
		$otros_salud->setValue('parentesco','step9_3_parentesco',$inputs);
		$otros_salud->setValue('tipo_enfermedad','step9_3_tipo_enfermedad',$inputs);
		$otros_salud->setValue('tiempo_padecer','step9_3_tiempo_padecer',$inputs);
		$otros_salud->setValue('costo_mensual','step9_3_costo_mensual',$inputs);
		$otros_salud->setValue('observaciones','step9_3_observaciones',$inputs);

		$instance->save();
		$instance->deudas()->save($deudas);
		$instance->hijos()->save($hijos);
		$instance->gastos()->save($gastos);
		$instance->mensuales()->save($mensuales);
		$instance->semanales()->save($semanales);
		$instance->servicios()->save($servicios);
		$instance->otros_salud()->insert($otros_salud);
		return $instance;
	}

	public static function populate_servicios($inputs = array())
	{
		$servicios = array();

		$servicio = new Step9_Servicio();
		$servicio->nombre = 'luz';
		$servicio->tiene = $inputs['step9_1_servicios_luz'][0];
		$servicio->mensual = $inputs['step9_1_servicios_luz'][1];
		$servicio->adeudos = $inputs['step9_1_servicios_luz'][2];
		array_push($servicios, $servicio);

		$servicio = new Step9_Servicio();
		$servicio->nombre = 'agua';
		$servicio->tiene = $inputs['step9_1_servicios_agua'][0];
		$servicio->mensual = $inputs['step9_1_servicios_agua'][1];
		$servicio->adeudos = $inputs['step9_1_servicios_agua'][2];
		array_push($servicios, $servicio);

		$servicio = new Step9_Servicio();
		$servicio->nombre = 'gas';
		$servicio->tiene = $inputs['step9_1_servicios_gas'][0];
		$servicio->mensual = $inputs['step9_1_servicios_gas'][1];
		$servicio->adeudos = $inputs['step9_1_servicios_gas'][2];
		array_push($servicios, $servicio);

		$servicio = new Step9_Servicio();
		$servicio->nombre = 'telefono';
		$servicio->tiene = $inputs['step9_1_servicios_telefono'][0];
		$servicio->mensual = $inputs['step9_1_servicios_telefono'][1];
		$servicio->adeudos = $inputs['step9_1_servicios_telefono'][2];
		array_push($servicios, $servicio);

		$servicio = new Step9_Servicio();
		$servicio->nombre = 'internet';
		$servicio->tiene = $inputs['step9_1_servicios_internet'][0];
		$servicio->mensual = $inputs['step9_1_servicios_internet'][1];
		$servicio->adeudos = $inputs['step9_1_servicios_internet'][2];
		array_push($servicios, $servicio);

		$servicio = new Step9_Servicio();
		$servicio->nombre = 'cable';
		$servicio->tiene = $inputs['step9_1_servicios_cable'][0];
		$servicio->mensual = $inputs['step9_1_servicios_cable'][1];
		$servicio->adeudos = $inputs['step9_1_servicios_cable'][2];
		array_push($servicios, $servicio);

		return $servicios;
	}

	public static function populate_gastos($inputs = array())
	{
		$gastos = array();
		$gasto        = new Step9_Gasto();
		$gasto->nombre  = 'inscripciones';
		$gasto->setValue('gasto','step9_1_gastos_inscripciones',$inputs);
		array_push($gastos, $gasto);

		$gasto        = new Step9_Gasto();
		$gasto->nombre  = 'uniformes';
		$gasto->setValue('gasto','step9_1_gastos_uniformes',$inputs);
		array_push($gastos, $gasto);

		$gasto        = new Step9_Gasto();
		$gasto->nombre  = 'oficial';
		$gasto->setValue('gasto','step9_1_gastos_oficial',$inputs);
		array_push($gastos, $gasto);

		$gasto        = new Step9_Gasto();
		$gasto->nombre  = 'deportivo_verano';
		$gasto->setValue('gasto','step9_1_gastos_deportivo_verano',$inputs);
		array_push($gastos, $gasto);

		$gasto        = new Step9_Gasto();
		$gasto->nombre  = 'deportivo_invierno';
		$gasto->setValue('gasto','step9_1_gastos_deportivo_invierno',$inputs);
		array_push($gastos, $gasto);

		$gasto        = new Step9_Gasto();
		$gasto->nombre  = 'zapatos';
		$gasto->setValue('gasto','step9_1_gastos_zapatos',$inputs);
		array_push($gastos, $gasto);

		$gasto        = new Step9_Gasto();
		$gasto->nombre  = 'tenis';
		$gasto->setValue('gasto','step9_1_gastos_tenis',$inputs);
		array_push($gastos, $gasto);

		$gasto        = new Step9_Gasto();
		$gasto->nombre  = 'libros';
		$gasto->setValue('gasto','step9_1_gastos_libros',$inputs);
		array_push($gastos, $gasto);

		$gasto        = new Step9_Gasto();
		$gasto->nombre  = 'utiles_escolares';
		$gasto->setValue('gasto','step9_1_gastos_utiles_escolares',$inputs);
		array_push($gastos, $gasto);

		$gasto        = new Step9_Gasto();
		$gasto->nombre  = 'otros_escuela';
		$gasto->setValue('gasto','step9_1_gastos_otros_escuela',$inputs);
		array_push($gastos, $gasto);

		return $gastos;
	}

	public static function populate_mensuales($inputs = array())
	{
		$mensuales = array();
		$mensual        = new Step9_Mensual();
		$mensual->nombre  = 'alimentacion';
		$mensual->setValue('gasto','step9_1_mensuales_alimentacion',$inputs);
		array_push($mensuales, $mensual);

		$mensual        = new Step9_Mensual();
		$mensual->nombre  = 'transporte';
		$mensual->setValue('gasto','step9_1_mensuales_transporte',$inputs);
		array_push($mensuales, $mensual);

		$mensual        = new Step9_Mensual();
		$mensual->nombre  = 'servicios';
		$mensual->setValue('gasto','step9_1_mensuales_servicios',$inputs);
		array_push($mensuales, $mensual);

		$mensual        = new Step9_Mensual();
		$mensual->nombre  = 'pago_casa';
		$mensual->setValue('gasto','step9_1_mensuales_pago_casa',$inputs);
		array_push($mensuales, $mensual);

		$mensual        = new Step9_Mensual();
		$mensual->nombre  = 'consultas_medicas';
		$mensual->setValue('gasto','step9_1_mensuales_consultas_medicas',$inputs);
		array_push($mensuales, $mensual);

		$mensual        = new Step9_Mensual();
		$mensual->nombre  = 'medicinas';
		$mensual->setValue('gasto','step9_1_mensuales_medicinas',$inputs);
		array_push($mensuales, $mensual);

		$mensual        = new Step9_Mensual();
		$mensual->nombre  = 'ropa';
		$mensual->setValue('gasto','step9_1_mensuales_ropa',$inputs);
		array_push($mensuales, $mensual);

		$mensual        = new Step9_Mensual();
		$mensual->nombre  = 'diversion';
		$mensual->setValue('gasto','step9_1_mensuales_diversion',$inputs);
		array_push($mensuales, $mensual);

		$mensual        = new Step9_Mensual();
		$mensual->nombre  = 'colegiaturas';
		$mensual->setValue('gasto','step9_1_mensuales_colegiaturas',$inputs);
		array_push($mensuales, $mensual);

		$mensual        = new Step9_Mensual();
		$mensual->nombre  = 'otro';
		$mensual->setValue('gasto','step9_1_mensuales_otro',$inputs);
		array_push($mensuales, $mensual);

		return $mensuales;
	}

	public static function populate_semanales($inputs = array())
	{
		$semanales = array();

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'leche';
		$semanal->consumo = $inputs['step9_1_semanal_leche'][0];
		$semanal->gasto = $inputs['step9_1_semanal_leche'][1];
		array_push($semanales, $semanal);

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'huevo';
		$semanal->consumo = $inputs['step9_1_semanal_huevo'][0];
		$semanal->gasto = $inputs['step9_1_semanal_huevo'][1];
		array_push($semanales, $semanal);

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'lacteos';
		$semanal->consumo = $inputs['step9_1_semanal_lacteos'][0];
		$semanal->gasto = $inputs['step9_1_semanal_lacteos'][1];
		array_push($semanales, $semanal);

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'pan';
		$semanal->consumo = $inputs['step9_1_semanal_pan'][0];
		$semanal->gasto = $inputs['step9_1_semanal_pan'][1];
		array_push($semanales, $semanal);

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'tortillas';
		$semanal->consumo = $inputs['step9_1_semanal_tortillas'][0];
		$semanal->gasto = $inputs['step9_1_semanal_tortillas'][1];
		array_push($semanales, $semanal);

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'granos';
		$semanal->consumo = $inputs['step9_1_semanal_granos'][0];
		$semanal->gasto = $inputs['step9_1_semanal_granos'][1];
		array_push($semanales, $semanal);

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'carne';
		$semanal->consumo = $inputs['step9_1_semanal_carne'][0];
		$semanal->gasto = $inputs['step9_1_semanal_carne'][1];
		array_push($semanales, $semanal);

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'pollo';
		$semanal->consumo = $inputs['step9_1_semanal_pollo'][0];
		$semanal->gasto = $inputs['step9_1_semanal_pollo'][1];
		array_push($semanales, $semanal);

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'pescado';
		$semanal->consumo = $inputs['step9_1_semanal_pescado'][0];
		$semanal->gasto = $inputs['step9_1_semanal_pescado'][1];
		array_push($semanales, $semanal);

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'frutas';
		$semanal->consumo = $inputs['step9_1_semanal_frutas'][0];
		$semanal->gasto = $inputs['step9_1_semanal_frutas'][1];
		array_push($semanales, $semanal);

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'verduras';
		$semanal->consumo = $inputs['step9_1_semanal_verduras'][0];
		$semanal->gasto = $inputs['step9_1_semanal_verduras'][1];
		array_push($semanales, $semanal);

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'postres';
		$semanal->consumo = $inputs['step9_1_semanal_postres'][0];
		$semanal->gasto = $inputs['step9_1_semanal_postres'][1];
		array_push($semanales, $semanal);

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'aguas';
		$semanal->consumo = $inputs['step9_1_semanal_aguas'][0];
		$semanal->gasto = $inputs['step9_1_semanal_aguas'][1];
		array_push($semanales, $semanal);

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'refrescos';
		$semanal->consumo = $inputs['step9_1_semanal_refrescos'][0];
		$semanal->gasto = $inputs['step9_1_semanal_refrescos'][1];
		array_push($semanales, $semanal);

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'abarrotes';
		$semanal->consumo = $inputs['step9_1_semanal_abarrotes'][0];
		$semanal->gasto = $inputs['step9_1_semanal_abarrotes'][1];
		array_push($semanales, $semanal);

		$semanal = new Step9_Semanal();
		$semanal->nombre = 'limpieza';
		$semanal->consumo = $inputs['step9_1_semanal_limpieza'][0];
		$semanal->gasto = $inputs['step9_1_semanal_limpieza'][1];
		array_push($semanales, $semanal);

		return $semanales;
	}

	public function get_presupuesto()
	{
		return Step5Form::$yesno[$this->get_attribute('presupuesto')];
	}

	public function get_tiene_deudas()
	{
		return Step5Form::$yesno[$this->get_attribute('tiene_deudas')];
	}

	public function get_transporte_escuela()
	{
		return Step9Form::$step9_1_transporte_escuela[$this->get_attribute('transporte_escuela')];
	}

	public function get_familia()
	{
		return Step9Form::$step9_1_reingreso[$this->get_attribute('familia')];
	}

	public function get_hijos_egresados()
	{
		return  Step5Form::$yesno[$this->get_attribute('hijos_egresados')];
	}

}

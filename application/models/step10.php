<?php

class Step10 extends BaseModel {
	public static $table = 'step10';

	public static function populate($inputs = array())
	{
		$step10 = new Step10();

		$step10->setValue('numero_vehiculos','step10_num_vehiculos',$inputs);
		$step10->setValue('nombre_recomendacion_1','rec1_nombre',$inputs);
		$step10->setValue('nombre_recomendacion_2','rec2_nombre',$inputs);
		$step10->setValue('direccion_recomendacion_1','rec1_direccion',$inputs);
		$step10->setValue('direccion_recomendacion_2','rec2_direccion',$inputs);
		$step10->setValue('parentesco_recomendacion_1','rec1_parentesco',$inputs);
		$step10->setValue('parentesco_recomendacion_2','rec2_parentesco',$inputs);
		$step10->setValue('telefono_recomendacion_1','rec1_telefono',$inputs);
		$step10->setValue('telefono_recomendacion_2','rec2_telefono',$inputs);

		$vehiculos = array();
		for($i = 1; $i <= $inputs['step10_num_vehiculos']; $i++) {
			$vehiculo = new Step10_Vehiculo();
			$vehiculo->propietario = $inputs['step10_propietario'][$i];
			$vehiculo->anio = $inputs['step10_ano'][$i];
			$vehiculo->pagos_mensuales = $inputs['step10_pagos_mensuales'][$i];
			$vehiculo->marca = $inputs['step10_marca'][$i];
			$vehiculo->valor_comercial = $inputs['step10_val_comercial'][$i];
			$vehiculo->cantidad_adeudo = $inputs['step10_cantidad_adeudo'][$i];
			array_push($vehiculos, $vehiculo);
		}

		$step10->save();
		$step10->vehiculos()->save($vehiculos);
		return $step10;
	}

	public function vehiculos(){
		return $this->has_many('Step10_Vehiculo');
	}
}
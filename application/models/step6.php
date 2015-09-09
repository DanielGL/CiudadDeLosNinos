<?php

class Step6 extends BaseModel {
	public static $table = 'step6';

	public static function populate($inputs = array())
	{
		$step6 = new Step6();

		$step6->setValue('nombre_1','step6_nombre1',$inputs);
		$step6->setValue('edad_1','step6_edad1',$inputs);
		$step6->setValue('ocupacion_1','step6_ocupacion1',$inputs);
		$step6->setValue('nombreempresa_1','step6_nombreempresa1',$inputs);
		$step6->setValue('horario_1','step6_horario1',$inputs);
		$step6->setValue('laborar_1','step6_laborar1',$inputs);
		$step6->setValue('parentesco_1','step6_parentesco1',$inputs);
		$step6->setValue('otro_1','step6_otro1',$inputs);
		$step6->setValue('salario_1','step6_salario',$inputs);
		$step6->setValue('cantidad_1','step6_cantidad1',$inputs);
		$step6->setValue('nombre_2','step6_nombre2',$inputs);
		$step6->setValue('edad_2','step6_edad2',$inputs);
		$step6->setValue('ocupacion_2','step6_ocupacion2',$inputs);
		$step6->setValue('nombreempresa_2','step6_nombreempresa2',$inputs);
		$step6->setValue('horario_2','step6_horario2',$inputs);
		$step6->setValue('laborar_2','step6_laborar2',$inputs);
		$step6->setValue('parentesco_2','step6_parentesco2',$inputs);
		$step6->setValue('otro_2','step6_otro2',$inputs);
		$step6->setValue('salario_2','step6_salario2',$inputs);
		$step6->setValue('cantidad_2','step6_cantidad2',$inputs);
		$step6->setValue('nombre_3','step6_nombre3',$inputs);
		$step6->setValue('edad_3','step6_edad3',$inputs);
		$step6->setValue('ocupacion_3','step6_ocupacion3',$inputs);
		$step6->setValue('nombreempresa_3','step6_nombreempresa3',$inputs);
		$step6->setValue('horario_3','step6_horario3',$inputs);
		$step6->setValue('laborar_3','step6_laborar3',$inputs);
		$step6->setValue('parentesco_3','step6_parentesco3',$inputs);
		$step6->setValue('otro_3','step6_otro3',$inputs);
		$step6->setValue('salario_3','step6_salario3',$inputs);
		$step6->setValue('cantidad_3','step6_cantidad3',$inputs);

		return $step6;
	}

	public function get_horario_1(){
		if($this->get_attribute('horario_1')){
			return Step6Form::$horario1[$this->get_attribute('horario_1')];
		}
		return '';
	}

	public function get_horario_2(){
		if($this->get_attribute('horario_2')){
			return Step6Form::$horario2[$this->get_attribute('horario_2')];
		}
		return '';
	}
	public function get_horario_3(){
		if($this->get_attribute('horario_3')){
			return Step6Form::$horario3[$this->get_attribute('horario_3')];
		}
		return '';
	}
	public function get_parentesco_1(){
		if($this->get_attribute('parentesco_1')){
			return Step6Form::$parentesco1[$this->get_attribute('parentesco_1')];
		}
		return '';
	}	
	public function get_parentesco_2(){
		if($this->get_attribute('parentesco_2')){
			return Step6Form::$parentesco2[$this->get_attribute('parentesco_2')];
		}
		return '';
	}
		public function get_parentesco_3(){
		if($this->get_attribute('parentesco_3')){
			return Step6Form::$parentesco3[$this->get_attribute('parentesco_3')];
		}
		return '';
	}
}
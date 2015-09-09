<?php

class Familiar extends Eloquent {
	public static $table = 'situacion_familiar'
	
	public function direccion(){
		return $this->has_one('Direccion');
	}

}

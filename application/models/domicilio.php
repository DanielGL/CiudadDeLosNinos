<?php

class Domicilio extends Eloquent {
	
	public function direccion(){
		return $this->has_one('Direccion');
	}
}

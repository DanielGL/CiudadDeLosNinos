<?php

class Alumno extends Eloquent {

	public function persona()
	{
		return $this->has_one('Persona');
	}

	public function familia()
	{
		return $this->belongs_to('Familia');
	}

}

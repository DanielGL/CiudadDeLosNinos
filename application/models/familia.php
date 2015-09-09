<?php

class Familia extends Eloquent {

	public function alumnos()
	{
		return $this->has_many('Alumno');
	}

	public function padre()
	{
		return $this->has_one('Persona', 'padre_id');
	}

	public function madre()
	{
		return $this->has_one('Persona', 'madre_id');
	}

}

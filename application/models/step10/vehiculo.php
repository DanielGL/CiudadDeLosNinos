<?php

class Step10_Vehiculo extends BaseModel {
	public static $table = 'step10_vehiculos';

	public function step()
	{
		return $this->belongs_to('Step10');
	}

}

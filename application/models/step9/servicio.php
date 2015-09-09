<?php

class Step9_Servicio extends BaseModel {
	public static $table = 'step9_servicios';

	public function step()
	{
		return $this->belongs_to('Step9');
	}

}

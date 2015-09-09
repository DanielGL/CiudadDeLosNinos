<?php

class Step9_Mensual extends BaseModel {
	public static $table = 'step9_mensuales';

	public function step()
	{
		return $this->belongs_to('Step9');
	}

}

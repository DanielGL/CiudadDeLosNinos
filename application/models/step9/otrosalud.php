<?php

class Step9_OtroSalud extends BaseModel {
	public static $table = 'step9_otros_salud';

	public function step()
	{
		return $this->belongs_to('Step9');
	}

}

<?php

class Step9_Semanal extends BaseModel {
	public static $table = 'step9_semanales';

	public function step()
	{
		return $this->belongs_to('Step9');
	}

}

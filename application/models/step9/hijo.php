<?php

class Step9_Hijo extends BaseModel {
	public static $table = 'step9_hijos';

	public function step()
	{
		return $this->belongs_to('Step9');
	}

}

<?php

class Step9_Gasto extends BaseModel {
	public static $table = 'step9_gastos';

	public function step()
	{
		return $this->belongs_to('Step9');
	}

}

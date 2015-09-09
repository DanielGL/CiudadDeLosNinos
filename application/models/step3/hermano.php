<?php

class Step3_Hermano extends BaseModel {
	public static $table = 'step3_hermanos';

	public function step()
	{
		return $this->belongs_to('Step3');
	}

}

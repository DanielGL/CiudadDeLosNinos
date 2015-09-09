<?php

class Step9_Deuda extends BaseModel {
	public static $table = 'step9_deudas';
	public static $no_show = array('id', 'created_at', 'updated_at', 'estudio_id', 'step3_id', 'step9_id', 'step10_id');

	public function step()
	{
		return $this->belongs_to('Step9');
	}

}

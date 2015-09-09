<?php

class BaseModel extends Eloquent {
	public static $no_show = array('id', 'created_at', 'updated_at', 'estudio_id', 'step3_id', 'step9_id', 'step10_id');

	public function setValue($attribute, $value_name, $inputs) {
		if(isset($inputs[$value_name])) {
			if(is_array($inputs[$value_name])) {
				$this->{$attribute} = implode(',',$inputs[$value_name]);
			} else {
				$this->{$attribute} = $inputs[$value_name];
			}
		}
	}
}
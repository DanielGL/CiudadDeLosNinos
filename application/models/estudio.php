<?php

class Estudio extends BaseModel
{

	public function step1()
	{
		return $this->has_one('Step1');
	}
	public function step2()
	{
		return $this->has_one('Step2');
	}
	public function step3()
	{
		return $this->has_one('Step3');
	}
	public function step4()
	{
		return $this->has_one('Step4');
	}
	public function step5()
	{
		return $this->has_one('Step5');
	}
	public function step6()
	{
		return $this->has_one('Step6');
	}
	public function step7()
	{
		return $this->has_one('Step7');
	}
	public function step8()
	{
		return $this->has_one('Step8');
	}
	public function step9()
	{
		return $this->has_one('Step9');
	}
	public function step10()
	{
		return $this->has_one('Step10');
	}
}

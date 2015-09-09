<?php

class Estudio_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		return Redirect::to('estudio/step_1');
	}

	public function get_step_1()
	{
		return View::make('estudio.step_1');
	}

	public function post_step_1()
	{
		if(Step1Form::is_valid()){
			Step1Form::save_input();
			return Redirect::to_action('estudio@step_2');
		} else {
			return Redirect::back()->with_input()->with_errors(Step1Form::$validation);
		}
	}

	public function get_step_2()
	{
		return View::make('estudio.step_2');
	}

	public function post_step_2()
	{
		if(Step2Form::is_valid()) {
				Step2Form::save_input();
				return Redirect::to_action('estudio@step_3');
		} else {
			return Redirect::back()->with_input()->with_errors(Step2Form::$validation);
		}
	}

	public function get_step_3()
	{
		return View::make('estudio.step_3');
	}

	public function post_step_3()
	{
		if(Step3Form::is_valid()) {
				Step3Form::save_input();
				return Redirect::to_action('estudio@step_4');
		} else {
			return Redirect::back()->with_input()->with_errors( Step3Form::$validation );
		}
	}

	public function get_step_4()
	{
		return View::make('estudio.step_4');
	}

	public function post_step_4()
	{
		if(Step4Form::is_valid()) {
				Step4Form::save_input();
				return Redirect::to_action('estudio@step_5');
		} else {
			return Redirect::back()->with_input()->with_errors( Step4Form::$validation );
		}
	}

	public function get_step_5()
	{
		return View::make('estudio.step_5');
	}

	public function post_step_5()
	{
		if(Step5Form::is_valid()) {
				Step5Form::save_input();
				return Redirect::to_action('estudio@step_6');
		} else {
			return Redirect::back()->with_input()->with_errors( Step5Form::$validation );
		}
	}

	public function get_step_6()
	{
		return View::make('estudio.step_6');
	}

	public function post_step_6()
	{
		if(Step6Form::is_valid()){
			Step6Form::save_input();
			return Redirect::to_action('estudio@step_7');
		}else{
			return Redirect::back()->with_input()->with_errors( Step6Form::$validation);
		}
	}

	public function get_step_7()
	{
		return View::make('estudio.step_7');
	}

	public function post_step_7()
	{
		if(Step7Form::is_valid()) {
			Step7Form::save_input();
			return Redirect::to_action('estudio@step_8');
		} else {
			return Redirect::back()->with_input()->with_errors( Step7Form::$validation );
		}
	}

	public function get_step_8()
	{
		return View::make('estudio.step_8');
	}

	public function post_step_8()
	{
		if(Step8Form::is_valid()) {
			Step8Form::save_input();
			return Redirect::to_action('estudio@step_9');
		} else {
			return Redirect::back()->with_input()->with_errors( Step8Form::$validation );
		}
	}

	public function get_step_9()
	{
		require_once(path('app').'libraries/step9/form_helpers.php');
		return View::make('estudio.step_9');
	}

	public function get_step_9_debt($debt_no)
	{
		if(Request::ajax()) {
			return View::make('partials.step9.has_debt', array('debt_no' => $debt_no));
		} else {
			return Response::error('404');
		}
	}

	public function post_step_9()
	{
		if(Step9Form::is_valid()) {
			Step9Form::save_input();
			return Redirect::to_action('estudio@step_10');
		} else {
			return Redirect::back()->with_input()->with_errors( Step9Form::$validation );
		}
	}

	public function get_step_10()
	{
		return View::make('estudio.step_10');
	}

	public function post_step_10()
	{
		if(Step10Form::is_valid()) {
			Step10Form::save_input();
			return Redirect::to_action('estudio@finish');
		} else {
			return Redirect::back()->with_input()->with_errors( Step10Form::$validation );
		}
	}

	public function get_finish()
	{
		$estudio = new Estudio();
		$estudio->setValue('clave', 'stepo_clave_estudio', Step1Form::all());
		$estudio->setValue('fecha_solicitud', 'stepo_fecha_solicitud', Step1Form::all());
		$estudio->setValue('fecha_ingreso_fam', 'stepo_fecha_ingreso_familia', Step1Form::all());
		$estudio->save();
		$step1  = Step1::populate(Step1Form::all());
		$step2  = Step2::populate(Step2Form::all());
		$step3  = Step3::populate(Step3Form::all());
		$step4  = Step4::populate(Step4Form::all());
		$step5  = Step5::populate(Step5Form::all());
		$step6  = Step6::populate(Step6Form::all());
		$step7  = Step7::populate(Step7Form::all());
		$step8  = Step8::populate(Step8Form::all());
		$step9  = Step9::populate(Step9Form::all());
		$step10 = Step10::populate(Step10Form::all());

		$estudio->step1()->insert($step1);
		$estudio->step2()->insert($step2);
		$estudio->step3()->insert($step3);
		$estudio->step4()->insert($step4);
		$estudio->step5()->insert($step5);
		$estudio->step6()->insert($step6);
		$estudio->step7()->insert($step7);
		$estudio->step8()->insert($step8);
		$estudio->step9()->insert($step9);
		$estudio->step10()->insert($step10);
		return Redirect::to_action('menu@display');
	}

}

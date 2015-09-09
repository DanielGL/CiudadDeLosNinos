<?php

class Menu_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		return Redirect::to('menu/display');
	}

	public function get_display()
	{
		return View::make('menu.display');
	}


}

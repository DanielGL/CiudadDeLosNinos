<?php

class Admin_Controller extends Base_Controller {

	public function action_list()
	{
		if(Request::ajax()) {
			$estudios = Estudio::select(array('estudios.clave', 'estudios.fecha_solicitud', 'estudios.fecha_ingreso_fam', 'estudios.id'));
			return Datatables::of($estudios)->make();
		}
		Asset::add('DataTables', 'js/jquery.dataTables.min.js');
		return View::make('admin.list');
	}

	public function action_show($id = 0)
	{
		$estudio = Estudio::with(
			array(
				'step1',
				'step2',
				'step3', 'step3.hermanos',
				'step4',
				'step5',
				'step6',
				'step7',
				'step8',
				'step9', 'step9.deudas', 'step9.hijos', 'step9.semanales', 'step9.mensuales', 'step9.gastos', 'step9.servicios', 'step9.otros_salud',
				'step10', 'step10.vehiculos'
				)
			)->where_id($id)->first();
		return View::make('admin.show', array('estudio' => $estudio));
	}
}
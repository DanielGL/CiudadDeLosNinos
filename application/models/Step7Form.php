<?php

class Step7Form extends FormBaseModel\Base {
	public static $rules = array(
		'dda_calle'               => '',
		'ODFdependientes_familia' => '',
		'ODFdependientes_familia_otro' =>'',
		'motivos_dependencia'     => '',
		'numero_personas'         => 'required|numeric',
		'distancia_CDLN'          => 'required',
		'no_cuartos'              => 'required|numeric',
		'no_niveles'              => 'required|numeric',
		'metros_construccion'     => 'required',
		'cuartos_dormir'          => 'required',
		'material_techo'          => 'required',
		'material_piso'           => 'required',
		'material_paredes'        => 'required',
		'cuarto_cocinar'          => 'required',
		'cuarto_cocinary_dormir'  => 'required',
	);
	public static $dependientes_familia = array(
		0 => 'Abuelo',
		1 => 'Abuela',
		2 => 'Tio',
		3 => 'Primo',
		4 => 'Amigo',
		5 => 'otro'

	);

	public static $materiales = array(
		1 => 'Carton',
		2 => 'Teja',
		3 => 'Lamina de metal',
		4 => 'Losa de concreto o terrado con vigeria'
	);

	public static $yesno = array(
		1 => 'Si',
		2 => 'No'
	);
}

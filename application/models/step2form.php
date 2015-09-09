<?php

class Step2Form extends FormBaseModel\Base {
	public static $rules = array(
		'dda_calle'              => 'required',
		'dda_no'                 => 'required',
		'dda_colonia'            => 'required',
		'dda_entrecalles'        => 'required',
		'dda_cp'                 => 'required|numeric',
		'dda_ciudad'             => 'required',
		'dda_estado'             => 'required',
		'dda_telefono'           => 'required',
		'dda_celular'            => 'required',
		'dda_email'              => 'required',
		'enfermedades_papa'      => 'required',
		'enfermedades_otrosp'    =>'',
		'enfermedades_mama'      => 'required',
		'enfermedades_otrosm'    =>'',
		'enfermedades_alumno'    =>'required',
		'enfermedades_otrosa'    =>'',
		'servicio_medico_alumno' =>'required',
		'otro_servicio'          =>'',
		'ningun_servicio'        =>'',
		'religion_alumno'        =>'required',
		'religion_padre'         =>'required',
		'religion_madre'         =>'required',
		'todos_catolicos'        =>'required',
		'sacramentos_alumno'     =>'',
		'sacramentos_padre'      =>'',
		'sacramentos_madre'      =>''

		);

	public static $salud_enfermedades = array(
		0 => 'Ninguno',
		1 => 'Problemas de vista',
		2 => 'Problemas de oido',
		3 => 'Problemas de dislexia',
		4 => 'problema de lenguaje',
		5 => 'Limitacion para caminar o moverse',
		6 => 'Es mudo',
		7 => 'Deficiendia mental',
		8 => 'Otro' //java
		);

		public static $servicio_medico_alumnos = array(
		0 => 'Seguro social IMSS',
		1 => 'ISSSTE',
		2 => 'Pemex Defensa o Marina',
		3 => 'Otro',
		4 => 'No Cuento Con Servicio Medico'
		);

		public static $religion = array(
		1 => 'Catolica',
		2 => 'Ninguna',
		3 => 'Otra'
		);
		public static $sacramentos = array(
		1 => 'Bautismo',
		2 => 'Confirmacion',
		3 => 'Primera Comunion'
		);

		public static $yesno = array(
		1 => 'Si',
		2 => 'No'
		);


}

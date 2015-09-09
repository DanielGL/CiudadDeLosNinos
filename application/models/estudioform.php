<?php

class EstudioForm extends  FormBaseModel\Base {
	public static $rules = array(
		'salud_enf_alumno'     => 'required',
		'salud_enf_padre'      => 'required',
		'salud_enf_madre'      => 'required',
		'salud_seguro'         => 'required',
		'salud_seguro_clinica' => 'required_with:salud_seguro,0',
		'salud_seguro_otro'    => 'required_with:salud_seguro,3',
		'salud_seguro_na'      => 'required_with:salud_seguro,4',
		'clinica'              => 'required'
		);

	public static $salud_enfermedades = array(
		0 => 'Ninguna',
		1 => 'Vista',
		2 => 'Oido',
		3 => 'Diselexia',
		4 => 'Lenguaje',
		5 => 'Limitación para caminar o moverse',
		6 => 'Es mundo',
		7 => 'retraso mental',
		8 => 'Otras'
		);

	public static $salud_seguro = array(
		0 => 'Seguro Social IMSS',
		1 => 'ISSSTE',
		2 => 'Pemex, Defensa o Marina',
		3 => 'Otro',
		4 => 'Ninguno'
		);
	public static $religion = array(
		0 => 'catolica',
		1 => 'ninguna',
		2 => 'otra',
		);
	public static $son_catolicos = array(
		0 => 'si',
		1 => 'no',
		);
	public static $sacramentos = array(
		0 => 'bautismo',
		1 => 'primera_comunion',
		);

}

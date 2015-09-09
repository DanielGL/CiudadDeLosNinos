<?php

class Step5Form extends FormBaseModel\Base {
	public static $rules = array(
		'madre_nombre'            =>'required',
		'madre_edad'              =>'required|numeric',
		'madre_fecha_nacimiento'  =>'required|after:1900-01-01',
		'madre_pais_nacimiento'   =>'required',
		'madre_estado_nacimiento' =>'required',
		'madre_ciudad_nacimiento' =>'required',
		'madre_estado_otro'       =>'',
		'madre_telefono'          =>'',
		'madre_celular'           =>'',
		'madre_email'             =>'email',
		'om_trabaja_actualmente'  =>'required',
		'om_cambio_trabajo'       =>'',
		'om_menor_ingreso'        =>'',
		'om_titulo'               =>'',
		'om_profesion'            =>'required',
		'om_cantidad_sueldo'      =>'numeric',
		'om_empresa_labora'       =>'',
		'om_area_desempeno'       =>'',
		'om_puesto'               =>'',
		'om_salario_integrado'    =>'numeric',
		'om_anos_antiguedad'      =>'numeric',
		'om_descripcion'          =>'',
		'om_calle'                =>'',
		'om_colonia'              =>'',
		'om_entre_calles'         =>'',
		'om_num_calle'            =>'numeric',
		'om_cp'                   =>'numeric',
		'om_ciudad'               =>'',
		'om_estado'               =>'',
		'om_telefono'             =>'',
		'om_horario'              =>'',
		'om_dias_descanso'        =>'',
		'om_trabajo_anterior'     =>'',
		'om_motivo_separacion'    =>'',
		'om_motivo_cambio'        =>''

		);

	public static $estados = array(
		0  => 'Aguascalientes',
		1  => 'Baja California',
		2  => 'Baja California Sur',
		3  => 'Campeche',
		4  => 'Chiapas',
		5  => 'Chihuahua',
		6  => 'Coahuila',
		7  => 'Colima',
		8  => 'Durango',
		9  => 'Guanajuato',
		10 => 'Guerrero',
		11 => 'Hidalgo',
		12 => 'Jalisco',
		13 => 'Michoac&aacute;n',
		14 => 'Morelos',
		15 => 'Nayarit',
		16 => 'Nuevo Le&oacute;n',
		17 => 'Oaxaca',
		18 => 'Puebla',
		19 => 'Quer&eacute;taro',
		20 => 'Quintana Roo',
		21 => 'San Luis Potos&iacute;',
		22 => 'Sinaloa',
		23 => 'Sonora',
		24 => 'Tabasco',
		25 => 'Tamaulipas',
		26 => 'Tlaxcala',
		27 => 'Veracruz',
		28 => 'Yucat&aacute;n',
		29 => 'Zacatecas',
		30 => 'Estado de M&eacute;xico',
		31 => 'Distrito Federal',
		32 => 'Otro'
		);

		public static $yesno = array(
		1 =>'Si',
		2 =>'No'
		);

		public static $dias = array(
		1 => 'Lunes',
		2 => 'Martes',
		3 => 'Miercoles',
		4 => 'Jueves',
		5 => 'Viernes',
		6 => 'Sabado',
		7 => 'Domingo'
		);

		public static $cambiotrabajo = array(
		0 => 'Ninguna',
		1 => 'Una vez',
		2 => 'Dos veces',
		3 => 'Tres veces',
		4 => 'Cuatro veces',
		5 => 'Mas de 5'
		);
}

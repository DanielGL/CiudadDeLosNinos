<?php

class Step4Form extends FormBaseModel\Base {
	public static $rules = array(
		'step4_nombre'                =>'required',
		'step4_edad'                  =>'required|numeric',
		'step4_fecha_nacimiento'      =>'required|after:1900-01-01',
		'step4_pais_nacimiento'       =>'required',
		'step4_estado_nacimiento'     =>'required',
		'step4_ciudad_nacimiento'     =>'required',
		'step4_estado_otro'           =>'',
		'step4_telefono'              =>'',
		'step4_celular'               =>'',
		'step4_email'                 =>'email',
		'step4op_trabaja_actualmente' =>'required',
		'step4op_menor_ingreso'       =>'',
		'step4op_titulo'              =>'',
		'step4op_profesion'           =>'required',
		'step4op_cantidad_sueldo'     =>'numeric',
		'step4op_empresa_labora'      =>'',
		'step4op_area_desempeno'      =>'',
		'step4op_puesto'              =>'',
		'step4op_salario_integrado'   =>'numeric',
		'step4op_anos_antiguedad'     =>'numeric',
		'step4op_descripcion'         =>'',
		'step4op_calle'               =>'',
		'step4op_colonia'             =>'',
		'step4op_entre_calles'        =>'',
		'step4op_num_calle'           =>'numeric',
		'step4op_cp'                  =>'numeric',
		'step4op_ciudad'              =>'',
		'step4op_estado'              =>'',
		'step4op_telefono'            =>'',
		'step4op_horario'             =>'',
		'step4op_dias_descanso'       =>'',
		'step4op_trabajo_anterior'    =>'',
		'step4op_motivo_separacion'   =>'',
		'step4op_motivo_cambio'       =>''

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

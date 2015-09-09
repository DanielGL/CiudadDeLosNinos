<?php

class Step1Form extends FormBaseModel\Base {
	public static $rules = array(
		'stepo_clave_estudio'           => 'required',
		'stepo_fecha_solicitud'         =>'required',
		'stepo_fecha_ingreso_familia'   =>'required|after:1900-01-01',
		'stepo_nombre_completo'         =>'required',
		'stepo_edad'                    => 'required|numeric',
		'stepo_curp'                    => 'required',
		'stepo_dob'                     => 'required|after:1900-01-01',
		'stepo_trabaja'                 => 'required',
		'stepo_sexo'                    => 'required',
		'stepo_lugardeNac'              =>'required',
		'stepo_lugartrabaja'            =>'',
		'stepo_se_casaronpor'           =>'',
		'stepo_oficio'                  =>'',
		'stepo_escu_proced'             =>'required',
		'stepo_tipo_escuela_proc'       =>'required',
		'stepo_tipo_escuela_proc_pago'  =>'integer',
		'stepo_promedio_grado_anterior' =>'numeric|required',
		'stepo_papas_estado_civil'      =>'required',
		'stepo_fecha_casaron'           =>'required',
		'step1_grado'                   =>'required',
		'step1_niveles'                 =>'required',
		'stepo_repetido_grado'          =>'required',
		'stepo_grado'                   =>'',
		'stepo_mensualidad'             =>'',
		'stepo_edad_caso_el'            =>'required',
		'stepo_edad_caso_ella'          =>'required',
		'stepo_which_iglesia'           =>'required',
		'stepo_total_hijos'             =>'required',
		'stepo_vive_padres'             =>'required',
		'stepo_vive_mp'                 => '',
		'stepo_colonia'                 => '',
		'stepo_entre_calles'            => '',
		'stepo_numero'                  => '',
		'stepo_calle'                   => '',
		'stepo_ciudad'                  => '',
		'stepo_estado'                  => '',
		'stepo_cp'                      => ''
		);

		public static $depende_de = array(
		1 => 'Hombre',
		2 => 'Mujer'
		);

		public static $trabajo_de = array(
		1 => 'Si',
		2 => 'No'
		);

		public static $stepo_papawhs_de = array(
		1=> 'casados',
		2 => 'Divorciados',
		3=> 'Union libre',
		4=> 'Separados',
		5=> 'Madre Soltera',
		6=> 'Padre Soltero',
		7=> 'Viuda',
		8=> 'Viudo'
		);

		public static $stepo_papawhs_por = array(
		1 => 'civil',
		2 => 'iglesia'
		);
		public static $step1_niveles = array(
			1=> 'primaria',
			2=> 'secundaria',
			3=> 'preparatoria'
			);

public static $repetido_de= array(
			1=> 'Si',
			2=> 'No'
			);
public static $tipoescuela_de= array(
			1=> 'Publica',
			2=> 'Privada'
			);
public static $viveconpadres_de= array(
			1=> 'Si',
			2=> 'No'
			);
public static $mp_de= array(
			1=> 'Mama',
			2=> 'Papa'
			);
}

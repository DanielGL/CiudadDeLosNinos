<?
    $step9_2_hijos_datos_egreso  = Step9Form::old('step9_2_hijos_datos_egreso', array());
    $step9_2_hijos_datos_nombre    = Step9Form::old('step9_2_hijos_datos_nombre', array());
    echo Form::easy_group(
        array(
            'name'    => 'step9_2_hijos_datos_nombre['.$hijo_no.']',
            'label'   => 'Nombre:',
            'errors'  => $errors,
            'values'  => (isset($step9_2_hijos_datos_nombre[$hijo_no])? $step9_2_hijos_datos_nombre[$hijo_no] : '')
            ),
        'text',
        'Step9Form'
        );

    echo Form::easy_group(
        array(
            'name'    => 'step9_2_hijos_datos_egreso['.$hijo_no.']',
            'label'   => 'A&ntilde;o de egreso:',
            'errors'  => $errors,
            'values'  => (isset($step9_2_hijos_datos_egreso[$hijo_no])? $step9_2_hijos_datos_egreso[$hijo_no] : '')
            ),
        'text',
        'Step9Form'
        );
?>
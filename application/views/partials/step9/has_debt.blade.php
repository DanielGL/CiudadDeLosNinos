<fieldset>
	<legend>Deuda {{ $debt_no }}</legend>
    <?
        $step9_1_deudas_donde  = Step9Form::old('step9_1_deudas_donde', array());
        $step9_1_deudas_que    = Step9Form::old('step9_1_deudas_que', array());
        $step9_1_deudas_cuanto = Step9Form::old('step9_1_deudas_cuanto', array());
        $step9_1_deudas_tiempo = Step9Form::old('step9_1_deudas_tiempo', array());
        echo Form::easy_group(
            array(
                'name'    => 'step9_1_deudas_donde['.$debt_no.']',
                'label'   => '¿En donde?',
                'block'   => '',
                'errors'  => $errors,
                'prepend' => '',
                'values'  => (isset($step9_1_deudas_donde[$debt_no])? $step9_1_deudas_donde[$debt_no] : '')
            ),
            'text',
            'Step9Form'
        );

        echo Form::easy_group(
            array(
                'name'    => 'step9_1_deudas_que['.$debt_no.']',
                'label'   => '¿De que?',
                'block'   => '',
                'errors'  => $errors,
                'prepend' => '',
                'values'  => (isset($step9_1_deudas_que[$debt_no])? $step9_1_deudas_que[$debt_no] : '')
            ),
            'text',
            'Step9Form'
        );

        echo Form::easy_group(
            array(
                'name'    => 'step9_1_deudas_cuanto['.$debt_no.']',
                'label'   => '¿Cantidad que debe?',
                'block'   => '',
                'errors'  => $errors,
                'prepend' => '$',
                'values'  => (isset($step9_1_deudas_cuanto[$debt_no])? $step9_1_deudas_cuanto[$debt_no] : '')
            ),
            'prepend',
            'Step9Form',
            'mini'
        );

        echo Form::easy_group(
            array(
                'name'    => 'step9_1_deudas_tiempo['.$debt_no.']',
                'label'   => 'Tiempo faltante para pagar',
                'block'   => '',
                'errors'  => $errors,
                'prepend' => '',
                'values'  => (isset($step9_1_deudas_cuanto[$debt_no])? $step9_1_deudas_tiempo[$debt_no] : '')
            ),
            'text',
            'Step9Form'
        );
?>
</fieldset>
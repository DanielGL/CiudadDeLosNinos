@layout('layouts/main')
@section('extra-css')
<style type="text/css">
</style>
@endsection

@section('extra-js')
<script type="text/javascript">

    $('.step8_11_negocio input[type="radio"]').on('change', function() {
        $(".Negocio").hide();

    })
    $('.step8_11_negocio input[type="radio"][value="1"]').on('change', function() {
        var obj = $(this);
            $(".Negocio").show();
            
    })   

</script>
@endsection

@section('main-content')
{{ Form::horizontal_open() }}
    <div class="row well">
        <fieldset>
            <legend>La vivienda cuenta con:</legend>
            <div class="span5">
                <?

                echo Form::easy_group(
                    array(
                        'name'    => 'step8_1_drenaje',
                        'label'   => 'Drenaje: ',
                        'values'  => Step8Form::$step8_1_drenaje,
                        'errors'  => $errors
                        ),
                    'labelled_radios',
                    'Step8Form',
                    'normal'
                    );

                echo Form::easy_group(
                    array(
                        'name'    => 'step8_2_combustible',
                        'label'   => 'Combustible: ',
                        'values'  => Step8Form::$step8_2_combustible,
                        'errors'  => $errors
                        ),
                    'labelled_radios',
                    'Step8Form',
                    'normal'
                    );

                echo Form::easy_group(
                    array(
                        'name'    => 'step8_3_luz',
                        'label'   => 'Tiene luz el&eacute;ctrica?',
                        'values'  => Step8Form::$yesno,
                        'errors'  => $errors
                        ),
                    'labelled_radios',
                    'Step8Form',
                    'normal'
                    );
                 
                 echo Form::easy_group(
                    array(
                        'name'    => 'step8_4_estado_vivienda',
                        'label'   => 'Estado de la vivienda: ',
                        'values'  => Step8Form::$step8_4_estado_vivienda,
                        'errors'  => $errors
                        ),
                    'labelled_radios',
                    'Step8Form',
                    'normal'
                    );

                 echo Form::easy_group(
                     array(
                         'name'    => 'step8_5_mejoras',
                         'label'   => '¿Cada cu&aacute;ndo realizan mejoras a la casa?',
                         'values'  => Step8Form::$step8_5_mejoras,
                         'errors'  => $errors
                         ),
                     'labelled_radios',
                     'Step8Form',
                     'normal'
                     );

                ?>
            </div>
            <div class = "span5">
                <?

                echo Form::easy_group(
                    array(
                        'name'    => 'step8_6_tipo_mejoras',
                        'label'   => '¿Qu&eacute; tipo de mejoras realizan?',
                        'errors'  => $errors,
                        'values'  => Step8Form::$step8_6_tipo_mejoras,
                        ),
                    'labelled_radios',
                    'Step8Form',
                    'normal'
                    );

                echo Form::easy_group(
                    array(
                        'name'    => 'step8_7_vivienda_cuenta',
                        'label'   => 'En la vivienda cuentan con:',
                        'values'  => Step8Form::$step8_7_vivienda_cuenta,
                        'errors'  => $errors
                        ),
                    'labelled_checkboxes',
                    'Step8Form',
                    'normal'
                    );

                echo Form::easy_group(
                    array(
                        'name'    => 'step8_8_television',
                        'label'   => '¿Cu&aacute;ntos televisores tienen?:',
                        'values'  => Step8Form::$step8_8_television,
                        'errors'  => $errors
                        ),
                    'labelled_radios',
                    'Step8Form',
                    'normal'
                    );

                echo Form::easy_group(
                    array(
                        'name'    => 'step8_9_internet',
                        'label'   => '¿Cuentan con servicio de internet?:',
                        'values'  => Step8Form::$yesno,
                        'errors'  => $errors
                        ),
                    'labelled_radios',
                    'Step8Form',
                    'normal'
                    );

                echo Form::easy_group(
                    array(
                        'name'    => 'step8_10_cable',
                        'label'   => '¿Cuentan con servicio de cable o sat&eacute;lite?:',
                        'values'  => Step8Form::$yesno,
                        'errors'  => $errors
                        ),
                    'labelled_radios',
                    'Step8Form',
                    'normal'
                    );
                ?> 
            </div>
            <div class="span11">
                <hr style='border-bottom: 1px solid #E0E0E0'>
            </div>
            <div class = "span12">
                <?
                echo Form::easy_group(
                    array(
                        'name'    => 'step8_11_negocio',
                        'label'   => '¿Cuentan con un negocio propio?:',
                        'values'  => Step8Form::$yesno,
                        'errors'  => $errors,
                        'class'   => 'step8_11_negocio'
                        ),
                    'labelled_radios',
                    'Step8Form',
                    'normal'
                    );

                ?>
            </div>
            <div class = "Negocio" style="display:none">
                <div class = "span6">
                    <?
                    echo Form::easy_group(
                        array(
                            'name'    => 'step8_11_negocio_tipo',
                            'label'   => '¿Qu&eacute; tipo de negocio es?:',
                            'values'  => '',
                            'errors'  => $errors
                            ),
                        'text',
                        'Step8Form',
                        'normal'
                        );

                    echo Form::easy_group(
                        array(
                            'name'    => 'step8_11_negocio_ubicacion',
                            'label'   => '¿D&oacute;nde est&aacute; ubicado?:',
                            'values'  => '',
                            'errors'  => $errors
                            ),
                        'text',
                        'Step8Form',
                        'normal'
                        );

                    echo Form::easy_group(
                        array(
                            'name'    => 'step8_11_negocio_dias_trabajo',
                            'label'   => 'D&iacute;as de trabajo: ',
                            'values'  => '',
                            'errors'  => $errors
                            ),
                        'text',
                        'Step8Form',
                        'normal'
                        );

                    echo Form::easy_group(
                        array(
                            'name'    => 'step8_11_negocio_dias_descanso',
                            'label'   => 'D&iacute;as de descanso: ',
                            'values'  => '',
                            'errors'  => $errors
                            ),
                        'text',
                        'Step8Form',
                        'normal'
                        );

                    ?>
                </div>
                <div class = "span6">
                    <?

                    echo Form::easy_group(
                        array(
                            'name'    => 'step8_11_negocio_horario',
                            'label'   => 'Horario: ',
                            'values'  => '',
                            'errors'  => $errors
                            ),
                        'text',
                        'Step8Form',
                        'normal'
                        );

                    echo Form::easy_group(
                        array(
                            'name'    => 'step8_11_valor_approx',
                            'label'   => 'Valor approx. de la mercanc&iacute;a: ',
                            'values'  => '',
                            'errors'  => $errors
                            ),
                        'text',
                        'Step8Form',
                        'normal'
                        );

                    echo Form::easy_group(
                        array(
                            'name'    => 'step8_11_renta_mensual',
                            'label'   => 'Renta mensual del equipo: ',
                            'values'  => '',
                            'errors'  => $errors
                            ),
                        'text',
                        'Step8Form',
                        'normal'
                        );

                    echo Form::easy_group(
                        array(
                            'name'    => 'step8_11_ingreso_diario',
                            'label'   => 'Ingresos diarios netos: ',
                            'values'  => '',
                            'errors'  => $errors
                            ),
                        'text',
                        'Step8Form',
                        'normal'
                        );

                    ?>    
                </div>
                <div class="span11">
                    <hr style='border-bottom: 1px solid #E0E0E0'>
                </div>
                <div class="span5">
                <?
                    echo "Si se cuenta con un local comercial, presentar:
                    <br>
                    *Copia de declaraci&acute;n anual
                    <br>
                    *Copia de declaraciones de pagos provisionales
                    <br>
                    *Certificado de ingresos, expedidos por un CP con c&eacute;dula fiscal
                    <br>
                    *Copia de contrato de arrendamiento, o predial
                    <br>
                    *Copia de recibo de arrendamiento
                    <br>
                    *Copia de servicios (luz, gas, agua, etc.)"
                    ?>
                </div>   
                <div class="span11">
                    <hr style='border-bottom: 1px solid #E0E0E0'>
                </div> 
            </div>
        </div>
    </fieldset>
    <div class="row">
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Siguiente:</button>
           {{ Buttons::link('Atr&aacute;s', URL::to_action('estudio@step_7')) }}
        </div>
    </div>
{{ Form::close() }}
@endsection
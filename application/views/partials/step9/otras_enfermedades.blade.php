<div class="span5">
                <?
                    echo Form::easy_group(
                        array(
                            'name'    => 'step9_3_nombre',
                            'label'   => 'Nombre:',
                            'errors'  => $errors,
                            ),
                        'text',
                        'Step9Form',
                        'normal'
                        );

                    echo Form::easy_group(
                        array(
                            'name'    => 'step9_3_parentesco',
                            'label'   => 'Parentesco:',
                            'errors'  => $errors,
                            ),
                        'text',
                        'Step9Form',
                        'normal'
                        );

                    echo Form::easy_group(
                        array(
                            'name'    => 'step9_3_tipo_enfermedad',
                            'label'   => 'Tipo de enfermedad:',
                            'values'  => '',
                            'errors'  => $errors,
                            'class'   => '',
                            'block'   => '',
                            'prepend' => ''
                            ),
                        'text',
                        'Step9Form',
                        'normal'
                        );

                    echo Form::easy_group(
                        array(
                            'name'    => 'step9_3_tiempo_padecer',
                            'label'   => 'Tiempo de padecerla:',
                            'values'  => '',
                            'errors'  => $errors,
                            'class'   => '',
                            'block'   => '',
                            'prepend' => ''
                            ),
                        'text',
                        'Step9Form',
                        'normal'
                        );
                 ?>
            </div>
            <div class="span5">
                <?
                    echo Form::easy_group(
                        array(
                            'name'    => 'step9_3_costo_mensual',
                            'label'   => 'Costo mensual aproximado del tratamiento:',
                            'values'  => '',
                            'errors'  => $errors,
                            'class'   => '',
                            'block'   => '',
                            'prepend' => '$'
                            ),
                        'prepend',
                        'Step9Form',
                        'normal'
                        );

                    echo Form::easy_group(
                        array(
                            'name'    => 'step9_3_observaciones',
                            'label'   => 'Observaciones:',
                            'values'  => '',
                            'errors'  => $errors,
                            'class'   => '',
                            'block'   => '',
                            'prepend' => ''
                            ),
                        'textarea',
                        'Step9Form',
                        'normal'
                        );
                ?>
            </div>
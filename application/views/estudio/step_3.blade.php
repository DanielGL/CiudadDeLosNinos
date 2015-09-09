@layout('layouts/main')

@section('extra-css')
<style type="text/css">
.clone {
    display: none;
}

</style>
@endsection

@section('extra-js')
<script type="text/javascript">
$('select[name="step3_1_numero_hermanos"]').on('change', function() {
    var obj = $(this);
    var toClone = $($(".clone")[0]);
    for(i = $(".clone").length-1; i < obj.val(); i++) {
        toClone.clone().appendTo('#escolaridad_div').show();
    }
    for(i = $(".clone").length-1; i > obj.val(); i--) {
        $($(".clone").get($(".clone").length-1)).remove();
    }
})

    $('.step3_2_trabaja_actualmente input[type="radio"]').on('change', function() {
        $(".trabajaact").hide();

    })
    $('.step3_2_trabaja_actualmente input[type="radio"][value="1"]').on('change', function() {
        var obj = $(this);
            $(".trabajaact").show();

    })

</script>
@endsection
@section('main-content')
{{ Form::horizontal_open() }}
<div class="row well" id='escolaridad_div'>
    <fieldset>
        <legend>Escolaridad</legend>
        <div class="span12">
            <?
                echo Form::easy_group(
                    array(
                        'name'    => 'step3_1_escolaridad_padre',
                        'label'   => 'Escolaridad padre:',
                        'values'  => Step3Form::$step3_1_escolaridad,
                        'errors'  => $errors,
                        'class'   => '',
                        'block'   => '&Uacute;ltimo nivel de estudios terminado por el padre.',
                        'prepend' => ''
                        ),
                    'select',
                    'Step3Form',
                    'normal'
                    );

                echo Form::easy_group(
                    array(
                        'name'    => 'step3_1_grado_padre',
                        'label'   => '&Uacute;ltimo grado cursado:',
                        'errors'  => $errors,
                        'class'   => '',
                        'block'   => '&Uacute;ltimo grado aprobado por el padre.',
                        'prepend' => ''
                        ),
                    'text',
                    'Step3Form',
                    'normal'
                    );

                echo Form::easy_group(
                    array(
                        'name'    => 'step3_1_grado_padre_nivel',
                        'label'   => 'Escolaridad padre:',
                        'values'  => Step3Form::$step3_1_escolaridad,
                        'errors'  => $errors,
                        'class'   => '',
                        'block'   => 'Nivel en el que se curso el &uacute;ltimo grado aprobado.',
                        'prepend' => ''
                        ),
                    'select',
                    'Step3Form',
                    'normal'
                    );

                echo Form::easy_group(
                    array(
                        'name'    => 'step3_1_escolaridad_madre',
                        'label'   => 'Escolaridad madre:',
                        'values'  => Step3Form::$step3_1_escolaridad,
                        'errors'  => $errors,
                        'class'   => '',
                        'block'   => '&Uacute;ltimo nivel de estudios terminado por la madre.',
                        'prepend' => ''
                        ),
                    'select',
                    'Step3Form',
                    'normal'
                    );

                echo Form::easy_group(
                    array(
                        'name'    => 'step3_1_grado_madre',
                        'label'   => '&Uacute;ltimo grado cursado:',
                        'errors'  => $errors,
                        'class'   => '',
                        'block'   => '&Uacute;ltimo grado aprobado por la madre.',
                        'prepend' => ''
                        ),
                    'text',
                    'Step3Form',
                    'normal'
                    );

                echo Form::easy_group(
                    array(
                        'name'    => 'step3_1_grado_madre_nivel',
                        'label'   => 'Escolaridad madre',
                        'values'  => Step3Form::$step3_1_escolaridad,
                        'errors'  => $errors,
                        'class'   => '',
                        'block'   => 'Nivel en el que se curso el &uacute;ltimo grado aprobado.',
                        'prepend' => ''
                        ),
                    'select',
                    'Step3Form',
                    'normal'
                    );

                echo Form::easy_group(
                    array(
                        'name'    => 'step3_1_numero_hermanos',
                        'label'   => 'Cu&aacute;ntos hermanos tiene?',
                        'values'  => Step3Form::$step3_1_numero_hermanos,
                        'errors'  => $errors,
                        'class'   => '',
                        'block'   => 'Nivel en el que se curso el &uacute;ltimo grado aprobado.',
                        'prepend' => ''
                        ),
                    'select',
                    'Step3Form',
                    'normal'
                    );
            ?>
        </div>
        <div class = "row clone">
            <div class = "span5">
                <?
                    echo Form::control_group(
                        Form::label('step3_1_nombre_hermanos[]', 'Nombre: '),
                        Form::text('step3_1_nombre_hermanos[]'), Input::old('step3_1_nombre_hermanos[]', '')
                        );

                    echo Form::control_group(
                        Form::label('step3_1_edad_hermanos[]', 'Edad: '),
                        Form::text('step3_1_edad_hermanos[]'), Input::old('step3_1_edad_hermanos[]', '')
                        );
                ?>
            </div>
            <div class = "span5">
                <?
                    echo Form::control_group(
                        Form::label('step3_1_nivel_hermanos[]', 'Nivel de escolaridad: '),
                        Form::text('step3_1_nivel_hermanos[]'), Input::old('step3_1_nivel_hermanos[]', '')
                        );

                    echo Form::control_group(
                        Form::label('step3_1_grado_hermanos[]', 'Grado: '),
                        Form::text('step3_1_grado_hermanos[]'), Input::old('step3_1_grado_hermanos[]', '')
                        );
                ?>
            </div>
            <hr class="span12">
        </div>
    </fieldset>
</div>
<div class = "row well">
    <fieldset>
        <legend>Dependencia Econ&oacute;mica</legend>
            <div class="span5">
                <?
                    echo Form::control_group(
                        Form::label('step3_2_dependencia_economica', 'Dependencia Econ&oacute;mica:'),
                        Form::select('step3_2_dependencia_economica', Step3Form::$step3_2_dependencia_economica, Step3Form::old('step3_2_dependencia_economica', '-1')),
                        ($errors->has('step3_2_dependencia_economica')? 'error' : (Step3Form::old('step3_2_dependencia_economica')? 'success' : '' )),
                        ($errors->has('step3_2_dependencia_economica')? Form::block_help($errors->first('step3_2_dependencia_economica')) : '' )
                        .Form::block_help('De qui&eacute;n depende econ&oacute;micamente la familia?')
                        );

                    echo Form::control_group(
                        Form::label('step3_2_nombre','Nombre:'),
                        Form::text('step3_2_nombre',Step3Form::old('step3_2_nombre'),array('style'=>'width:125px')),
                        ($errors->has('step3_2_nombre')? 'error' : (Step3Form::old('step3_2_nombre')? 'success' : ''))

                        );

                    echo Form::control_group(
                        Form::label('step3_2_edad','Edad:'),
                        Form::text('step3_2_edad',Step3Form::old('step3_2_edad'),array('style'=>'width:40px')),
                        ($errors->has('step3_2_edad')? 'error' : (Step3Form::old('step3_2_edad')? 'success' : ''))

                        );

                    echo Form::easy_group(
                        array(
                            'name'    => 'step3_2_trabaja_actualmente',
                            'label'   => '¿Trabaja Actualmente?:',
                            'values'  => Step3Form::$yesno,
                            'errors'  => $errors,
                            'class'   => 'step3_2_trabaja_actualmente'

                            ),
                        'labelled_radios',
                        'Step3Form',
                        'normal'
                        );
                ?>
            </div>
            <div class = "span5">
                <div class="trabajaact" style="display:none">
                <?
                    echo Form::easy_group(
                        array(
                            'name'    => 'step3_2_donde_trabaja',
                            'label'   => '¿D&oacute;nde trabaja?',
                            'values'  => '',
                            'errors'  => $errors,
                            'class'   => '',
                            'block'   => '',
                            'prepend' => ''
                            ),
                        'text',
                        'Step3Form',
                        'normal'
                        );
                    echo Form::easy_group(
                        array(
                            'name'    => 'step3_2_area_trabajo',
                            'label'   => '¿Cu&aacute;l es su area de trabajo?',
                            'values'  => '',
                            'errors'  => $errors,
                            'class'   => '',
                            'block'   => '',
                            'prepend' => ''
                            ),
                        'text',
                        'Step3Form',
                        'normal'
                        );
                    echo Form::easy_group(
                        array(
                            'name'    => 'step3_2_puesto',
                            'label'   => '¿Cu&aacute;l es su puesto?',
                            'values'  => '',
                            'errors'  => $errors,
                            'class'   => '',
                            'block'   => '',
                            'prepend' => ''
                            ),
                        'text',
                        'Step3Form',
                        'normal'
                        );
                    echo Form::easy_group(
                        array(
                            'name'    => 'step3_2_descripcion',
                            'label'   => '¿Cu&aacute;l es su descripci&oacute;n?',
                            'values'  => '',
                            'errors'  => $errors,
                            'class'   => '',
                            'block'   => '',
                            'prepend' => ''
                            ),
                        'text',
                        'Step3Form',
                        'normal'
                        );
                    echo Form::easy_group(
                        array(
                            'name'    => 'step3_2_salario_mensual',
                            'label'   => '¿Cu&aacute;l es su salario mensual?',
                            'values'  => '',
                            'errors'  => $errors,
                            'class'   => '',
                            'block'   => '',
                            'prepend' => ''
                            ),
                        'text',
                        'Step3Form',
                        'normal'
                        );
                    echo Form::easy_group(
                        array(
                            'name'    => 'step3_2_antiguedad',
                            'label'   => '¿Cu&aacute;l es su antiguedad?',
                            'values'  => '',
                            'errors'  => $errors,
                            'class'   => '',
                            'block'   => '',
                            'prepend' => ''
                            ),
                        'text',
                        'Step3Form',
                        'normal'
                        );
                ?>
                </div>
            </div>
    </fieldset>
</div>
<div class="row">
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Siguiente:</button>
       {{ Buttons::link('Atr&aacute;s', URL::to_action('estudio@step_7')) }}
    </div>
</div>
{{ Form::close() }}
@endsection
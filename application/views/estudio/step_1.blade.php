@layout('layouts/main')

@section('extra-js')
<script type="text/javascript">
    $('.stepo_papas_estado_civil input[type="radio"]').on('change', function() {
        $(".estadocivil").hide();

    })
    $('.stepo_papas_estado_civil input[type="radio"][value="1"]').on('change', function() {
        var obj = $(this);
        console.log("entre");
            $(".estadocivil").show();

    })

    $('.stepo_tipo_escuela_proc input[type="radio"]').on('change', function() {
        $(".mensualidad").hide();

    })
    $('.stepo_tipo_escuela_proc input[type="radio"][value="2"]').on('change', function() {
        var obj = $(this);
        console.log("entre");
            $(".mensualidad").show();

    })
    $('.stepo_repetido_grado input[type="radio"]').on('change', function() {
        $(".repetido").hide();

    })
    $('.stepo_repetido_grado input[type="radio"][value="1"]').on('change', function() {
        var obj = $(this);
        console.log("entre");
            $(".repetido").show();

    })
    $('.stepo_trabaja input[type="radio"]').on('change', function() {
        $(".alumnotrabaja").hide();

    })
    $('.stepo_trabaja input[type="radio"][value="1"]').on('change', function() {
        var obj = $(this);
        console.log("entre");
            $(".alumnotrabaja").show();

    })
//
    $('.stepo_vive_padres input[type="radio"]').on('change', function() {
        $(".vivecon").hide();

    })
    $('.stepo_vive_padres input[type="radio"][value="2"]').on('change', function() {
        var obj = $(this);
        console.log("entre");
            $(".vivecon").show();

    })


</script>

@endsection
@section('main-content')

{{ Form::horizontal_open() }}
    <div class="row well">
        <fieldset>
        <legend>Llenado por el centro educativo</legend>
        <div class="span5">

                <?
                    echo Form::easy_group(
                        array(
                            'name'    => 'stepo_clave_estudio',
                            'label'   => 'Clave:',
                            'values'  => '',
                            'errors'  => $errors,
                            'class'   => '',
                            'block'   => '',
                            'prepend' => ''
                            ),
                        'text',
                        'Step1Form',
                        'normal'
                        );
                   echo Form::control_group(
                        Form::label('stepo_fecha_solicitud','Fecha de solicitud:'),
                        Form::date('stepo_fecha_solicitud', Step1Form::old('stepo_fecha_solicitud')),
                        ($errors->has('stepo_fecha_solicitud')? 'error' : (Step1Form::old('stepo_fecha_solicitud')? 'success' : '')), Form::block_help('Seleccione la fecha')
                    );
                   echo Form::control_group(
                        Form::label('stepo_fecha_ingreso_familia','Fecha de ingreso de la familia:'),
                        Form::date('stepo_fecha_ingreso_familia', Step1Form::old('stepo_fecha_ingreso_familia')),
                        ($errors->has('stepo_fecha_ingreso_familia')? 'error' : (Step1Form::old('stepo_fecha_ingreso_familia')? 'success' : ''))
                    );

                ?>

        </div>
        </fieldset>
    </div>
    <div class="row well">
        <div class="span5">
            <fieldset>
                <legend>Datos Generales del Alumno</legend>
                <?
                echo Form::control_group(
                        Form::label('stepo_nombre_completo','Nombre del Alumno(a):'),
                        Form::text('stepo_nombre_completo', Step1Form::old('stepo_nombre_completo')),
                        $errors->has('stepo_nombre_completo')? 'error' : (Step1Form::old('stepo_nombre_completo')
                            ? 'success' : '')
                    );
                echo Form::control_group(
                        Form::label('stepo_edad','Edad:'),
                        Form::text('stepo_edad', Step1Form::old('stepo_edad')),
                        $errors->has('stepo_edad')? 'error' : (Step1Form::old('stepo_edad')
                            ? 'success' : '')
                    );

                echo Form::easy_group(
                        array(
                            'name'    => 'stepo_sexo',
                            'label'   => 'Sexo:',
                            'values'  => Step1Form::$depende_de,
                            'errors'  => $errors
                            ),
                        'labelled_radios',
                        'Step1Form',
                        'normal'
                );

                        echo Form::control_group(
                        Form::label('stepo_curp','CURP:'),
                        Form::text('stepo_curp', Step1Form::old('stepo_curp')),($errors->has('stepo_curp')? 'error' : (Step1Form::old('stepo_curp')? 'success' : '')),
                            Form::block_help('Ingrese curp valido')
                    );
                        echo Form::control_group(
                        Form::label('stepo_dob','Fecha de Nacimiento:'),
                        Form::date('stepo_dob', Step1Form::old('stepo_dob')),
                        ($errors->has('stepo_dob')? 'error' : (Step1Form::old('stepo_dob')? 'success' : ''))

                    );
                        echo Form::control_group(
                        Form::label('stepo_lugardeNac','Lugar de Nacimiento:'),
                        Form::text('stepo_lugardeNac', Step1Form::old('stepo_lugardeNac')),
                        $errors->has('stepo_lugardeNac')? 'error' : (Step1Form::old('stepo_lugardeNac')?'success' :'')

                    );

                echo Form::easy_group(
                        array(
                            'name'    => 'stepo_trabaja',
                            'label'   => '¿El alumno trabaja?',
                            'values'  => Step1Form::$trabajo_de,
                            'errors'  => $errors,
                            'class'   => 'stepo_trabaja'
                            ),
                        'labelled_radios',
                        'Step1Form',
                        'normal'
                );

                       ?>
                 <div class="alumnotrabaja" {{ (Step1Form::old('stepo_trabaja') == 1)? '' : 'style="display:none"' }}>
                <? echo Form::control_group(
                        Form::label('stepo_lugartrabaja','Lugar de trabajo'),
                        Form:: text('stepo_lugartrabaja',Step1Form::old('stepo_lugartrabaja')),
                        $errors->has('stepo_lugartrabaja')? 'error' : (Step1Form::old('stepo_lugartrabaja')
                            ? 'success' : '')

                        );
                ?>
                </div>
                <?
                    echo Form::control_group(
                        Form::label('stepo_oficio','Oficio:'),
                        Form:: text('stepo_oficio',Step1Form::old('stepo_oficio')),
                        $errors->has('stepo_oficio')? 'error' : (Step1Form::old('stepo_oficio')
                            ? 'success' : '')
                        );
                ?>

            </fieldset>
        </div>
        <div class="span5 offset1">
            <fieldset>
                <legend>Informaci&oacute;n Acad&eacute;mica</legend>
                <?

                echo Form::easy_group(
                        array(
                            'name'    => 'step1_niveles',
                            'label'   => 'Nivel al que desea ingresar:',
                            'values'  => Step1Form::$step1_niveles,
                            'errors'  => $errors
                            ),
                        'labelled_radios',
                        'Step1Form',
                        'normal'
                );

                echo Form::control_group(
                    Form::label('step1_grado','Grado'),
                    Form::text('step1_grado',Step1Form::old('step1_grado')),
                    $errors->has('step1_grado')? 'error' : (Step1Form::old('step1_grado') ? 'success' : '')
                    );



                echo Form::easy_group(
                        array(
                            'name'    => 'stepo_repetido_grado',
                            'label'   => '¿Ha repetido alg&uacute;n grado escolar?',
                            'values'  => Step1Form::$repetido_de,
                            'errors'  => $errors,
                            'class'   => 'stepo_repetido_grado'
                            ),
                        'labelled_radios',
                        'Step1Form',
                        'normal'
                );
                ?>
                <div class="repetido" {{ (Step1Form::old('stepo_repetido_grado') == 1)? '' : 'style="display:none"' }}>
                <?
                        echo Form::control_group(
                        Form::label('stepo_grado','Especifique el grado'),
                        Form:: text('stepo_grado',Step1Form::old('stepo_grado')),
                        $errors->has('stepo_grado')? 'error' : (Step1Form::old('stepo_grado')
                            ? 'success' : '')
                        );
                ?>
                </diV>
                <br>
                <?
                        echo Form::control_group(
                        Form::label('stepo_escu_proced','Escuela de Procedencia:'),
                        Form:: text('stepo_escu_proced',Step1Form::old('stepo_escu_proced')),
                        $errors->has('stepo_escu_proced')? 'error' : (Step1Form::old('stepo_escu_proced')
                            ? 'success' : '')
                        );


                echo Form::easy_group(
                        array(
                            'name'    => 'stepo_tipo_escuela_proc',
                            'label'   => 'Tipo de escuela de procedencia:',
                            'values'  => Step1Form::$tipoescuela_de,
                            'errors'  => $errors,
                            'class'   => 'stepo_tipo_escuela_proc'
                            ),
                        'labelled_radios',
                        'Step1Form',
                        'normal'
                );

                ?>
                <div class="mensualidad" {{ (Step1Form::old('stepo_tipo_escuela_proc') == 2)? '' : 'style="display:none"' }}>
                <?
                    echo Form::easy_group(
                        array(
                            'name'    => 'stepo_mensualidad',
                            'label'   => 'Mencione la mensualidad pagada:',
                            'errors'  => $errors,
                            'prepend' => '$'
                        ),
                        'prepend',
                        'Step1Form',
                        'mini'
                    );



                ?>
            </div>


                <?
                        echo Form::control_group(
                        Form::label('stepo_promedio_grado_anterior','Mencione el promedio general del grado anterior:'),
                        Form:: text('stepo_promedio_grado_anterior',Step1Form::old('stepo_promedio_grado_anterior')),
                        $errors->has('stepo_promedio_grado_anterior')? 'error' : (Step1Form::old('stepo_promedio_grado_anterior')
                            ? 'success' : '')
                        );
                        ;
                ?>
               </fieldset>
        </div>
    </div>
 <div class="row well">
        <fieldset>
         <legend>Situaci&oacute;n Familiar</legend>
        <div class="span5">

            <?
                echo Form::easy_group(
                        array(
                            'name'    => 'stepo_papas_estado_civil',
                            'label'   => 'Los papas del alumno se encuentran:',
                            'values'  => Step1Form::$stepo_papawhs_de,
                            'errors'  => $errors,
                            'class'   => 'stepo_papas_estado_civil'
                            ),
                        'labelled_radios',
                        'Step1Form',
                        'normal'
                );
                ?>
                <div class="estadocivil" {{ (Step1Form::old('stepo_papas_estado_civil') == 1)? '' : 'style="display:none"' }}>
                <?
                echo Form::easy_group(
                        array(
                            'name'    => 'stepo_se_casaronpor',
                            'label'   => 'Se casaron por:',
                            'values'  => Step1Form::$stepo_papawhs_por,
                            'errors'  => $errors

                            ),
                        'labelled_radios',
                        'Step1Form'
                );

                ?>
                </div>
                <?
                        echo Form::control_group(
                        Form::label('stepo_fecha_casaron','Fecha de matrimonio:'),
                        Form::date('stepo_fecha_casaron',Step1Form::old('stepo_fecha_casaron')),
                        $errors->has('stepo_fecha_casaron')? 'error' : (Step1Form::old('stepo_fecha_casaron')
                            ? 'success' : '')
                        );
                        echo Form::control_group(
                        Form::label('stepo_edad_caso_el','Edad de cuando se  cas&oacute; &eacute;l:'),
                        Form:: text('stepo_edad_caso_el',Step1Form::old('stepo_edad_caso_el')),
                        $errors->has('stepo_edad_caso_el')? 'error' : (Step1Form::old('stepo_edad_caso_el')
                            ? 'success' : '')

                        );
                        echo Form::control_group(
                        Form::label('stepo_edad_caso_ella','Edad de cuando se cas&oacute;  ella:'),
                        Form:: text('stepo_edad_caso_ella',Step1Form::old('stepo_edad_caso_ella')),
                        $errors->has('stepo_edad_caso_ella')? 'error' : (Step1Form::old('stepo_edad_caso_ella')
                            ? 'success' : '')
                        );
                        echo Form::control_group(
                        Form::label('stepo_which_iglesia','Si est&aacute;n casados por la iglesia, indique por cual:'),
                        Form:: text('stepo_which_iglesia',Step1Form::old('stepo_which_iglesia')),
                        $errors->has('stepo_which_iglesia')? 'error' : (Step1Form::old('stepo_which_iglesia')
                            ? 'success' : '')
                        );
                        echo Form::control_group(
                        Form::label('stepo_total_hijos','Indique el total de hijos (incluyendo el aspirante):'),
                        Form:: text('stepo_total_hijos',Step1Form::old('stepo_total_hijos')),
                        $errors->has('stepo_total_hijos')? 'error' : (Step1Form::old('stepo_total_hijos')
                            ? 'success' : '')
                        );
                        ?>
                    </div>

                    <div class="span5 offset1">
                <?

                    echo Form::easy_group(
                        array(
                            'name'    => 'stepo_vive_padres',
                            'label'   => '¿El alumno vive con sus padres?',
                            'values'  => Step1Form::$viveconpadres_de,
                            'errors'  => $errors,
                            'class'   => 'stepo_vive_padres'

                            ),
                        'labelled_radios',
                        'Step1Form',
                        'normal'
                );

                    ?>
                 <div class="vivecon" {{ (Step1Form::old('stepo_vive_padres') == 2)? '' : 'style="display:none"' }}>
                    <?

                     echo Form::easy_group(
                        array(
                            'name'    => 'stepo_vive_mp',
                            'label'   => 'vive con:',
                            'values'  => Step1Form::$mp_de,
                            'errors'  => $errors,

                            ),
                        'labelled_radios',
                        'Step1Form',
                        'normal'
                );
                    ?>
                      <?
                      echo Form::control_group(
                        Form::label('stepo_calle','Calle:'),
                        Form::text('stepo_calle', Step1Form::old('stepo_calle')),
                        $errors->has('stepo_calle')? 'error' : (Step1Form::old('stepo_calle')
                            ? 'success' : '')
                    );
                                            echo Form::control_group(
                        Form::label('stepo_numero','Num:'),
                        Form::text('stepo_numero', Step1Form::old('stepo_numero')),
                        $errors->has('stepo_numero')? 'error' : (Step1Form::old('stepo_numero')
                            ? 'success' : '')
                    );
                        echo Form::control_group(
                        Form::label('stepo_entre_calles','Entre calles:'),
                        Form::text('stepo_entre_calles', Step1Form::old('stepo_entre_calles')),
                        $errors->has('stepo_entre_calles')? 'error' : (Step1Form::old('stepo_entre_calles')
                            ? 'success' : '')
                    );
                        echo Form::control_group(
                        Form::label('stepo_colonia','Colonia:'),
                        Form::text('stepo_colonia', Step1Form::old('stepo_colonia')),
                        $errors->has('stepo_colonia')? 'error' : (Step1Form::old('stepo_colonia')
                            ? 'success' : '')
                    );
                        echo Form::control_group(
                        Form::label('stepo_cp','CP:'),
                        Form::text('stepo_cp', Step1Form::old('stepo_cp')),
                        $errors->has('stepo_cp')? 'error' : (Step1Form::old('stepo_cp')
                            ? 'success' : '')
                    );
                        echo Form::control_group(
                        Form::label('stepo_ciudad','Ciudad:'),
                        Form::text('stepo_ciudad', Step1Form::old('stepo_ciudad')),
                        $errors->has('stepo_ciudad')? 'error' : (Step1Form::old('stepo_ciudad')
                            ? 'success' : '')
                    );
                        echo Form::control_group(
                        Form::label('stepo_estado','Estado:'),
                        Form::text('stepo_estado', Step1Form::old('stepo_estado')),
                        $errors->has('stepo_estado')? 'error' : (Step1Form::old('stepo_estado')
                            ? 'success' : '')
                    );

                      ?>
                  </div>
            </div>
        </fieldset>

        </div>

    <div class="row">
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Siguiente:</button>
            {{ Buttons::link('Cancelar registro', URL::to_action('menu@display')) }}
        </div>
    </div>
</form>
@endsection
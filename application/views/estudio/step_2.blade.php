@layout('layouts/main')

@section('extra-css')
<style type="text/css">

</style>
@endsection

@section('extra-js')
<script type="text/javascript">
$('.servicio_medico_alumno input[type="checkbox"][value="4"]').on('change', function() {
    var obj = $(this);
    if(obj.is(':checked')){
        $('.something').show(function() {
            $(this).find('input').get(0).focus();
        });
    } else if (!obj.is(':checked')) {
        $('.something').hide();
    }
})
$('.servicio_medico_alumno input[type="checkbox"][value="3"]').on('change', function() {
    var obj = $(this);
    if(obj.is(':checked')){
        $('.other').show(function() {
            $(this).find('input').get(0).focus();
        });
    } else if (!obj.is(':checked')) {
        $('.other').hide();
    }
})

$('.enfermedades_papa input[type="checkbox"][value="8"]').on('change', function() {
    var obj = $(this);
    if(obj.is(':checked')){
        $('.enfermedadp').show(function() {
            $(this).find('input').get(0).focus();
        });
    } else if (!obj.is(':checked')) {
        $('.enfermedadp').hide();
    }
})
$('.enfermedades_mama input[type="checkbox"][value="8"]').on('change', function() {
    var obj = $(this);
    if(obj.is(':checked')){
        $('.enfermedadm').show(function() {
            $(this).find('input').get(0).focus();
        });
    } else if (!obj.is(':checked')) {
        $('.enfermedadm').hide();
    }
})
$('.enfermedades_alumno input[type="checkbox"][value="8"]').on('change', function() {
    var obj = $(this);
    if(obj.is(':checked')){
        $('.enfermedada').show(function() {
            $(this).find('input').get(0).focus();
        });
    } else if (!obj.is(':checked')) {
        $('.enfermedada').hide();
    }
})

</script>
@endsection

@section('main-content')
{{ Form::horizontal_open() }}
    <div class="row well">
        <fieldset>
            <legend>Domicilio Del Alumno</legend>
            <div class="span5">

                <?
                echo Form::control_group(
                    Form::label('dda_calle','Calle:'),
                    Form::text('dda_calle',Step2Form::old('dda_calle')),
                    ($errors->has('dda_calle')? 'error' : (Step2Form::old('dda_calle')? 'success' : '')),
                    ($errors->has('dda_calle')? Form::block_help($errors->first('dda_calle')) : '').Form::block_help('')
                );
                echo Form::control_group(
                    Form::label('dda_no', 'No.'),
                    Form::text('dda_no',Step2Form::old('dda_no')),
                    ($errors->has('dda_no')? 'error' : (Step2Form::old('dda_no')? 'success' : '')),
                    ($errors->has('dda_no')? Form::block_help($errors->first('dda_no')) : '').Form::block_help('')
                );
                echo Form::control_group(
                    Form::label('dda_colonia', 'Colonia:'),
                    Form::text('dda_colonia',Step2Form::old('dda_colonia')),
                    ($errors->has('dda_colonia')? 'error' : (Step2Form::old('dda_colonia')? 'success' : '')),
                    ($errors->has('dda_colonia')? Form::block_help($errors->first('dda_colonia')) : '').Form::block_help('')
                );
                echo Form::control_group(
                    Form::label('dda_entrecalles', 'Calles aleda&ntilde;as:'),
                    Form::text('dda_entrecalles',Step2Form::old('dda_entrecalles')),
                    ($errors->has('dda_entrecalles')? 'error' : (Step2Form::old('dda_entrecalles')? 'success' : '')),
                    ($errors->has('dda_entrecalles')? Form::block_help($errors->first('dda_entrecalles')) : '').Form::block_help('Ingresa las entre calles del domicilio')
                );
                echo Form::control_group(
                    Form::label('dda_cp', 'C&oacute;digo postal:'),
                    Form::text('dda_cp',Step2Form::old('dda_cp')),
                    ($errors->has('dda_cp')? 'error' : (Step2Form::old('dda_cp')? 'success' : '')),
                    ($errors->has('dda_cp')? Form::block_help($errors->first('dda_cp')) : '').Form::block_help('')
                );
                ?>
            </div>
            <div class="span5">
                <?
                echo Form::control_group(
                    Form::label('dda_ciudad', 'Ciudad:'),
                    Form::text('dda_ciudad',Step2Form::old('dda_ciudad')),
                    ($errors->has('dda_ciudad')? 'error' : (Step2Form::old('dda_ciudad')? 'success' : '')),
                    ($errors->has('dda_ciudad')? Form::block_help($errors->first('dda_ciudad')) : '').Form::block_help('')
                );
                echo Form::control_group(
                    Form::label('dda_estado', 'Estado:'),
                    Form::text('dda_estado',Step2Form::old('dda_estado')),
                    ($errors->has('dda_estado')? 'error' : (Step2Form::old('dda_estado')? 'success' : '')),
                    ($errors->has('dda_estado')? Form::block_help($errors->first('dda_estado')) : '').Form::block_help('')
                );
                echo Form::control_group(
                    Form::label('dda_telefono', 'Telefono:'),
                    Form::text('dda_telefono',Step2Form::old('dda_telefono')),
                    ($errors->has('dda_telefono')? 'error' : (Step2Form::old('dda_telefono')? 'success' : '')),
                    ($errors->has('dda_telefono')? Form::block_help($errors->first('dda_telefono')) : '').Form::block_help('')
                );
                echo Form::control_group(
                    Form::label('dda_celular', 'Celular:'),
                    Form::text('dda_celular',Step2Form::old('dda_ciudad')),
                    ($errors->has('dda_celular')? 'error' : (Step2Form::old('dda_celular')? 'success' : '')),
                    ($errors->has('dda_celular')? Form::block_help($errors->first('dda_celular')) : '').Form::block_help('')
                );
                echo Form::control_group(
                    Form::label('dda_email', 'Email:'),
                    Form::text('dda_email',Step2Form::old('dda_email')),
                    ($errors->has('dda_email')? 'error' : (Step2Form::old('dda_email')? 'success' : '')),
                    ($errors->has('dda_email')? Form::block_help($errors->first('dda_email')) : '').Form::block_help('Ingresa el email en el formato ejemplo@ciudaddelosninos.com')
                );
                ?>
            </div>
        </fieldset>
        <hr style='border-bottom: 1px solid #E0E0E0'>
    </div>
    <div class="row well">
        <fieldset>
            <legend>Salud</legend>
            <div class="span5">
                <?
                    echo Form::easy_group(
                        array(
                            'name'    => 'enfermedades_papa',
                            'label'   => 'Problemas de salud del padre:',
                            'values'  => Step2Form::$salud_enfermedades,
                            'errors'  => $errors,
                            'class'   => 'enfermedades_papa',


                            ),
                        'labelled_checkboxes',
                        'Step2Form',
                        'normal'
                        );
                ?>

                <div class="enfermedadp" style="display:none">
                 <?
                    echo Form::control_group(
                    Form::label('enfermedades_otrosp', 'Especifique:'),
                    Form::text('enfermedades_otrosp',Step2Form::old('enfermedades_otrosp')),
                    'enfermedades_otrosp'
                    );
                ?>

                </div>
                <?
                    echo Form::easy_group(
                        array(
                            'name'    => 'enfermedades_mama',
                            'label'   => 'Problemas de salud de la madre:',
                            'values'  => Step2Form::$salud_enfermedades,
                            'errors'  => $errors,
                            'class'   => 'enfermedades_mama',


                            ),
                        'labelled_checkboxes',
                        'Step2Form',
                        'normal'
                        );
                ?>
                <div class="enfermedadm" style="display:none">
                <?
                    echo Form::control_group(
                    Form::label('enfermedades_otrosm', 'Especifique:'),
                    Form::text('enfermedades_otrosm',Step2Form::old('enfermedades_otrosm')),
                    'enfermedades_otrosm'
                    );
                ?>
                </div>
            </div>
            <div class="span5">
                <?
                    echo Form::easy_group(
                        array(
                            'name'    => 'enfermedades_alumno',
                            'label'   => 'Problemas de salud del alumno:',
                            'values'  => Step2Form::$salud_enfermedades,
                            'errors'  => $errors,
                            'class'   => 'enfermedades_alumno',


                            ),
                        'labelled_checkboxes',
                        'Step2Form',
                        'normal'
                        );
                ?>
                <div class="enfermedada" style="display:none">
                <?
                    echo Form::control_group(
                    Form::label('enfermedades_otrosa', 'Especifique:'),
                    Form::text('enfermedades_otrosa',Step2Form::old('enfermedades_otrosa')),
                    'enfermedades_otrosa'
                    );
                ?>
                </div>

            </div>
        </fieldset>
        <div class="span11">
            <hr style='border-bottom: 1px solid #E0E0E0'>
        </div>
    </div>
    <div class="row well">
        <fieldset>
            <legend>Servicio Medico del Alumno</legend>
            <div class="span5">

                <?

                    echo Form::easy_group(
                        array(
                            'name'    => 'servicio_medico_alumno',
                            'label'   => 'Indique el servicio medico con el que cuenta el alumno',
                            'values'  => Step2Form::$servicio_medico_alumnos,
                            'errors'  => $errors,
                            'class'   => 'servicio_medico_alumno',


                            ),
                        'labelled_checkboxes',
                        'Step2Form',
                        'normal'
                        );
                ?>


                <div class="something" style="display:none">
                    <?
                    echo Form::control_group(
                    Form::label('ningun_servicio', 'Si no cuenta con servicio medico:'),
                    Form::text('ningun_servicio',Step2Form::old('ningun_servicio')),
                    ($errors->has('ningun_servicio')? 'error' : (Step2Form::old('ningun_servicio')? 'success' : '')),
                    ($errors->has('ningun_servicio')? Form::block_help($errors->first('ningun_servicio')) : '').Form::block_help('¿En d&oacute;nde suele consultar?:')
                    );
                    ?>

                </div>
                <div class="other" style="display:none">
                    <?
                    echo Form::control_group(
                    Form::label('otro_servicio', 'Especifique:'),
                    Form::text('otro_servicio',Step2Form::old('otro_servicio')),
                    ($errors->has('otro_servicio')? 'error' : (Step2Form::old('otro_servicio')? 'success' : '')),
                    ($errors->has('otro_servicio')? Form::block_help($errors->first('otro_servicio')) : '').Form::block_help('')
                    );
                    ?>
                </div>
            </div>
        </fieldset>
        <div class="span11">
            <hr style='border-bottom: 1px solid #E0E0E0'>
        </div>
    </div>
        <div class="row well">
        <fieldset>
            <legend>    Religi&oacute;n</legend>
            <div class="span5 offset1">

                <?
                    echo Form::easy_group(
                        array(
                            'name'    => 'religion_alumno',
                            'label'   => 'Indique que religión practica el alumno',
                            'values'  => Step2Form::$religion,
                            'errors'  => $errors,
                            'class'   => 'religion_alumno',


                            ),
                        'labelled_radios',
                        'Step2Form',
                        'normal'
                        );

                ?>
                    <div class="religiona" style="display:none">
                    </div>
                <?

                    echo Form::easy_group(
                        array(
                            'name'    => 'religion_padre',
                            'label'   => 'Indique que religión practica el padre',
                            'values'  => Step2Form::$religion,
                            'errors'  => $errors,
                            'class'   => 'religion_padre',


                            ),
                        'labelled_radios',
                        'Step2Form',
                        'normal'
                        );

                ?>
                    <div class="religionp" style="display:none">
                    </div>
                <?
                    echo Form::easy_group(
                        array(
                            'name'    => 'religion_madre',
                            'label'   => 'Indique que religión practica la madre',
                            'values'  => Step2Form::$religion,
                            'errors'  => $errors,
                            'class'   => 'religion_madre',


                            ),
                        'labelled_radios',
                        'Step2Form',
                        'normal'
                        );


                ?>
                    <div class="religionm" style="display:none">
                    </div>
                <?

                    echo Form::easy_group(
                        array(
                            'name'    => 'todos_catolicos',
                            'label'   => 'Todos en la casa son catolicos',
                            'values'  => Step2Form::$yesno,
                            'errors'  => $errors,
                            'class'   => 'todos_catolicos',


                            ),
                        'labelled_radios',
                        'Step2Form',
                        'normal'
                        );
                ?>
            </div>
            <div class="span5">
                <?
                    echo Form::easy_group(
                        array(
                            'name'    => 'sacramentos_alumno',
                            'label'   => 'Indique los sacramentos con los que cuenta el alumno:',
                            'values'  => Step2Form::$sacramentos,
                            'errors'  => $errors,
                            'class'   => '',
                            'block'   => '',
                            'prepend' => ''
                            ),
                        'labelled_checkboxes',
                        'Step2Form',
                        'normal'
                        );
                    echo Form::easy_group(
                        array(
                            'name'    => 'sacramentos_padre',
                            'label'   => 'Indique los sacramentos con los que cuenta el padre:',
                            'values'  => Step2Form::$sacramentos,
                            'errors'  => $errors,
                            'class'   => '',
                            'block'   => '',
                            'prepend' => ''
                            ),
                        'labelled_checkboxes',
                        'Step2Form',
                        'normal'
                        );
                    echo Form::easy_group(
                        array(
                            'name'    => 'sacramentos_madre',
                            'label'   => 'Indique los sacramentos con los que cuenta la madre:',
                            'values'  => Step2Form::$sacramentos,
                            'errors'  => $errors,
                            'class'   => '',
                            'block'   => '',
                            'prepend' => ''
                            ),
                        'labelled_checkboxes',
                        'Step2Form',
                        'normal'
                        );                ?>
            </div>

        </fieldset>
        <div class="span11">
            <hr style='border-bottom: 1px solid #E0E0E0'>
        </div>
    </div>
    <div class="row">
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Siguiente:</button>
            {{ Buttons::link('Atr&aacute;s', URL::to_action('estudio@step_1')) }}
        </div>
    </div>
{{ Form::close() }}
@endsection
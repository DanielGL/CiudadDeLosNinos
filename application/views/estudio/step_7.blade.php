@layout('layouts/main')

@section('extra-css')
<style type="text/css">
.lol {
    display: none;
}
</style>
@endsection

@section('extra-js')
<script type="text/javascript">
$('.ODFdependientes_familia input[type="checkbox"][value="5"]').on('change', function() {
    var obj = $(this);
    if(obj.is(':checked')){
        $('.lol').show(function() {
            $(this).find('input').get(0).focus();
        });
    } else if (!obj.is(':checked')) {
        $('.lol').hide();
    }
})
</script>
@endsection

@section('main-content')
{{ Form::horizontal_open() }}
    <div class="row well">
        <fieldset>
            <legend>Otros Dependientes de la Familia</legend>
            <div class="span5">
                <?
                    echo Form::control_group(
                    Form::label('ODFdependientes_familia[]','¿Existen otros dependientes de la familia?:'),
                    Form::labelled_checkboxes("ODFdependientes_familia[]", Step7Form::$dependientes_familia),'ODFdependientes_familia');

                    echo Form::control_group(
                    Form::label('ODFdependientes_familia_otro', 'En caso de otro mencionelo'),
                    Form::text('ODFdependientes_familia_otro', (Step7Form::old('ODFdependientes_familia_otro')? Step7Form::old('ODFdependientes_familia_otro') : '')),"lol"
                    );

                ?>
            </div>
            <div class="span5">
                <?
                    echo Form::control_group(
                    Form::label('motivos_dependencia', 'Escriba los motivos por los que depende esta o estas personas:'),
                    Form::textarea('motivos_dependencia',Step7Form::old('motivos_dependencia')),
                    ($errors->has('motivos_dependencia')? 'error' : (Step7Form::old('motivos_dependencia')? 'success' : '')),
                    Form::block_help('Ingrese el nombre completo'));
                    ?>
            </div>
        </fieldset>
        <hr style='border-bottom: 1px solid #E0E0E0'>
    </div>
    <div class="row well">
        <fieldset>
                            <legend>Vivienda</legend>

        <div class="span5">
                <?
                    echo Form::control_group(
                    Form::label('numero_personas', 'N&uacute;mero de personas que viven en la casa:'),
                    Form::text('numero_personas',Step7Form::old('numero_personas')),
                    ($errors->has('numero_personas')? 'error' : (Step7Form::old('numero_personas')? 'success' : '')),
                    Form::block_help('Numero de personas que viven en la casa')
                    );


                    echo Form::control_group(
                    Form::label('distancia_CDLN', 'Kil&oacute;metro estimados de la casa a Ciudad de los Ni&ntilde;os:'),
                    Form::text('distancia_CDLN',Step7Form::old('distancia_CDLN')),
                    ($errors->has('distancia_CDLN')? 'error' : (Step7Form::old('distancia_CDLN')? 'success' : '')),
                    Form::block_help('Kilometro estimados de la casa a Ciudad de los Ni&ntilde;os')
                    );


                    echo Form::control_group(
                    Form::label('no_cuartos', 'N&uacute;mero de cuartos totales(sin contar ba&ntilde;o ni pasillos):'),
                    Form::text('no_cuartos',Step7Form::old('no_cuartos')),
                    ($errors->has('no_cuartos')? 'error' : (Step7Form::old('no_cuartos')? 'success' : '')),
                    Form::block_help('Numero de cuartos totales(sin contar ba&ntilde;o ni pasillos)')
                    );


                    echo Form::control_group(
                    Form::label('no_niveles', 'N&uacute;mero de niveles con los que cuenta la casa:'),
                    Form::text('no_niveles',Step7Form::old('no_niveles')),
                    ($errors->has('no_niveles')? 'error' : (Step7Form::old('no_niveles')? 'success' : '')),
                    Form::block_help('Numero de niveles con los que cuenta la casa')
                    );

                    echo Form::control_group(
                    Form::label('metros_construccion', 'Metros cuadrados de construcci&oacute;n de la vivienda:'),
                    Form::text('metros_construccion',Step7Form::old('metros_construccion')),
                    ($errors->has('metros_construccion')? 'error' : (Step7Form::old('metros_construccion')? 'success' : '')),
                    Form::block_help('Metros cuadrados de construccion de la vivienda')
                    );

                    echo Form::control_group(
                    Form::label('cuartos_dormir', 'N&uacute;mero de cuartos que se usan para dormir:'),
                    Form::text('cuartos_dormir',Step7Form::old('cuartos_dormir')),
                    ($errors->has('cuartos_dormir')? 'error' : (Step7Form::old('cuartos_dormir')? 'success' : '')),
                    Form::block_help('Numero de cuartos que se usan para dormir')
                    );
                        ?>
            </div>
            <div class="span5">

                <?

                echo Form::easy_group(
                        array(
                            'name'    => 'material_techo',
                            'label'   => 'Indique el materia con el cu&aacute;l esta construido el techo:',
                            'values'  => Step7Form::$materiales,
                            'errors'  => $errors,
                            'class'   => 'material_techo'
                            ),
                        'labelled_radios',
                        'Step7Form',
                        'normal'
                );


                echo Form::easy_group(
                        array(
                            'name'    => 'material_piso',
                            'label'   => 'Indique el materia con el cu&aacute;l esta construido el piso',
                            'values'  => Step7Form::$materiales,
                            'errors'  => $errors,
                            'class'   => 'material_piso'
                            ),
                        'labelled_radios',
                        'Step7Form',
                        'normal'
                );

                echo Form::easy_group(
                        array(
                            'name'    => 'material_paredes',
                            'label'   => 'Indique el material con el cu&aacute;l est&aacute;n construidas las paredes:',
                            'values'  => Step7Form::$materiales,
                            'errors'  => $errors,
                            'class'   => 'material_paredes'
                            ),
                        'labelled_radios',
                        'Step7Form',
                        'normal'
                );

                echo Form::easy_group(
                        array(
                            'name'    => 'cuarto_cocinar',
                            'label'   => '¿Tiene un cuarto para cocinar?:',
                            'values'  => Step7Form::$yesno,
                            'errors'  => $errors,
                            'class'   => 'cuarto_cocinar'
                            ),
                        'labelled_radios',
                        'Step7Form',
                        'normal'
                );
                echo Form::easy_group(
                        array(
                            'name'    => 'cuarto_cocinary_dormir',
                            'label'   => '¿Tiene un cuarto donde cocina y tambi&iacute;n duerme?:',
                            'values'  => Step7Form::$yesno,
                            'errors'  => $errors,
                            'class'   => 'cuarto_cocinary_dormir'
                            ),
                        'labelled_radios',
                        'Step7Form',
                        'normal'
                );


                ?>
            </div>
         </fieldset>
        <div class="span11"
         <hr style='border-bottom: 1px solid #E0E0E0'>
        </div>
    </div>
    <div class="row">
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Siguiente:</button>
           {{ Buttons::link('Atr&aacute;s', URL::to_action('estudio@step_6')) }}

        </div>
    </div>
{{ Form::close() }}
@endsection
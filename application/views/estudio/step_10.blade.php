@layout('layouts/main')

@section('extra-css')
<style type="text/css">
</style>
@endsection

@section('extra-js')
<script type="text/javascript">
    $('#step10_num_vehiculos').on('change', function() {
        var obj = $(this);
        var toClone = $($(".clone")[0]);
        for(i = $(".clone").length-1; i < obj.val(); i++) {
            toClone.clone().appendTo('#base').show();
        }
        for(i = $(".clone").length-1; i > obj.val(); i--) {
            $($(".clone").get($(".clone").length-1)).remove();
            toClone.hide();
        }

    })
</script>
@endsection

@section('main-content')
{{ Form::horizontal_open() }}
    <div class="row well" id="base">
        <fieldset>
            <legend>Veh&iacute;culos</legend>
            <div class="span11">
                <?
                   echo Form::control_group(
                        Form::label('step10_num_vehiculos', 'Numero de vehiculos'),
                        Form::select('step10_num_vehiculos', Step10Form::$carros, Step10Form::old('step10_num_vehiculos')),
                        ($errors->has('step10_num_vehiculos')? 'error' : (Step10Form::old('step10_num_vehiculos')? 'success' : ''))
                    );
                ?>
            </div>
            <div><?
                    if($errors->has('step10_propietario')) {
                        echo Alert::error('Debe llenar todos los campos', false, array('class' => 'span11'));
                    }
                ?></div>
            <div class= "clone" style="display:none">
                <div class="span5">
                    <?
                    echo Form::control_group(
                        Form::label('step10_propietario[]', 'Propietario'),
                        Form::text('step10_propietario[]'),
                        ''
                    );

                    echo Form::control_group(
                        Form::label('step10_ano[]', 'A&ntilde;o'),
                        Form::text('step10_ano[]'),
                        ''
                    );

                    echo Form::control_group(
                        Form::label('step10_pagos_mensuales[]', 'Pagos mensuales'),
                        Form::text('step10_pagos_mensuales[]'),
                        ''
                    );
                    ?>
                </div>
                <div class="span5">

                    <?

                    echo Form::control_group(
                        Form::label('step10_marca[]', 'Marca'),
                        Form::text('step10_marca[]'),
                        ''
                    );
                    echo Form::control_group(
                        Form::label('step10_val_comercial[]', 'Valor comercial'),
                        Form::text('step10_val_comercial[]'),
                        ''
                    );

                    echo Form::control_group(
                        Form::label('step10_cantidad_adeudo[]', 'Cantidad en adeudo'),
                        Form::text('step10_cantidad_adeudo[]'),
                        ''
                    );
                    ?>
                </div>
                <div class="span11">
                    <hr style='border-bottom: 1px solid #E0E0E0'>
                </div>
            </div>
            <?
                $step10_propietario     = Step10Form::old('step10_propietario', array());
                $step10_ano             = Step10Form::old('step10_ano', array());
                $step10_pagos_mensuales = Step10Form::old('step10_pagos_mensuales', array());
                $step10_marca           = Step10Form::old('step10_marca', array());
                $step10_val_comercial   = Step10Form::old('step10_val_comercial', array());
                $step10_cantidad_adeudo = Step10Form::old('step10_cantidad_adeudo', array());
            ?>
            @for ($i=1; $i <= Step10Form::old('step10_num_vehiculos', 0); $i++)
            <div class="clone">
                <div class="span5">
                    <?
                    echo Form::control_group(
                        Form::label('step10_propietario[]', 'Propietario'),
                        Form::text('step10_propietario[]', (isset($step10_propietario[$i])? $step10_propietario[$i] : '')),
                        ''
                    );

                    echo Form::control_group(
                        Form::label('step10_ano[]', 'A&ntilde;o'),
                        Form::text('step10_ano[]', (isset($step10_ano[$i])? $step10_ano[$i] : '')),
                        ''
                    );

                    echo Form::control_group(
                        Form::label('step10_pagos_mensuales[]', 'Pagos mensuales'),
                        Form::text('step10_pagos_mensuales[]', (isset($step10_pagos_mensuales[$i])? $step10_pagos_mensuales[$i] : '')),
                        ''
                    );
                    ?>
                </div>
                <div class="span5">

                    <?

                    echo Form::control_group(
                        Form::label('step10_marca[]', 'Marca'),
                        Form::text('step10_marca[]', (isset($step10_marca[$i])? $step10_marca[$i] : '')),
                        ''
                    );
                    echo Form::control_group(
                        Form::label('step10_val_comercial[]', 'Valor comercial'),
                        Form::text('step10_val_comercial[]', (isset($step10_val_comercial[$i])? $step10_val_comercial[$i] : '')),
                        ''
                    );

                    echo Form::control_group(
                        Form::label('step10_cantidad_adeudo[]', 'Cantidad en adeudo'),
                        Form::text('step10_cantidad_adeudo[]', (isset($step10_cantidad_adeudo[$i])? $step10_cantidad_adeudo[$i] : '')),
                        ''
                    );
                    ?>
                </div>
                <div class="span11">
                    <hr style='border-bottom: 1px solid #E0E0E0'>
                </div>
            </div>
            @endfor
        </fieldset>
    </div>
    <div class="row well">
        <fieldset>
            <legend>Recomendaciones (no familiares)</legend>
            <div class="span5">
                <?
                    echo Form::control_group(
                        Form::label('rec1_nombre', 'Nombre'),
                        Form::text('rec1_nombre', Step10Form::old('rec1_nombre')),
                         ($errors->has('rec1_nombre')? 'error' : (Step10Form::old('rec1_nombre')? 'success' : ''))
                    );
                ?>
                <?
                    echo Form::control_group(
                        Form::label('rec1_direccion', 'Direcci&oacute;n'),
                        Form::text('rec1_direccion', Step10Form::old('rec1_direccion')),
                         ($errors->has('rec1_direccion')? 'error' : (Step10Form::old('rec1_direccion')? 'success' : ''))
                    );
                ?>
            </div>
            <div class="span5">
                <?
                    echo Form::control_group(
                        Form::label('rec1_parentesco', 'Parentesco'),
                        Form::text('rec1_parentesco', Step10Form::old('rec1_parentesco')),
                         ($errors->has('rec1_parentesco')? 'error' : (Step10Form::old('rec1_parentesco')? 'success' : ''))
                    );

                    echo Form::control_group(
                        Form::label('rec1_telefono', 'Telefono'),
                        Form::text('rec1_telefono', Step10Form::old('rec1_telefono')),
                         ($errors->has('rec1_telefono')? 'error' : (Step10Form::old('rec1_telefono')? 'success' : ''))
                    );
                ?>
            </div>
            <div class="span11">
                 <hr style='border-bottom: 1px solid #E0E0E0'>
            </div>
            <div class="span5">
                <?
                    echo Form::control_group(
                        Form::label('rec2_nombre', 'Nombre'),
                        Form::text('rec2_nombre', Step10Form::old('rec2_nombre')),
                         ($errors->has('rec2_nombre')? 'error' : (Step10Form::old('rec2_nombre')? 'success' : ''))
                    );
                ?>
                <?
                    echo Form::control_group(
                        Form::label('rec2_direccion', 'Direcci&oacute;n'),
                        Form::text('rec2_direccion', Step10Form::old('rec2_direccion')),
                         ($errors->has('rec2_direccion')? 'error' : (Step10Form::old('rec2_direccion')? 'success' : ''))
                    );
                ?>
            </div>
            <div class="span5">
                <?
                    echo Form::control_group(
                        Form::label('rec2_parentesco', 'Parentesco'),
                        Form::text('rec2_parentesco', Step10Form::old('rec2_parentesco')),
                         ($errors->has('rec2_parentesco')? 'error' : (Step10Form::old('rec2_parentesco')? 'success' : ''))
                    );

                    echo Form::control_group(
                        Form::label('rec2_telefono', 'Telefono'),
                        Form::text('rec2_telefono', Step10Form::old('rec2_telefono')),
                         ($errors->has('rec2_telefono')? 'error' : (Step10Form::old('rec2_telefono')? 'success' : ''))
                    );
                ?>
            </div>

        </fieldset>
    </div>
    <div class="row">
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Terminar Registro</button>
            {{ Buttons::link('Regresar', URL::to_action('estudio@step_9')) }}
        </div>
    </div>
{{ Form::close() }}
@endsection
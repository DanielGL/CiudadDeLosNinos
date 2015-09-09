@layout('layouts/main')

@section('extra-css')
<style type="text/css">
    .has-debt,
    .step9_2_hijos_datos,
    .step9_2_hijos_cuantos,
    .step9_2_ano_reingreso {
        display: none;
    }
    .show {
        display: block;
    }
</style>
@endsection

@section('extra-js')
<script type="text/javascript">
    var debts_no ={{ count(Step9Form::old('step9_1_deudas_donde', array())) }};
    $('.step9_1_deudas input[type="radio"]').on('change', function(){
        var obj = $(this);
        var debts_cont = $('.has-debt');
        var debt_cont = $('.has-debt > .debts');
        if(obj.val() == 1) {
            debts_cont.show();
            $('#add_debt').trigger('click');
        } else {
            debts_cont.hide();
            debt_cont.html('');
            debts_no = 0;
        }
    })
    $('#add_debt').on('click', function() {
        debts_no++;
        var debt_cont = $('.has-debt > .debts');
        $.get('{{ URL::to_action('estudio@step_9_debt') }}/' + debts_no, function(data) {
            debt_cont.append(data);
            debt_cont.find('input').get(0).focus();
        })
    })
    $('.step9_2_hijos_egresados input[type="radio"]').on('change', function() {
        var obj = $(this);
        var next_field = $('.step9_2_hijos_cuantos');
        if(obj.val()==2){
             $('#step9_2_hijos_datos').hide();
        }
        if(obj.val() == 1) {
            $('#step9_2_hijos_datos').show();
            next_field.show(function() {
                $(this).find('input').focus();
            });
        } else {
            next_field.hide();
        }
    })
    $('.step9_2_hijos_cuantos input[type="text"]').on('change', function() {
        var obj = $(this);
        var toClone = $($('.step9_2_hijos_datos')[0]);
        var times = 0;
        if(isNaN(obj.val())) {
            obj.val('');
            times = 0;
        } else {
            times = obj.val();
        }
        for(i = $(".step9_2_hijos_datos").length-1; i < times; i++) {
            toClone.clone().appendTo('#step9_2_hijos_datos').show();
        }
        for(i = $(".step9_2_hijos_datos").length-1; i > times; i--) {
            $($(".step9_2_hijos_datos").get($(".step9_2_hijos_datos").length-1)).remove();
        }
        $($('.step9_2_hijos_datos')[1]).show(function() {
                $(this).find('input').get(0).focus();
        });
    })
    $('.step9_2_familia input[type="radio"]').on('change', function() {
        var obj = $(this);
        var next_field = $('.step9_2_ano_reingreso');
        if(obj.val() == 2) {
            next_field.show(function() {
                $(this).find('input').focus();
            });
        } else {
            next_field.hide();
        }
    })
</script>
@endsection

@section('main-content')
{{ Form::horizontal_open() }}
    <div class="row well">
        <fieldset>
            <legend>Gastos familiares</legend>
            <div class="span5">
                <?
                    echo Form::easy_group(
                        array(
                            'name'   => 'step9_1_presupuesto',
                            'label'  => '¿Acostumbran a realizar un presupuesto de gastos?:',
                            'block'  => '',
                            'errors' => $errors,
                            'values' => array('1' => 'Si','2' => 'No')
                        ),
                        'inline_labelled_radios',
                        'Step9Form'
                    );
                ?>

                <?php /**/ ?>
                {{-- Pagos ciclo escolar y mensuales --}}
                    @include('partials.step9.pagos_ciclo_mensuales')
                <?php /**/ ?>
                <hr>
            </div>
        <?php /**/ ?>
            <div class="span5">
                <p>Indique el consumo y el gasto por semana de los siguientes alimentos:</p>
                {{ Form::step9_1_semanal(array('name' => 'leche', 'errors' => $errors)) }}
                {{ Form::step9_1_semanal(array('name' => 'huevo', 'errors' => $errors)) }}
                {{ Form::step9_1_semanal(array('name' => 'lacteos', 'label' => 'L&aacute;cteos (otros)', 'errors' => $errors)) }}
                {{ Form::step9_1_semanal(array('name' => 'pan', 'errors' => $errors)) }}
                {{ Form::step9_1_semanal(array('name' => 'tortillas', 'errors' => $errors)) }}
                {{ Form::step9_1_semanal(array('name' => 'granos', 'errors' => $errors)) }}
                {{ Form::step9_1_semanal(array('name' => 'carne', 'errors' => $errors)) }}
                {{ Form::step9_1_semanal(array('name' => 'pollo', 'errors' => $errors)) }}
                {{ Form::step9_1_semanal(array('name' => 'pescado', 'errors' => $errors)) }}
                {{ Form::step9_1_semanal(array('name' => 'frutas', 'errors' => $errors)) }}
                {{ Form::step9_1_semanal(array('name' => 'verduras', 'errors' => $errors)) }}
                {{ Form::step9_1_semanal(array('name' => 'postres', 'errors' => $errors)) }}
                {{ Form::step9_1_semanal(array('name' => 'aguas', 'label' => 'Aguas de frutas', 'errors' => $errors)) }}
                {{ Form::step9_1_semanal(array('name' => 'refrescos', 'errors' => $errors)) }}
                {{ Form::step9_1_semanal(array('name' => 'abarrotes', 'errors' => $errors)) }}
                {{ Form::step9_1_semanal(array('name' => 'limpieza', 'label' => 'Articulos de limpieza', 'errors' => $errors)) }}
                <hr>
            </div>
            <div class="span5">
                <?
                    echo Form::easy_group(
                        array(
                            'name'   => 'step9_1_deudas',
                            'label'  => '¿Tienen deudas?:',
                            'block'  => '',
                            'errors' => $errors,
                            'values' => array('1' => 'Si','2' => 'No'),
                            'class'  => 'step9_1_deudas'
                        ),
                        'inline_labelled_radios',
                        'Step9Form'
                    );
                ?>
                <div class="has-debt" {{ (count(Step9Form::old('step9_1_deudas_donde', array())) > 0)? 'style="display:block;"' : ''; }}>
                    <div class="debts">
                        {{-- Partial to load using ajax --}}
                         @if(Step9Form::old('step9_1_deudas', 1) == 0)

                            <?
                            if($errors->has('step9_1_deudas_donde') ||
                                $errors->has('step9_1_deudas_que') ||
                                $errors->has('step9_1_deudas_cuanto') ||
                                $errors->has('step9_1_deudas_tiempo')) {
                                echo Alert::error('Debe llenar todos los campos.');
                            }
                            ?>
                            @foreach(Step9Form::old('step9_1_deudas_donde', array()) as $key => $value)
                            <? $debt_no = $key; ?>
                            @include('partials.step9.has_debt')
                            @endforeach
                        @endif
                    </div>
                    {{ Buttons::success_normal('+ Agregar deuda', array('id' => 'add_debt', 'class' => 'offset2')) }}
                </div>
                <hr>
            </div>
            <div class="span5">
                <p>¿Cu&aacute;nto gasta al mes en los servicios de...? En caso de tener alg&uacute;n adeudo indicar.</p>
                {{-- Usando form helpers para mejor lectura --}}
                {{ Form::step9_1_servicios(array('name' => 'luz', 'errors' => $errors)) }}
                {{ Form::step9_1_servicios(array('name' => 'agua', 'errors' => $errors)) }}
                {{ Form::step9_1_servicios(array('name' => 'gas', 'errors' => $errors)) }}
                {{ Form::step9_1_servicios(array('name' => 'telefono', 'errors' => $errors)) }}
                {{ Form::step9_1_servicios(array('name' => 'internet', 'errors' => $errors)) }}
                {{ Form::step9_1_servicios(array('name' => 'cable', 'errors' => $errors)) }}
                <hr>
            </div>
            <div class="span5">
                <p>¿Cu&aacute;nto gasta en transporte?</p>
                <?
                    echo Form::easy_group(
                        array(
                            'name'    => 'step9_1_transporte_escuela',
                            'label'   => 'Transporta a sus hijos a la escuela en:',
                            'block'   => '',
                            'errors'  => $errors,
                            'values'  => Step9Form::$step9_1_transporte_escuela
                        ),
                        'select',
                        'Step9Form'
                    );
                ?>
                <p>Costo del transporte semanal:</p>
                <?
                    echo Form::easy_group(
                        array(
                            'name'    => 'step9_1_transporte_costo_papa',
                            'label'   => 'Pap&aacute;',
                            'block'   => '',
                            'errors'  => $errors,
                            'prepend' => '$'
                        ),
                        'prepend',
                        'Step9Form',
                        'mini'
                    );
                    echo Form::easy_group(
                        array(
                            'name'    => 'step9_1_transporte_costo_mama',
                            'label'   => 'Mam&aacute;',
                            'block'   => '',
                            'errors'  => $errors,
                            'prepend' => '$'
                        ),
                        'prepend',
                        'Step9Form',
                        'mini'
                    );
                    echo Form::easy_group(
                        array(
                            'name'    => 'step9_1_transporte_costo_hijos',
                            'label'   => 'Hijos',
                            'block'   => '',
                            'errors'  => $errors,
                            'prepend' => '$'
                        ),
                        'prepend',
                        'Step9Form',
                        'mini'
                    );
                ?>
                <hr>
            </div>
        <?php /**/?>
        </fieldset>
    </div>
    <?php /**/ ?>
        <div class="row well">
            <fieldset>
                <legend>Alumnos egresados</legend>
                <div class="span5">
                    <?
                        echo Form::easy_group(
                            array(
                                'name'    => 'step9_2_hijos_egresados',
                                'label'   => '¿Ha tenido hijos egresados de Ciudad de los Ni&ntilde;os?:',
                                'values'  => array(1 => 'Si', 2 => 'No'),
                                'errors'  => $errors,
                                'class'   => 'step9_2_hijos_egresados'

                                ),
                            'inline_labelled_radios',
                            'Step9Form'
                            );

                        echo Form::easy_group(
                            array(
                                'name'    => 'step9_2_hijos_cuantos',
                                'label'   => '¿Cu&aacute;ntos?:',
                                'errors'  => $errors,
                                'class'   => 'step9_2_hijos_cuantos'.((Step9Form::old('step9_2_hijos_egresados', -1) == 1)? ' show' : '')
                                ),
                            'text',
                            'Step9Form'
                            );
                    ?>
                    <div class="step9_2_hijos_datos">
                    {{-- Hijos egresados --}}
                        <? $hijo_no = '' ?>
                        @include('partials.step9.hijos_egresados')
                        <hr>
                    </div>
                    <div id="step9_2_hijos_datos">
                        @if(Step9Form::old('step9_2_hijos_egresados', -1) == 1)
                            <?
                            if($errors->has('step9_2_hijos_datos_nombre') ||
                                $errors->has('step9_2_hijos_datos_egreso')) {
                                echo Alert::error('Debe llenar todos los campos.');
                            }
                            ?>
                            @for ($i = 0; $i < Step9Form::old('step9_2_hijos_cuantos', 0); $i++)
                                <? $hijo_no = $i ?>
                                <div class="step9_2_hijos_datos" style="display:block;">
                                    @include('partials.step9.hijos_egresados')
                                </div>
                            @endfor
                        @endif
                    </div>
                </div>
                <div class="span5">
                    <?
                        echo Form::easy_group(
                            array(
                                'name'    => 'step9_2_proyecto_familiar',
                                'label'   => 'Proyecto familiar a alcanzar en los proximos 3 A&ntilde;os:',
                                'errors'  => $errors
                                ),
                            'textarea',
                            'Step9Form'
                            );

                        echo Form::easy_group(
                            array(
                                'name'    => 'step9_2_familia',
                                'label'   => 'Indicar si es:',
                                'values'  => Step9Form::$step9_1_reingreso ,
                                'errors'  => $errors,
                                'class'   => 'step9_2_familia'
                                ),
                            'labelled_radios',
                            'Step9Form'
                            );
                        echo Form::easy_group(
                            array(
                                'name'    => 'step9_2_ano_reingreso',
                                'label'   => 'Indicar el a&ntilde;o en que ingres&oacute; como familia',

                                'errors'  => $errors,
                                'class'   => 'step9_2_ano_reingreso'.((Step9Form::old('step9_2_familia', -1) == 2)? ' show' : '')
                                ),
                            'text',
                            'Step9Form'
                            );
                    ?>
                </div>
            </fieldset>
        </div>
        <div class="row well">
            <fieldset>
                <legend>Otros gastos por salud</legend>
                @include('partials.step9.otras_enfermedades')
            </fieldset>
        </div>
    <?php /**/ ?>
    <div class="row">
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Siguiente:</button>
            {{ Buttons::link('Regresar', URL::to_action('estudio@step_8')) }}
        </div>
    </div>
{{ Form::close() }}
@endsection
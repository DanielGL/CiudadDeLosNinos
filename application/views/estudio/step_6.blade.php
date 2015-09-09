@layout('layouts/main')

@section('extra-js')
<script type='text/javascript'>
    $('.step6_parentesco1 input[type="radio"]').on('change', function() {
        $(".otroparentesco").hide();

    })
    $('.step6_parentesco1 input[type="radio"][value="5"]').on('change', function() {
            $(".otroparentesco").show();
            
    }) 
    $('.step6_parentesco2 input[type="radio"]').on('change', function() {
        $(".otroparentesco2").hide();

    })
    $('.step6_parentesco2 input[type="radio"][value="5"]').on('change', function() {
            $(".otroparentesco2").show();
            
    })
    $('.step6_parentesco3 input[type="radio"]').on('change', function() {
        $(".otroparentesco3").hide();

    })
    $('.step6_parentesco3 input[type="radio"][value="5"]').on('change', function() {
            $(".otroparentesco3").show();
            
    })            
</script>
@endsection

@section('main-content')

{{ Form::horizontal_open() }}
    <div class="row well">
          <fieldset>
                <legend>Otros ingresos familiares</legend>
        <div class="span5">
                    <?
                   echo Form::control_group(
                        Form::label('step6_nombre1','Nombre:'),
                        Form::text('step6_nombre1', Step6Form::old('step6_nombre1')),
                        ($errors->has('step6_nombre1')? 'error' : (Step6Form::old('step6_nombre1')? 'success' : ''))
                    );
                   echo Form::control_group(
                        Form::label('step6_edad1','Edad:'),
                        Form::text('step6_edad1', Step6Form::old('step6_edad1')),
                        $errors->has('step6_edad1')? 'error' : (Step6Form::old('step6_edad1')
                            ? 'success' : '')
                        
                    );
                    echo Form::control_group(
                        Form::label('step6_ocupacion1','Ocupaci&oacute;n:'),
                        Form::text('step6_ocupacion1', Step6Form::old('step6_ocupacion1')),
                        $errors->has('step6_ocupacion1')? 'error' : (Step6Form::old('step6_ocupacion1')
                            ? 'success' : '')
                        
                    );
                    echo Form::control_group(
                        Form::label('step6_nombreempresa1','Nombre de la Empresa:'),
                        Form::text('step6_nombreempresa1', Step6Form::old('step6_nombreempresa1')),
                        $errors->has('step6_nombreempresa1')? 'error' : (Step6Form::old('step6_nombreempresa1')
                            ? 'success' : '')
                
                        
                    );
                    echo Form::control_group(
                        Form::label('step6_horario1','Horario:'),
                        Form::labelled_radios('step6_horario1', Step6Form::$horario1),
                       $errors->has('step6_horario1')? 'error' : (Step6Form::old('step1_horario1')
                            ? 'success' : '')
                    );
                    echo Form::control_group(
                        Form::label('step6_laborar1','A&ntilde;os de laborar en la empresa:'),
                        Form::text('step6_laborar1', Step6Form::old('step6_laborar1')),
                        $errors->has('step6_laborar1')? 'error' : (Step6Form::old('step6_laborar1')
                            ? 'success' : '')
                        
                    );
                    ?>
                </div>
                <div class="span5">
                <?
                echo Form::easy_group(
                        array(
                            'name'    => 'step6_parentesco1',
                            'label'   => 'Parentesco:',
                            'values'  => Step6Form::$parentesco1,
                            'errors'  => $errors,
                            'class'   => 'step6_parentesco1'
                            ),
                        'labelled_radios',
                        'Step6Form',
                        'normal'
                );                    
                ?>
                <div class="otroparentesco" style="display:none">
                <?    
                    echo Form::control_group(
                        Form::label('step6_otro1','Especifique:'),
                        Form::text('step6_otro1', Step6Form::old('step6_otro1')),
                        $errors->has('step6_otro1')? 'error' : (Step6Form::old('step6_otro1')
                            ? 'success' : ''),Form::block_help('ingrese el parentesco')
                        
                    );
                ?>
                </div>
                <?        
                        echo Form::control_group(
                        Form::label('step6_salario1','Salario Mensual:'),
                        Form::text('step6_salario1', Step6Form::old('step6_salario1')),
                         $errors->has('step6_salario1')? 'error' : (Step6Form::old('step6_salario1')
                            ? 'success' : '')
                        
                    );
                    echo Form::control_group(
                        Form::label('step6_cantidad1','Cantidad mensual de aportaci&oacute;n al ingreso familiar:'),
                        Form::text('step6_cantidad1', Step6Form::old('step6_cantidad1')),
                         $errors->has('step6_salario1')? 'error' : (Step6Form::old('step6_salario1')
                            ? 'success' : '')
                        
                    );

                ?>
             </div>
            </fieldset>
            <div class="span11"><hr style="border-botton: 1px solid #E0E0E0"></div>   
            <fieldset>
            <div class="span5">

                <?

                   echo Form::control_group(
                        Form::label('step6_nombre2','Nombre:'),
                        Form::text('step6_nombre2', Step6Form::old('step6_nombre2')),
                        $errors->has('step6_nombre2')? 'error' : (Step6Form::old('step6_nombre2')
                            ? 'success' : '')
                        
                    );
                   echo Form::control_group(
                        Form::label('step6_edad2','Edad:'),
                        Form::text('step6_edad2', Step6Form::old('step6_edad2')),
                        $errors->has('step6_edad2')? 'error' : (Step6Form::old('step6_edad2')
                            ? 'success' : '')
                        
                    );
                echo Form::control_group(
                        Form::label('step6_ocupacion2','Ocupaci&oacute;n:'),
                        Form::text('step6_ocupacion2', Step6Form::old('step6_ocupacion2')),
                        $errors->has('step6_ocupacion2')? 'error' : (Step6Form::old('step6_ocupacion2')
                            ? 'success' : '')
                        
                    );
               echo Form::control_group(
                        Form::label('step6_nombreempresa2','Nombre de la Empresa:'),
                        Form::text('step6_nombreempresa2', Step6Form::old('step6_nombreempresa2')),
                        $errors->has('step6_nombreempresa2')? 'error' : (Step6Form::old('step6_nombreempresa2')
                            ? 'success' : '')
                        
                    );
                echo Form::control_group(
                        Form::label('step6_horario2','Horario:'),
                        Form::labelled_radios('step6_horario2', Step6Form::$horario2),
                        $errors->has('step6_horario2')? 'error' : (Step6Form::old('step6_horario2')
                            ? 'success' : '')
                    );

                        echo Form::control_group(
                        Form::label('step6_laborar2','A&ntilde;os de laborar en la empresa:'),
                        Form::text('step6_laborar2', Step6Form::old('step6_laborar2')),
                        $errors->has('step6_laborar2')? 'error' : (Step6Form::old('step6_laborar2')
                            ? 'success' : '')
                        
                    );
                ?>
            </div>
            <div class="span5">    
                <?                        
                echo Form::easy_group(
                        array(
                            'name'    => 'step6_parentesco2',
                            'label'   => 'Parentesco:',
                            'values'  => Step6Form::$parentesco2,
                            'errors'  => $errors,
                            'class'   => 'step6_parentesco2'
                            ),
                        'labelled_radios',
                        'Step6Form'
                );            
                ?>
            <div class="otroparentesco2" style="display:none">    
                <?        
                    echo Form::control_group(
                        Form::label('step6_otro2','Especifique:'),
                        Form::text('step6_otro2', Step6Form::old('step6_otro2')),
                        $errors->has('step6_otro2')? 'error' : (Step6Form::old('step6_otro2')
                            ? 'success' : ''),Form::block_help('Ingrese el parentesco'));

                ?>
            </div>    
                <?
                                        echo Form::control_group(
                        Form::label('step6_salario2','Salario Mensual:'),
                        Form::text('step6_salario2', Step6Form::old('step6_salario2')),
                        $errors->has('step6_salario2')? 'error' : (Step6Form::old('step6_salario2')
                            ? 'success' : '')
                        
                    );
                    echo Form::control_group(
                        Form::label('step6_cantidad2','Cantidad mensual de aportaci&oacute;n al ingreso familiar:'),
                        Form::text('step6_cantidad2', Step6Form::old('step6_cantidad2')),
                        $errors->has('step6_salario2')? 'error' : (Step6Form::old('step6_salario2')
                            ? 'success' : '')    
                    );

                ?>
            </div>
            </fieldset>

        <div class="span11"><hr style="border-botton: 1px solid #E0E0E0"></div>
        <fieldset>
        <div class="span5">
            
                <?

                   echo Form::control_group(
                        Form::label('step6_nombre3','Nombre:'),
                        Form::text('step6_nombre3', Step6Form::old('step6_nombre3')),
                        $errors->has('step6_nombre3')? 'error' : (Step6Form::old('step6_nombre3')
                            ? 'success' : '')
                        
                    );
                   echo Form::control_group(
                        Form::label('step6_edad3','Edad:'),
                        Form::text('step6_edad3', Step6Form::old('step6_edad3')),
                        $errors->has('step6_edad3')? 'error' : (Step6Form::old('step6_edad3')
                            ? 'success' : '')
                        
                        
                    );
                echo Form::control_group(
                        Form::label('step6_ocupacion3','Ocupaci&oacute;n:'),
                        Form::text('step6_ocupacion3', Step6Form::old('step6_ocupacion3')),
                        $errors->has('step6_ocupacion3')? 'error' : (Step6Form::old('step6_ocupacion3')
                            ? 'success' : '')
                        
                        
                    );
                echo Form::control_group(
                        Form::label('step6_nombreempresa3','Nombre de la Empresa:'),
                        Form::text('step6_nombreempresa3', Step6Form::old('step6_nombreempresa3')),
                        $errors->has('step6_nombreempresa3')? 'error' : (Step6Form::old('step6_nombreempresa3')
                            ? 'success' : '')
                        
                        
                    );

                echo Form::control_group(
                        Form::label('step6_horario3','Horario:'),
                        Form::labelled_radios('step6_horario3', Step6Form::$horario3),
                        $errors->has('step6_horario3')? 'error' : (Step6Form::old('step6_horario3')
                            ? 'success' : '')
                        
                    );
                echo Form::control_group(
                        Form::label('step6_laborar3','A&ntilde;os de laborar en la empresa:'),
                        Form::text('step6_laborar3', Step6Form::old('step6_laborar3')),
                        $errors->has('step6_laborar3')? 'error' : (Step6Form::old('step6_laborar3')
                            ? 'success' : '')
                        
                    );
                ?>
        
    </div>
    <div class="span5">

           <?
                echo Form::easy_group(
                        array(
                            'name'    => 'step6_parentesco3',
                            'label'   => 'Parentesco:',
                            'values'  => Step6Form::$parentesco3,
                            'errors'  => $errors,
                            'class'   => 'step6_parentesco3'
                            ),
                        'labelled_radios',
                        'Step6Form'
                );                    
            ?>
        <div class="otroparentesco3" style="display:none">    
            <?        
                echo Form::control_group(
                        Form::label('step6_otro3','Especifique:'),
                        Form::text('step6_otro3', Step6Form::old('step6_otro3')),
                        $errors->has('step6_otro3')? 'error' : (Step6Form::old('step6_otro3')
                            ? 'success' : ''),Form::block_help('Ingrese el parentesco'));
            ?>
        </div>    
            <?        
                 echo Form::control_group(
                        Form::label('step6_salario3','Salario Mensual:'),
                        Form::text('step6_salario3', Step6Form::old('step6_salario3')),
                    $errors->has('step6_salario3')? 'error' : (Step6Form::old('step6_salario3')
                            ? 'success' : '')
                        
                        
                    );
                 echo Form::control_group(
                        Form::label('step6_cantidad3','Cantidad mensual de aportaci&oacute;n al ingreso familiar:'),
                        Form::text('step6_cantidad3', Step6Form::old('step6_cantidad3')),
                        $errors->has('step6_cantidad3')? 'error' : (Step6Form::old('step6_cantidad3')
                            ? 'success' : ''));
            ?>
    </div>
    </fieldset>
</div>
    <div class="row">
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Siguiente:</button>
            {{ Buttons::link('Atr&aacute;s', URL::to_action('estudio@step_5')) }}
        </div>
    </div>
</form>
@endsection
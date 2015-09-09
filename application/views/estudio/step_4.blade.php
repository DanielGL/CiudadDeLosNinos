@layout('layouts/main')

@section('extra-css')
<style type="text/css">
.step4_estado_otro {
	display : none;
}
.numcalle{
	position:relative;
	left    : 20px;
}
.numcallet{
	position:relative;
	right   : 125px;
	width   : 50px;
}
.omestado{
	position:relative;
	right   :70px;
}
.omestados{
	position:relative;
	right   : 185px;
	width   : 145px;
}
.trabact{
	position:relative;
	left    : 200px;
}
</style>
@endsection

@section('extra-js')
<script type='text/javascript'>
$(document).ready(function() {
	if($('#step4_estado_nacimiento').val() == 32) {
		$('.step4_estado_otro').show();
	}
})
    $('#step4_estado_nacimiento').on('change', function() {
        var obj = $(this);
        console.log(obj.val());
        if(obj.val() == 32) {
            $('.step4_estado_otro').show();
        }
        else {
            $('.step4_estado_otro').val('');
            $('.step4_estado_otro').hide();
        }
    })
//
    $('.step4op_trabaja_actualmente input[type="radio"]').on('change', function() {
        $(".trabajaactualmente").hide();

    })
    $('.step4op_trabaja_actualmente input[type="radio"][value="1"]').on('change', function() {
        var obj = $(this);
            $(".trabajaactualmente").show();

    })
</script>
@endsection

@section('main-content')
{{ Form::horizontal_open() }}

	<div class='row well'>
		<fieldset>
			<legend>Datos del padre</legend>
			<div class="span4">

				<?php
					echo Form::control_group(
							Form::label('step4_nombre', 'Nombre:'),
							Form::text('step4_nombre', Step5Form::old('step4_nombre')),
							($errors->has('step4_nombre')? 'error' : (Step5Form::old('step4_nombre')? 'success' : '')),
                        	Form::block_help('Ingrese el nombre completo')
					);
				?>
				<?php
					echo Form::control_group(
							Form::label('step4_edad', 'Edad:'),
							Form::text('step4_edad', Step5Form::old('step4_edad')),
							($errors->has('step4_edad')? 'error' : (Step5Form::old('step4_edad')? 'success' : '')),
                        	Form::block_help('Ingrese la edad con numeros')
					);
				?>

				<fieldset>
					<legend style='font-size:16px;'>Lugar de nacimiento</legend>

					<?php
						echo Form::control_group(
								Form::label('step4_ciudad_nacimiento', 'Ciudad:'),
								Form::text('step4_ciudad_nacimiento', Step5Form::old('step4_ciudad_nacimiento')),
								($errors->has('step4_ciudad_nacimiento')? 'error' : (Step5Form::old('step4_ciudad_nacimiento')? 'success' : ''))
						);
					?>

					<?php
                    echo Form::control_group(
                        Form::label('step4_estado_nacimiento', 'Estado:'),
                        Form::select('step4_estado_nacimiento', Step5Form::$estados,Step5Form::old('step4_estado_nacimiento')),
						($errors->has('step4_estado_nacimiento')? 'error' : (Step5Form::old('step4_estado_nacimiento')? 'success' : ''))


                    );
                    	echo Form::control_group(
                       		 	Form::label('step4_estado_otro', 'Otro estado:'),
                        		Form::text('step4_estado_otro',Step5Form::old('step4_estado_otro')),'step4_estado_otro',
                        		Form::block_help('Ingrese el estado')

                    );

						echo Form::control_group(
								Form::label('step4_pais_nacimiento', 'Pa&iacute;s'),
								Form::text('step4_pais_nacimiento', Step5Form::old('step4_pais_nacimiento')),
							($errors->has('step4_pais_nacimiento')? 'error' : (Step5Form::old('step4_pais_nacimiento')? 'success' : ''))

						);
					?>
				</fieldset>
			<hr style='border-bottom: 1px solid #E0E0E0'>

			</div>

			<div class="span5 offset1">


				<?php

					echo Form::control_group(
							Form::label('step4_fecha_nacimiento', 'Fecha de Nacimiento:'),
							Form::date('step4_fecha_nacimiento', Step5Form::old('step4_fecha_nacimiento')),
							($errors->has('step4_fecha_nacimiento')? 'error' : (Step5Form::old('step4_fecha_nacimiento')? 'success' : '')),
							Form::block_help('Ingrese la fecha de nacimiento en el formato dd-mm-aaaa')
					);
				?>
					<hr style='border-bottom: 1px solid #E0E0E0'>
				<?
					echo Form::control_group(
							Form::label('step4_telefono', 'Telefono:'),
							Form::text('step4_telefono', Step5Form::old('step4_telefono')),
							($errors->has('step4_telefono')? 'error' : (Step5Form::old('step4_telefono')? 'success' : '')),
							($errors->has('step4_telefono')? Form::block_help($errors->first('step4_telefono')) : '')
					);

					echo Form::control_group(
							Form::label('step4_celular', 'Celular:'),
							Form::text('step4_celular', Step5Form::old('step4_celular')),
							($errors->has('step4_celular')? 'error' : (Step5Form::old('step4_celular')? 'success' : '')),
							($errors->has('step4_celular')? Form::block_help($errors->first('step4_celular')) : '')
					);
					echo Form::control_group(
							Form::label('step4_email', 'Email:'),
							Form::text('step4_email', Step5Form::old('step4_email')),
							($errors->has('step4_email')? 'error' : (Step5Form::old('step4_email')? 'success' : '')),
							Form::block_help('Ingrese el email en el formato ejemplo@ciudaddelosninos.etc')

					);

				?>

					<hr style='border-bottom: 1px solid #E0E0E0'>

			</div>
		</fieldset>

	</div>
	<div class='row well'>
		<fieldset>
			<legend>Ocupaci&oacute;n del padre</legend>
			<div class="span3 offset1">


			<?

	            echo Form::easy_group(
	                array(
	                'name'    => 'step4op_trabaja_actualmente',
	                'label'   => '¿Trabaja Actualmente?:',
					'values'  => Step5Form::$yesno,
					'errors'  => $errors,
					'class'   => 'step4op_trabaja_actualmente'
	                ),
					'labelled_radios',
					'Step5Form',
					'normal'
				);

	            echo Form::easy_group(
	                array(
	                'name'    => 'step4op_menor_ingreso',
	                'label'   => '¿Esta declarado en el IMSS con menor ingreso?:',
					'values'  => Step5Form::$yesno,
					'errors'  => $errors,
					'class'   => 'step4op_menor_ingreso'
	                ),
					'labelled_radios',
					'Step5Form',
					'normal'
				);
           		?>

			</div>
			<div class="span6 offset1">
			<?
			    echo Form::control_group(
					Form::label('step4op_titulo', 'T&iacute;tulo:'),
					Form::text('step4op_titulo', Step5Form::old('step4op_titulo')),
					($errors->has('step4op_titulo')? 'error' : (Step5Form::old('step4op_titulo')? 'success' : '')),
					Form::block_help('Especifique el titulo')

					);
			?>

			<?
				echo Form::control_group(
					Form::label('step4op_profesion', 'Profesi&oacute;n'),
					Form::text('step4op_profesion', Step5Form::old('step4op_profesion')),
					($errors->has('step4op_profesion')? 'error' : (Step5Form::old('step4op_profesion')? 'success' : '')),
					Form::block_help('Especifique la profesion')

					);
			?>
				<hr style='border-bottom: 1px solid #E0E0E0'>

			</div>
			<div class="trabajaactualmente" {{ (Step5Form::old('step4op_trabaja_actualmente') == 1)? '' : 'style="display:none"' }}>
			<div class="span4">

			<?


				echo Form::control_group(
					Form::label('step4op_cantidad_sueldo', 'Cantidad de sueldo:'),
					Form::text('step4op_cantidad_sueldo', Step5Form::old('step4op_cantidad_sueldo')),
					($errors->has('step4op_cantidad_sueldo')? 'error' : (Step5Form::old('step4op_cantidad_sueldo')? 'success' : ''))

					);
				echo Form::control_group(
					Form::label('step4op_empresa_labora', 'Nombre de la empresa donde labora:'),
					Form::text('step4op_empresa_labora', Step5Form::old('step4op_empresa_labora')),
					($errors->has('step4op_empresa_labora')? 'error' : (Step5Form::old('step4op_empresa_labora')? 'success' : ''))
					);
				echo Form::control_group(
					Form::label('step4op_area_desempeno', '&Aacute;rea en la que se desempe&ntilde;a:'),
					Form::text('step4op_area_desempeno', Step5Form::old('step4op_area_desempeno')),
					($errors->has('step4op_area_desempeno')? 'error' : (Step5Form::old('step4op_area_desempeno')? 'success' : ''))
					);
				echo Form::control_group(
					Form::label('step4op_puesto', '¿Cu&aacute;l es su puesto?:'),
					Form::text('step4op_puesto', Step5Form::old('step4op_puesto'))
					);

				echo Form::control_group(
					Form::label('step4op_salario_integrado', 'Salario mensual integrado:'),
					Form::text('step4op_salario_integrado', Step5Form::old('step4op_salario_integrado')),
					($errors->has('step4op_salario_integrado')? 'error' : (Step5Form::old('step4op_salario_integrado')? 'success' : ''))
					);
				echo Form::control_group(
					Form::label('step4op_anos_antiguedad', 'A&ntilde;os de antiguedad en la empresa:'),
					Form::text('step4op_anos_antiguedad', Step5Form::old('step4op_anos_antiguedad')),
					($errors->has('step4op_anos_antiguedad')? 'error' : (Step5Form::old('step4op_anos_antiguedad')? 'success' : '')),
					Form::block_help('Ingrese las cantidad de a&ntilde;os con un numero entero')


					);
			?>
			</div>
			<div class='span4 offset1'>
			<?
				echo Form::control_group(
					Form::label('step4op_descripcion', 'Descripci&oacute;n de lo que realiza:'),
					Form::textarea('step4op_descripcion', Step5Form::old('step4op_descripcion')),'step4op_descripcion',
					Form::block_help('Describa las actividades que lleva a cabo en la empresa')

					);
			?>
			</div>
		</div>

		</fieldset>
		<hr style='border-bottom: 1px solid #E0E0E0'>

	</div>
		<div class="row well">
			<fieldset>
				<legend>Datos de la empresa</legend>

				<div class='span6'>
					<fieldset>
						<legend style='font-size:16px;'>Direcci&oacute;n de la empresa</legend>
						<div class='span4'>
							<?
							echo Form::control_group(
								Form::label('step4op_calle','Calle:'),
								Form::text('step4op_calle',Step5Form::old('step4op_calle')),
								($errors->has('step4op_calle')? 'error' : (Step5Form::old('step4op_calle')? 'success' : ''))

							);
							echo Form::control_group(
								Form::label('step4op_colonia','Colonia:'),
								Form::text('step4op_colonia',Step5Form::old('step4op_colonia')),
								($errors->has('step4op_colonia')? 'error' : (Step5Form::old('step4op_colonia')? 'success' : ''))

							);

							echo Form::control_group(
								Form::label('step4op_entre_calles','Entre calles:'),
								Form::text('step4op_entre_calles',Step5Form::old('step4op_entre_calles')),
								($errors->has('step4op_calle')? 'error' : (Step5Form::old('step4op_calle')? 'success' : ''))

							);
							?>


						</div>
						<div class='span1'>
							<?
							echo Form::control_group(
								Form::label('step4op_num_calle','No.',array('style'=>'width:25px','class'=>'numcalle')),
								Form::text('step4op_num_calle',Step5Form::old('step4op_num_calle'),array('class'=>'numcallet')),
								($errors->has('step4op_num_calle')? 'error' : (Step5Form::old('step4op_num_calle')? 'success' : ''))

							);
							echo Form::control_group(
								Form::label('step4op_cp','C.P.',array('style'=>'width:25px','class'=>'numcalle')),
								Form::text('step4op_cp',Step5Form::old('step4op_cp'),array('class'=>'numcallet')),
								($errors->has('step4op_cp')? 'error' : (Step5Form::old('step4op_cp')? 'success' : ''))

							);


							?>
						</div>
						<div class= 'span4'>
							<?
							echo Form::control_group(
									Form::label('step4op_ciudad','Ciudad:'),
									Form::text('step4op_ciudad',Step5Form::old('step4op_ciudad'),array('style'=>'width:125px')),
									($errors->has('step4op_ciudad')? 'error' : (Step5Form::old('step4op_ciudad')? 'success' : ''))

							);
							?>


						</div>
						<div class='span1'>

							<?php
                   			 echo Form::control_group(
                    		    Form::label('step4op_estado', 'Estado:',array('style'=>'width:50px','class'=>'omestado')),
                 		       Form::select('step4op_estado', Step5Form::$estados,Step5Form::old('step4op_estado'),array('class'=>'omestados'))
                 		   );
                  			?>

						</div>
					</fieldset>
					<hr style='border-bottom: 1px solid #E0E0E0'>
					<?
		            echo Form::easy_group(
		                array(
		                'name'    => 'step4op_cambio_trabajo',
		                'label'   => '¿Cu&aacute;ntas veces ha cambiado de trabajo en los ultimos 3 a&ntilde;os?:',
						'values'  => Step5Form::$cambiotrabajo,
						'errors'  => $errors,
						'class'   => 'step4op_cambio_trabajo'
		                ),
						'labelled_radios',
						'Step5Form',
						'normal'
					);
					?>
				</div>
				<div class='span4'>
						<?

							echo Form::control_group(
								Form::label('step4op_telefono','Tel&eacute;fono:'),
								Form::text('step4op_telefono',Step5Form::old('step4op_telefono')),
								($errors->has('step4op_telefono')? 'error' : (Step5Form::old('step4op_telefono')? 'success' : ''))

							);

							echo Form::control_group(
								Form::label('step4op_horario','Horario:'),
								Form::text('step4op_horario', Step5Form::old('step4op_horario')),
								($errors->has('step4op_horario')? 'error' : (Step5Form::old('step4op_horario')? 'success' : ''))

							);
					?>

						<?
				            echo Form::easy_group(
				                array(
				                'name'    => 'step4op_dias_descanso',
				                'label'   => 'D&iacute;as de descanso:',
								'values'  => Step5Form::$dias,
								'errors'  => $errors,
								'class'   => 'step4op_dias_descanso'
				                ),
								'labelled_checkboxes',
								'Step5Form',
								'normal'
							);
						?>
						<?
							echo Form::control_group(
								Form::label('step4op_trabajo_anterior','Nombre de la empresa de su trabajo anterior:'),
								Form::text('step4op_trabajo_anterior', Step5Form::old('step4op_trabajo_anterior')),
								($errors->has('step4op_trabajo_anterior')? 'error' : (Step5Form::old('step4op_trabajo_anterior')? 'success' : ''))

							);
						?>

						<?
							echo Form::control_group(
								Form::label('step4op_motivo_separacion','Motivo de la separaci&oacute;n:'),
								Form::text('step4op_motivo_separacion', Step5Form::old('step4op_motivo_separacion')),
								($errors->has('step4op_motivo_separacion')? 'error' : (Step5Form::old('step4op_motivo_separacion')? 'success' : ''))

							);

						?>
							<hr style='border-bottom: 1px solid #E0E0E0'>

				</div>
				<div class='span5'>
			<?
				echo Form::control_group(
					Form::label('step4op_motivo_cambio', 'Si ha cambiado de trabajo, explique el motivo:'),
					Form::textarea('step4op_motivo_cambio', Step5Form::old('step4op_motivo_cambio'))
					);
			?>
				</div>
			</fieldset>
		</div>
	<div class="row">
    	<div class="form-actions">
			<button type="submit" class="btn btn-primary">Siguiente:</button>
           {{ Buttons::link('Atr&aacute;s', URL::to_action('estudio@step_4')) }}

        </div>
	</div>



{{ Form::close() }}

@endsection

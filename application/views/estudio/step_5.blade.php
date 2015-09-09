@layout('layouts/main')

@section('extra-css')
<style type="text/css">
.madre_estado_otro {
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
	if($('#madre_estado_nacimiento').val() == 32) {
		$('.madre_estado_otro').show();
	}
})
    $('#madre_estado_nacimiento').on('change', function() {
        var obj = $(this);
        console.log(obj.val());
        if(obj.val() == 32) {
            $('.madre_estado_otro').show();
        }
        else {
            $('.madre_estado_otro').val('');
            $('.madre_estado_otro').hide();
        }
    })
//
    $('.om_trabaja_actualmente input[type="radio"]').on('change', function() {
        $(".trabajaactualmente").hide();

    })
    $('.om_trabaja_actualmente input[type="radio"][value="1"]').on('change', function() {
        var obj = $(this);
            $(".trabajaactualmente").show();

    })
</script>
@endsection

@section('main-content')
{{ Form::horizontal_open() }}

	<div class='row well'>
		<fieldset>
			<legend>Datos de la madre</legend>
			<div class="span4">

				<?php
					echo Form::control_group(
							Form::label('madre_nombre', 'Nombre:'),
							Form::text('madre_nombre', Step5Form::old('madre_nombre')),
							($errors->has('madre_nombre')? 'error' : (Step5Form::old('madre_nombre')? 'success' : '')),
                        	Form::block_help('Ingrese el nombre completo')
					);
				?>
				<?php
					echo Form::control_group(
							Form::label('madre_edad', 'Edad:'),
							Form::text('madre_edad', Step5Form::old('madre_edad')),
							($errors->has('madre_edad')? 'error' : (Step5Form::old('madre_edad')? 'success' : '')),
                        	Form::block_help('Ingrese la edad con numeros')
					);
				?>

				<fieldset>
					<legend style='font-size:16px;'>Lugar de nacimiento</legend>

					<?php
						echo Form::control_group(
								Form::label('madre_ciudad_nacimiento', 'Ciudad:'),
								Form::text('madre_ciudad_nacimiento', Step5Form::old('madre_ciudad_nacimiento')),
								($errors->has('madre_ciudad_nacimiento')? 'error' : (Step5Form::old('madre_ciudad_nacimiento')? 'success' : ''))
						);
					?>

					<?php
                    echo Form::control_group(
                        Form::label('madre_estado_nacimiento', 'Estado:'),
                        Form::select('madre_estado_nacimiento', Step5Form::$estados,Step5Form::old('madre_estado_nacimiento')),
						($errors->has('madre_estado_nacimiento')? 'error' : (Step5Form::old('madre_estado_nacimiento')? 'success' : ''))


                    );
                    	echo Form::control_group(
                       		 	Form::label('madre_estado_otro', 'Otro estado:'),
                        		Form::text('madre_estado_otro',Step5Form::old('madre_estado_otro')),'madre_estado_otro',
                        		Form::block_help('Ingrese el estado')

                    );

						echo Form::control_group(
								Form::label('madre_pais_nacimiento', 'Pa&iacute;s'),
								Form::text('madre_pais_nacimiento', Step5Form::old('madre_pais_nacimiento')),
							($errors->has('madre_pais_nacimiento')? 'error' : (Step5Form::old('madre_pais_nacimiento')? 'success' : ''))

						);
					?>
				</fieldset>
			<hr style='border-bottom: 1px solid #E0E0E0'>

			</div>

			<div class="span5 offset1">


				<?php

					echo Form::control_group(
							Form::label('madre_fecha_nacimiento', 'Fecha de Nacimiento:'),
							Form::date('madre_fecha_nacimiento', Step5Form::old('madre_fecha_nacimiento')),
							($errors->has('madre_fecha_nacimiento')? 'error' : (Step5Form::old('madre_fecha_nacimiento')? 'success' : '')),
							Form::block_help('Ingrese la fecha de nacimiento en el formato dd-mm-aaaa')
					);
				?>
					<hr style='border-bottom: 1px solid #E0E0E0'>
				<?
					echo Form::control_group(
							Form::label('madre_telefono', 'Telefono:'),
							Form::text('madre_telefono', Step5Form::old('madre_telefono')),
							($errors->has('madre_telefono')? 'error' : (Step5Form::old('madre_telefono')? 'success' : '')),
							($errors->has('madre_telefono')? Form::block_help($errors->first('madre_telefono')) : '')
					);

					echo Form::control_group(
							Form::label('madre_celular', 'Celular:'),
							Form::text('madre_celular', Step5Form::old('madre_celular')),
							($errors->has('madre_celular')? 'error' : (Step5Form::old('madre_celular')? 'success' : '')),
							($errors->has('madre_celular')? Form::block_help($errors->first('madre_celular')) : '')
					);
					echo Form::control_group(
							Form::label('madre_email', 'Email:'),
							Form::text('madre_email', Step5Form::old('madre_email')),
							($errors->has('madre_email')? 'error' : (Step5Form::old('madre_email')? 'success' : '')),
							Form::block_help('Ingrese el email en el formato ejemplo@ciudaddelosninos.etc')

					);

				?>

					<hr style='border-bottom: 1px solid #E0E0E0'>

			</div>
		</fieldset>

	</div>
	<div class='row well'>
		<fieldset>
			<legend>Ocupaci&oacute;n de la madre</legend>
			<div class="span3 offset1">


			<?

	            echo Form::easy_group(
	                array(
	                'name'    => 'om_trabaja_actualmente',
	                'label'   => '¿Trabaja Actualmente?:',
					'values'  => Step5Form::$yesno,
					'errors'  => $errors,
					'class'   => 'om_trabaja_actualmente'
	                ),
					'labelled_radios',
					'Step5Form',
					'normal'
				);

	            echo Form::easy_group(
	                array(
	                'name'    => 'om_menor_ingreso',
	                'label'   => '¿Esta declarado en el IMSS con menor ingreso?:',
					'values'  => Step5Form::$yesno,
					'errors'  => $errors,
					'class'   => 'om_menor_ingreso'
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
					Form::label('om_titulo', 'T&iacute;tulo:'),
					Form::text('om_titulo', Step5Form::old('om_titulo')),
					($errors->has('om_titulo')? 'error' : (Step5Form::old('om_titulo')? 'success' : '')),
					Form::block_help('Especifique el titulo')

					);
			?>

			<?
				echo Form::control_group(
					Form::label('om_profesion', 'Profesi&oacute;n'),
					Form::text('om_profesion', Step5Form::old('om_profesion')),
					($errors->has('om_profesion')? 'error' : (Step5Form::old('om_profesion')? 'success' : '')),
					Form::block_help('Especifique la profesion')

					);
			?>
				<hr style='border-bottom: 1px solid #E0E0E0'>

			</div>
			<div class="trabajaactualmente" {{ (Step5Form::old('om_trabaja_actualmente') == 1)? '' : 'style="display:none"' }}>
			<div class="span4">

			<?


				echo Form::control_group(
					Form::label('om_cantidad_sueldo', 'Cantidad de sueldo:'),
					Form::text('om_cantidad_sueldo', Step5Form::old('om_cantidad_sueldo')),
					($errors->has('om_cantidad_sueldo')? 'error' : (Step5Form::old('om_cantidad_sueldo')? 'success' : ''))

					);
				echo Form::control_group(
					Form::label('om_empresa_labora', 'Nombre de la empresa donde labora:'),
					Form::text('om_empresa_labora', Step5Form::old('om_empresa_labora')),
					($errors->has('om_empresa_labora')? 'error' : (Step5Form::old('om_empresa_labora')? 'success' : ''))
					);
				echo Form::control_group(
					Form::label('om_area_desempeno', '&Aacute;rea en la que se desempe&ntilde;a:'),
					Form::text('om_area_desempeno', Step5Form::old('om_area_desempeno')),
					($errors->has('om_area_desempeno')? 'error' : (Step5Form::old('om_area_desempeno')? 'success' : ''))
					);
				echo Form::control_group(
					Form::label('om_puesto', '¿Cu&aacute;l es su puesto?:'),
					Form::text('om_puesto', Step5Form::old('om_puesto'))
					);

				echo Form::control_group(
					Form::label('om_salario_integrado', 'Salario mensual integrado:'),
					Form::text('om_salario_integrado', Step5Form::old('om_salario_integrado')),
					($errors->has('om_salario_integrado')? 'error' : (Step5Form::old('om_salario_integrado')? 'success' : ''))
					);
				echo Form::control_group(
					Form::label('om_anos_antiguedad', 'A&ntilde;os de antiguedad en la empresa:'),
					Form::text('om_anos_antiguedad', Step5Form::old('om_anos_antiguedad')),
					($errors->has('om_anos_antiguedad')? 'error' : (Step5Form::old('om_anos_antiguedad')? 'success' : '')),
					Form::block_help('Ingrese las cantidad de a&ntilde;os con un numero entero')


					);
			?>
			</div>
			<div class='span4 offset1'>
			<?
				echo Form::control_group(
					Form::label('om_descripcion', 'Descripci&oacute;n de lo que realiza:'),
					Form::textarea('om_descripcion', Step5Form::old('om_descripcion')),'om_descripcion',
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
								Form::label('om_calle','Calle:'),
								Form::text('om_calle',Step5Form::old('om_calle')),
								($errors->has('om_calle')? 'error' : (Step5Form::old('om_calle')? 'success' : ''))

							);
							echo Form::control_group(
								Form::label('om_colonia','Colonia:'),
								Form::text('om_colonia',Step5Form::old('om_colonia')),
								($errors->has('om_colonia')? 'error' : (Step5Form::old('om_colonia')? 'success' : ''))

							);

							echo Form::control_group(
								Form::label('om_entre_calles','Entre calles:'),
								Form::text('om_entre_calles',Step5Form::old('om_entre_calles')),
								($errors->has('om_calle')? 'error' : (Step5Form::old('om_calle')? 'success' : ''))

							);
							?>


						</div>
						<div class='span1'>
							<?
							echo Form::control_group(
								Form::label('om_num_calle','No.',array('style'=>'width:25px','class'=>'numcalle')),
								Form::text('om_num_calle',Step5Form::old('om_num_calle'),array('class'=>'numcallet')),
								($errors->has('om_num_calle')? 'error' : (Step5Form::old('om_num_calle')? 'success' : ''))

							);
							echo Form::control_group(
								Form::label('om_cp','C.P.',array('style'=>'width:25px','class'=>'numcalle')),
								Form::text('om_cp',Step5Form::old('om_cp'),array('class'=>'numcallet')),
								($errors->has('om_cp')? 'error' : (Step5Form::old('om_cp')? 'success' : ''))

							);


							?>
						</div>
						<div class= 'span4'>
							<?
							echo Form::control_group(
									Form::label('om_ciudad','Ciudad:'),
									Form::text('om_ciudad',Step5Form::old('om_ciudad'),array('style'=>'width:125px')),
									($errors->has('om_ciudad')? 'error' : (Step5Form::old('om_ciudad')? 'success' : ''))

							);
							?>


						</div>
						<div class='span1'>

							<?php
                   			 echo Form::control_group(
                    		    Form::label('om_estado', 'Estado:',array('style'=>'width:50px','class'=>'omestado')),
                 		       Form::select('om_estado', Step5Form::$estados,Step5Form::old('om_estado'),array('class'=>'omestados'))
                 		   );
                  			?>

						</div>
					</fieldset>
					<hr style='border-bottom: 1px solid #E0E0E0'>
					<?
		            echo Form::easy_group(
		                array(
		                'name'    => 'om_cambio_trabajo',
		                'label'   => '¿Cu&aacute;ntas veces ha cambiado de trabajo en los ultimos 3 a&ntilde;os?:',
						'values'  => Step5Form::$cambiotrabajo,
						'errors'  => $errors,
						'class'   => 'om_cambio_trabajo'
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
								Form::label('om_telefono','Tel&eacute;fono:'),
								Form::text('om_telefono',Step5Form::old('om_telefono')),
								($errors->has('om_telefono')? 'error' : (Step5Form::old('om_telefono')? 'success' : ''))

							);

							echo Form::control_group(
								Form::label('om_horario','Horario:'),
								Form::text('om_horario', Step5Form::old('om_horario')),
								($errors->has('om_horario')? 'error' : (Step5Form::old('om_horario')? 'success' : ''))

							);
					?>

						<?
				            echo Form::easy_group(
				                array(
				                'name'    => 'om_dias_descanso',
				                'label'   => 'D&iacute;as de descanso:',
								'values'  => Step5Form::$dias,
								'errors'  => $errors,
								'class'   => 'om_dias_descanso'
				                ),
								'labelled_checkboxes',
								'Step5Form',
								'normal'
							);
						?>
						<?
							echo Form::control_group(
								Form::label('om_trabajo_anterior','Nombre de la empresa de su trabajo anterior:'),
								Form::text('om_trabajo_anterior', Step5Form::old('om_trabajo_anterior')),
								($errors->has('om_trabajo_anterior')? 'error' : (Step5Form::old('om_trabajo_anterior')? 'success' : ''))

							);
						?>

						<?
							echo Form::control_group(
								Form::label('om_motivo_separacion','Motivo de la separaci&oacute;n:'),
								Form::text('om_motivo_separacion', Step5Form::old('om_motivo_separacion')),
								($errors->has('om_motivo_separacion')? 'error' : (Step5Form::old('om_motivo_separacion')? 'success' : ''))

							);

						?>
							<hr style='border-bottom: 1px solid #E0E0E0'>

				</div>
				<div class='span5'>
			<?
				echo Form::control_group(
					Form::label('om_motivo_cambio', 'Si ha cambiado de trabajo, explique el motivo:'),
					Form::textarea('om_motivo_cambio', Step5Form::old('om_motivo_cambio'))
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

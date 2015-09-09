<?
Form::macro('step9_1_semanal', function($data = array()) {
	$data['label'] = isset($data['label'])? $data['label'] : Str::title($data['name']);
	$data['name'] = "step9_1_semanal_{$data['name']}";
	$errors = (isset($data['errors']))? $data['errors'] : new \Laravel\Messages;
	$input_controller = 'Step9Form';
	$old = $input_controller::old($data['name'], array('',''));
	$control_group  = "<div class=\"control-group ".($errors->has($data['name'])? 'error' : ($input_controller::old($data['name'])? 'success' : '' ))."\">";
	$control_group .= "<label class=\"control-label\" for=\"{$data['name']}[]\">{$data['label']}</label>";
	$control_group .= "<div class=\"controls controls-row\">";
	$control_group .= ' '.Form::mini_text(
		"{$data['name']}[]",
		$old[0],
		array('placeholder' => 'Consumo'));
	$control_group .= ' '.Form::prepend(
		Form::mini_text(
			"{$data['name']}[]",
			$old[1],
			array('placeholder' => 'Gasto')),
		'$');
	$control_group .= "<p class=\"help-block\">".($errors->has($data['name'])? Form::block_help($errors->first($data['name'])) : '' )."</p>";
	$control_group .= "</div>";
	$control_group .= "</div>";
	return $control_group;
});
Form::macro('step9_1_servicios', function($data = array()) {
	$data['label'] = isset($data['label'])? $data['label'] : Str::title($data['name']);
	$data['name'] = "step9_1_servicios_{$data['name']}";
	$errors = (isset($data['errors']))? $data['errors'] : new \Laravel\Messages;
	$input_controller = 'Step9Form';
	$old_val = $input_controller::old("{$data['name']}", array());
	$control_group  = "<div class=\"control-group";
	$control_group .= ($errors->has($data['name'])? ' error' : (($old_val)? ' success' : '' ));
	$control_group .= "\">";
	$control_group .= "<label class=\"control-label\" for=\"{$data['name']}[0]\">{$data['label']}</label>";
	$control_group .= "<div class=\"controls controls-row\">";
	$control_group .= ' '.Form::mini_text(
		"{$data['name']}[]",
		(isset($old_val[0])? $old_val[0] : ''),
		array('placeholder' => 'Tiene'));
	$control_group .= ' '.Form::prepend(
		Form::mini_text(
			"{$data['name']}[]",
			(isset($old_val[1])? $old_val[1] : ''),
			array('placeholder' => 'Mensual')),
		'$');
	$control_group .= ' '.Form::prepend(
		Form::mini_text(
			"{$data['name']}[]",
			(isset($old_val[2])? $old_val[2] : ''),
			array('placeholder' => 'Adeudos')),
		'$');
	$control_group .= "<p class=\"help-block\">".($errors->has($data['name'])? Form::block_help($errors->first($data['name'])) : '' )."</p>";
	$control_group .= "</div>";
	$control_group .= "</div>";
	return $control_group;
});
?>
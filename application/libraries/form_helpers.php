<?
Form::macro('labelled_radios', function($name, $values, $attributes=array())
{
	$radios = '';
	$attributes['default'] = (isset($attributes['default']))? $attributes['default'] : -1;
	foreach($values as $key => $label) {
		$radios .= Form::labelled_radio($name, $label, $key, ($key==$attributes['default']), $attributes);
	}
	return $radios;
});

Form::macro('labelled_checkboxes', function($name, $values, $attributes=array())
{
	$check = '';
	$attributes['default'] = (isset($attributes['default']))? $attributes['default'] : -1;
	foreach($values as $key => $label) {
		$check .= Form::labelled_checkbox($name, $label, $key, ($key==$attributes['default']));
	}
	return $check;
});
Form::macro('inline_labelled_radios', function($name, $values, $attributes=array())
{
	$radios = '';
	$attributes['default'] = (isset($attributes['default']))? $attributes['default'] : -1;
	foreach($values as $key => $label) {
		$radios .= Form::inline_labelled_radio($name, $label, $key, ($key==$attributes['default']));
	}
	return $radios;
});

Form::macro('inline_labelled_checkboxes', function($name, $values, $attributes=array())
{
	$check = '';
	$attributes['default'] = (isset($attributes['default']))? $attributes['default'] : -1;
	foreach($values as $key => $label) {
		$check .= Form::inline_labelled_checkbox($name, $label, $key, ($key==$attributes['default']));
	}
	return $check;
});

/**
 * Easy control_groups for bootstrapper
 * @param Array $data [should include:
 * - name    : field name
 * - label   : label caption
 * - values  : default values for the input
 * - errors  : optional errors parameters for including validation
 * - class   : class to apply to the control group
 * - block   : block_help text
 * - prepend : stirng to prepend]
 * @param String $type [Input type]
 * @param String $input_controller [if using a different Input controller
 * (like when working with bundles) it should be specified here]
 * @param String $input_size [If a specific size should be applied to $type. I.e. small_text
 * it should only be passed the size, there is no need for the "_" at the end]
 * @return [String]
 */
Form::macro('easy_group', function($data = array(), $type = 'text', $input_controller = 'Input', $input_size = '') {
	$errors = (isset($data['errors']))? $data['errors'] : new \Laravel\Messages;
	$input_size = (Str::length($input_size) > 0)? (ends_with($input_size, '_')? $input_size : $input_size.'_') : '';

	///////////////////////////////////////////////////
	// Validate all fields are set or at least empty //
	///////////////////////////////////////////////////
	$data['name']    = isset($data['name'])? $data['name'] : 'input01';
	$data['label']   = isset($data['label'])? $data['label'] : Str::title($data['name']);
	$data['block']   = isset($data['block'])? $data['block'] : '';
	$data['class']   = isset($data['class'])? $data['class'] : '';
	$data['values']  = isset($data['values'])? $data['values'] : '';
	$data['class']   = isset($data['class'])? $data['class'] : '';
	$data['prepend'] = isset($data['prepend'])? $data['prepend'] : '';

	switch($type) {
		case 'labelled_radios':
		case 'inline_labelled_radios':
		case 'labelled_checkboxes':
		case 'inline_labelled_checkboxes':
			$input_element  = Form::$type($data['name'], $data['values'], array('default' => $input_controller::old($data['name'])));
			$control_class  = ($errors->has($data['name'])? ' error' : ($input_controller::old($data['name'])? ' success' : '' ));
			$control_errors = ($errors->has($data['name'])? Form::block_help($errors->first($data['name'])) : '' );
			break;
		case 'prepend':
			$input_size    .= 'text';
			$input_element  = Form::$type(Form::$input_size($data['name'], $input_controller::old($data['name'], $data['values'])), $data['prepend']);
			$control_class  = ($errors->has($data['name'])? ' error' : ($input_controller::old($data['name'])? ' success' : '' ));
			$control_errors = ($errors->has($data['name'])? Form::block_help($errors->first($data['name'])) : '' );
			break;
		case 'select':
			$input_size    .= $type;
			$input_element  = Form::$input_size($data['name'], $data['values'], $input_controller::old($data['name'], ''));
			$control_class  = ($errors->has($data['name'])? ' error' : ($input_controller::old($data['name'])? ' success' : '' ));
			$control_errors = ($errors->has($data['name'])? Form::block_help($errors->first($data['name'])) : '' );
			break;
		default:
			$input_size    .= $type;
			$input_element  = Form::$input_size($data['name'], $input_controller::old($data['name'], $data['values']));
			$control_class  = ($errors->has($data['name'])? ' error' : ($input_controller::old($data['name'])? ' success' : '' ));
			$control_errors = ($errors->has($data['name'])? Form::block_help($errors->first($data['name'])) : '' );
			break;
	}
	return Form::control_group(
				Form::label($data['name'], $data['label']),
				$input_element,
				$data['class'].$control_class,
				$control_errors
				.Form::block_help($data['block'])
			);
});

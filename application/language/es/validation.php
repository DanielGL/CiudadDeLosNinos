<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validaciones del lenguaje.
	|--------------------------------------------------------------------------
	|
	| Las siguientes lineas del lenguaje contienen  los mensajes de errores por default que son usadas
	| por el validador de clases. Algunas de estas reglas contienen multiples versiones como
	| el tamaño(max,min,between). De igual manera algunas son usadas para diferentes tipos de entradas (inputs)
	| como strings y archivos.
	|
	| Además, estas lineas pueden ser fácilmente cambiadas para generar mensajes personalizados de errores en tu aplicación
	| Los mensajes de validaciones de errores tmbn pueden cambiar al igual que las reglas, asi que sientete libre de hacerlo.
	|
	|
	*/

	"accepted"       => "El :attribute debe ser aceptado.",
	"active_url"     => "El :attribute no es una URL v&aacute;lida.",
	"after"          => "El :attribute debe ser una fecha despu&eacute; de :date.",
	"alpha"          => "El :attribute s&oacute;lo debe tener letras.",
	"alpha_dash"     => "El :attribute s&oacute;lo debe contener letras, n&uacute;meros y guiones.",
	"alpha_num"      => "El :attribute s&oacute;lo debe contener letras y n&uacute;meros.",
	"before"         => "El :attribute debe ser una fecha antes de :date.",
	"between"        => array(
		"numeric" => "El :attribute debe estar entre :min - :max.",
		"file"    => "El :attribute debe estar entre :min - :max kilobytes.",
		"string"  => "El :attribute debe estar entre :min - :max characters.",
	),
	"confirmed"      => "El :attribute de confirmaci&oacute;n no coincide.",
	"different"      => "El :attribute y :oElr deben ser diferentes.",
	"email"          => "El :attribute formato no es v&aacute;lido.",
	"exists"         => "El :attribute no es v&aacute;lido.",
	"image"          => "El :attribute debe ser una imagen.",
	"in"             => "El :attribute  seleccionado no es v&aacute;lido.",
	"integer"        => "El :attribute debe ser un entero.",
	"ip"             => "El :attribute debe ser una direcci&oacute;n de IP v&aacute;lida.",
	"match"          => "El formato de :attribute no es v&aacute;lido.",
	"max"            => array(
		"numeric" => "El :attribute debe ser menor que :max.",
		"file"    => "El :attribute debe ser menor que :max kilobytes.",
		"string"  => "El :attribute debe ser menor que :max characters.",
	),
	"mimes"          => "El :attribute debe ser un archivo de tipo type: :values.",
	"min"            => array(
		"numeric" => "El :attribute debe ser al menos :min.",
		"file"    => "El :attribute debe ser al menos :min kilobytes.",
		"string"  => "El :attribute debe ser al menos :min characters.",
	),
	"not_in"         => "El :attribute  seleccionado no es v&aacute;lido.",
	"numeric"        => "El :attribute debe ser un n&uacute;mero.",
	"required"       => "El :attribute del campo es requerido.",
	"same"           => "El :attribute y :oElr deben coincidir.",
	"size"           => array(
		"numeric" => "El :attribute debe ser del tama&ntilde;o :size.",
		"file"    => "El :attribute debe ser del tama&ntilde;o :size kilobyte.",
		"string"  => "El :attribute debe ser del tama&ntilde;o :size characters.",
	),
	"unique"         => "El :attribute ya est&aacute; siendo usado.",
	"url"            => "El formato de :attribute es inv&aacute;lido.",

	/*
	|--------------------------------------------------------------------------
	| Validaciones del lenguaje personalizadas.
	|--------------------------------------------------------------------------
	| Aqui se especifican las validaciones personalizadas para los atributos que
	| usan la convencion "attribute_rule" para nombrar las lineas. Esto ayuda a mantener
	| tus validaciones limpias y listas.
	|
	| Digamos que quieres usar una validación personalizada para comprobar que el atributo "email"
	| sea de caracter único. Sólo debes agregar "email_unique" al arreglo cuando lo personalices.
	| y el validador hará el resto como magia. ;)
	|
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Atributos de validación
	|--------------------------------------------------------------------------
	| Las siguientes lineas de código se usan para cambiar entre los place-holders
	| por algo más amigable de leer como "dirección de E-mail" en lugar de "email". Tu equipo lo agradecerá baby ;).
	|
	| El validador de clases automaticamente buscará estas lineas del arreglo y lo reemplazará por el place-holder
	| en el mensaje. Es muy simple, creemos que te gustará.
	|
	|
	*/

	'attributes' => array(),

);
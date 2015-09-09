<?php

class Step6Form extends FormBaseModel\Base {
    public static $rules = array(
        'step6_nombre1'        => '',
        'step6_edad1'          => '',
        'step6_ocupacion1'     => '',
        'step6_nombreempresa1' => '',
        'step6_horario1'       => '',
        'step6_laborar1'       => '',
        'step6_parentesco1'    => '',
        'step6_otro1'          => '',
        'step6_salario'        => '',
        'step6_cantidad1'      => '',
        'step6_nombre2'        => '',
        'step6_edad2'          => '',
        'step6_ocupacion2'     => '',
        'step6_nombreempresa2' => '',
        'step6_horario2'       => '',
        'step6_laborar2'       => '',
        'step6_parentesco2'    => '',
        'step6_otro2'          => '',
        'step6_salario2'       => '',
        'step_cantidad2'       => '',
        'step6_nombre3'        => '',
        'step6_edad3'          => '',
        'step6_ocupacion3'     => '',
        'step6_nombreempresa3' => '',
        'step6_horario3'       => '',
        'step6_laborar3'       => '',
        'step6_parentesco3'    => '',
        'step6_otro3'          => '',
        'step6_salario3'       => '',
        'step_cantidad3'       => ''
        );

    public static $horario1= array(
            0 => 'Tiempo Completo',
            1 => 'Medio Tiempo',
            2 => 'Por turnos'
            );

    public static $parentesco1= array(
            1=> 'Hermano(a)',
            2=> 'Tío',
            3=> 'Tía',
            4=> 'Amigo',
            5=> 'Otro ¿Quién?'
            );
    public static $horario2= array(
            0=> 'Tiempo Completo',
            1=> 'Medio Tiempo',
            2=> 'Por turnos'
            );

    public static $parentesco2= array(
            1=> 'Hermano(a)',
            2=> 'Tío',
            3=> 'Tía',
            4=> 'Amigo',
            5=> 'Otro ¿Quién?'
            );
    public static $horario3= array(
            0=> 'Tiempo Completo',
            1=> 'Medio Tiempo',
            2=> 'Por turnos'
            );

    public static $parentesco3= array(
            1=> 'Hermano(a)',
            2=> 'Tío',
            3=> 'Tía',
            4=> 'Amigo',
            5=> 'Otro ¿Quién?'
            );

}
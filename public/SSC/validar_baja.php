<?php
//Hacer conexion
$mysqli = new mysqli("localhost", "root", "", "mydb");

$tipo= $_GET['tipo'];

//Comprobar si hay resultados buscando por el nombre
if($tipo=="nombre"){
	$apellidoPalumno= $_GET['apellidoPaterno'];
	$apellidoMalumno= $_GET['apellidoMaterno'];
	$nombre_alum= $_GET['nombre'];
	
	$stmt = $mysqli->prepare("SELECT COUNT(nombre) FROM Alumno WHERE nombre=? AND apellidoPaterno=? and apellidoMaterno=? ");
	$stmt->bind_param('sss', $nombre_alum, $apellidoPalumno, $apellidoMalumno);
	$stmt->execute();
	$stmt->bind_result($resultado);
	$stmt->fetch();
	$stmt->close();
	}

//Comprobar si hay resultados buscando por la clave	
else if($tipo=="clave"){
	$clave= $_GET['clave'];

	$stmt = $mysqli->prepare("SELECT COUNT(nombre) FROM Alumno WHERE idAlumno=?");
	$stmt->bind_param('i', $clave);
	$stmt->execute();
	$stmt->bind_result($resultado);
	$stmt->fetch();
	$stmt->close();
	
	}

//Regresar si se regreso un resultado (0: no se encontro)
echo $resultado;
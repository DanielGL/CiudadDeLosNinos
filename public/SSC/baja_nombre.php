<?php

$mysqli = new mysqli("localhost", "root", "", "mydb");

//Obtener valores
$apellidoPalumno= $_POST['apellido_paterno_alumno'];
$apellidoMalumno= $_POST['apellido_materno_alumno'];
$nombreAlum= $_POST['nombre_alumno'];

//Realizar primer query: sexo del alumno
$stmt = $mysqli->prepare("SELECT sexo FROM Alumno WHERE nombre=? AND apellidoPaterno=? and apellidoMaterno=? ");
$stmt->bind_param('sss', $nombreAlum, $apellidoPalumno, $apellidoMalumno);
$stmt->execute();
$stmt->bind_result($sexo);
$stmt->fetch();
$stmt->close();

//Realizar segundo query: cambiar status
$stmt2 = $mysqli->prepare("UPDATE Alumno SET estatus='baja' WHERE nombre=? AND apellidoPaterno=? and apellidoMaterno=?");
$stmt2->bind_param('sss', $nombreAlum, $apellidoPalumno, $apellidoMalumno);
$stmt2->execute();
$stmt2->fetch();
$stmt2->close();

//Realizar tercer query: actualizar vacantes
//Checar si es hombre o mujer

if($sexo == "varon"){
$stmt3 =$mysqli->prepare("UPDATE Vacantes SET hombres = hombres + 1 WHERE grado =(SELECT grado FROM ALUMNO WHERE nombre = ? 
			  AND apellidoPaterno = ? AND apellidoMaterno=?)");	 
}
else if($sexo == "mujer"){
$stmt3 =$mysqli->prepare("UPDATE Vacantes SET mujeres = mujeres + 1 WHERE grado =(SELECT grado FROM ALUMNO WHERE nombre = ? 
			  AND apellidoPaterno = ? AND apellidoMaterno=?)" );			  
}
$stmt3->bind_param('sss', $nombreAlum, $apellidoPalumno, $apellidoMalumno);
$stmt3->execute();
$stmt3->close();

//Redireccionar

Header("Location: bajacorrecta.html"); 
	
?>
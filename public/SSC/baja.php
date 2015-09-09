<?php

$mysqli = new mysqli("localhost", "root", "", "mydb");

//Obtener valores
$apellidoPalumno= $_POST['apellido_paterno_alumno'];
$apellidoMalumno= $_POST['apellido_materno_alumno'];
$nombre_alum= $_POST['nombre_alumno'];
$grado= $_POST['grado'];

//Realizar primer query: sexo del alumno
$stmt = $mysqli->prepare("SELECT sexo FROM Alumno WHERE nombre=? AND apellidoPaterno=? and apellidoMaterno=? ");
$stmt->bind_param('sss', $nombre_alum, $apellidoPalumno, $apellidoMalumno);
$stmt->execute();
$stmt->bind_result($sexo);
$stmt->fetch();
$stmt->close();

//Realizar segundo query: cambiar status
$stmt2 = $mysqli->prepare("UPDATE Alumno SET estatus='baja' WHERE nombre=? AND apellidoPaterno=? and apellidoMaterno=?");
$stmt2->bind_param('sss', $nombre_alum, $apellidoPalumno, $apellidoMalumno);
$stmt2->execute();
$stmt2->bind_result($result);
$stmt2->fetch();
$stmt2->close();

//Realizar tercer query: actualizar vacantes
//Checar si es hombre o mujer
if($sexo == "varon"){
$stmt3 =$mysqli->prepare("UPDATE Vacantes SET hombres = hombres + 1 WHERE grado =(SELECT grado FROM ALUMNO WHERE nombre = ? 
			  AND apellidoPaterno = ? AND apellidoMaterno=?)");	 
}
if($sexo == "mujer"){
$stmt3 =$mysqli->prepare("UPDATE Vacantes SET mujeres = mujeres + 1 WHERE grado =(SELECT grado FROM ALUMNO WHERE nombre = ? 
			  AND apellidoPaterno = ? AND apellidoMaterno=?)" );			  
}
$stmt3->bind_param('sss', $nombre_alum, $apellidoPalumno, $apellidoMalumno);
$stmt3->execute();
$stmt3->close();

echo $result;
//Checar si el query fue true
/*if ($result) //Si se encontro resultados en los querys
	Header("Location: bajacorrecta.html"); 
	else
	Header("Location: bajaincorrecta.html"); 
*/
?>
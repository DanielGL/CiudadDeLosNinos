<?php

$mysqli = new mysqli("localhost", "root", "", "mydb");

//Obtener valores
$clave= $_POST['clave'];

//Realizar primer query: sexo del alumno
$stmt = $mysqli->prepare("SELECT sexo FROM Alumno WHERE idAlumno=?");
$stmt->bind_param('i', $clave);
$stmt->execute();
$stmt->bind_result($sexo);
$stmt->fetch();
$stmt->close();

//Realizar segundo query: cambiar status
$stmt2 = $mysqli->prepare("UPDATE Alumno SET estatus='baja' WHERE idAlumno=?");
$stmt2->bind_param('i', $clave);
$stmt2->execute();
$stmt2->fetch();
$stmt2->close();

//Realizar tercer query: actualizar vacantes
//Checar si es hombre o mujer

if($sexo == "varon"){
$stmt3 =$mysqli->prepare("UPDATE Vacantes SET hombres = hombres + 1 WHERE grado =(SELECT grado FROM ALUMNO WHERE idAlumno=?)");	 
}
else if($sexo == "mujer"){
$stmt3 =$mysqli->prepare("UPDATE Vacantes SET mujeres = mujeres + 1 WHERE grado =(SELECT grado FROM ALUMNO WHERE idAlumno=?)");			  
}
$stmt3->bind_param('i', $clave);
$stmt3->execute();
$stmt3->close();



//Redireccionar
Header("Location: bajacorrecta.html"); 
	
?>
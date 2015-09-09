<?php



$mysqli = new mysqli("localhost", "root", "", "mydb");

$dia_solicitud= $_POST['dia_solicitud'];
$mes_solicitud= $_POST['mes_solicitud'];
$ano_solicitud= $_POST['ano_solicitud'];
$dia_ingreso= $_POST['dia_ingreso'];
$mes_ingreso= $_POST['mes_ingreso'];
$ano_ingreso= $_POST['ano_ingreso'];
$hijos= $_POST['hijos'];
$apellidoPaterno= $_POST['apellidoPaternoAlumno'];
$apellidoMaterno= $_POST['apellidoMaternoAlumno'];
$nombre_alum= $_POST['nombre_alumno'];
$dia_nacimiento= $_POST['dia_nacimiento'];
$mes_nacimiento= $_POST['mes_nacimiento'];
$ano_nacimiento= $_POST['ano_nacimiento'];
$edad= $_POST['edad'];
$municipio= $_POST['municipio'];
$estado= $_POST['estado'];
$pais= $_POST['pais'];
$curp= $_POST['curp'];
$sexo= $_POST['sexo'];
$nivel_estudio= $_POST['nivel_estudio'];
$grado= $_POST['grado'];
$escuela_anterior= $_POST['escuela_procedencia'];
$calleEscuela= $_POST['calle_escuela'];
$coloniaEscuela= $_POST['colonia_escuela'];
$calle= $_POST['calle'];
$numero= $_POST['numero'];
$entreCalles= $_POST['entre_calles'];
$colonia= $_POST['colonia'];
$cp= $_POST['cp'];
$ciudad_dom= $_POST['ciudad_domicilio'];
$estado_dom= $_POST['estado_domicilio'];
$telefono= $_POST['telefono'];
$celular= $_POST['celular'];
$email= $_POST['email'];
$apellidoPpadre= $_POST['apellido_paterno_padre'];
$apellidoMpadre= $_POST['apellido_materno_padre'];
$nombrePadre= $_POST['nombre_padre'];
$estadoPadre= $_POST['edcivil_padre'];
$edadPadre= $_POST['edad_padre'];
$telefono_padre= $_POST['telefono_padre'];
$oficioPadre= $_POST['oficio_padre'];
$ingreso_padre= $_POST['ingreso_padre'];
$ano_nacimiento= $_POST['ano_nacimiento'];
$empresa_padre= $_POST['empresa_padre'];
$apellidoPmadre= $_POST['apellido_paterno_madre'];
$apellidoMmadre= $_POST['apellido_materno_madre'];
$nombreMadre= $_POST['nombre_madre'];
$estadoMadre= $_POST['edcivil_madre'];
$edadMadre= $_POST['edad_madre'];
$telefono_madre= $_POST['telefono_madre'];
$oficioMadre= $_POST['oficio_madre'];
$ingreso_madre= $_POST['ingreso_madre'];
$empresa_madre= $_POST['empresa_madre'];
$discapacidad= $_POST['discapacidad'];
$publicidad= $_POST['publicidad'];
$calificacion= $_POST['ultima_calificacion'];
$fechaDeNacimiento= $ano_nacimiento."-".$mes_nacimiento."-".$dia_nacimiento;
$fechaDeSolicitud= $ano_solicitud."-".$mes_solicitud."-".$dia_solicitud; 
$fechaDeIngreso= $ano_ingreso."-".$mes_ingreso."-".$dia_ingreso;


if($sexo=='varon'){
	$space= $mysqli->prepare("SELECT hombres FROM Vacantes WHERE grado=?");
	$space->bind_param('i',$grado);
	$space->execute();
	$space->bind_result($espacio);
	$space->fetch();
	$space->close();
}
else if($sexo=='mujer'){
	$space= $mysqli->prepare("SELECT mujeres FROM Vacantes WHERE grado=?");
	$space->bind_param('i',$grado);
	$space->execute();
	$space->bind_result($espacio);
	$space->fetch();
	$space->close();
}



if($calificacion<8){
	$rechazo='calificacion';
}


if($ingreso_madre>10000 or $ingreso_padre>10000){
	$rechazo='ingreso';
}


if(($ingreso_madre>10000 or $ingreso_padre>10000) and $calificacion<8){
	$rechazo='ingreso y calificacion';
}



$stmt2 = $mysqli->prepare ("INSERT INTO Registro (fechaSolicitud, fechaIngreso, hijosInscritos, publicidad) VALUES (?,?,?,?)");
$stmt2->bind_param('ssss', $fechaDeSolicitud, $fechaDeIngreso, $hijos, $publicidad);
$stmt2->execute();
$stmt2->close();

if($rechazo){
	$estatus= 'rechazado';
	$fkregistro= $mysqli->insert_id;
	$stmt = $mysqli->prepare("INSERT INTO Alumno(nombre, apellidoPaterno, apellidoMaterno, fechaNacimiento, edad, municipioNacimiento, estadoNacimiento, 		paisNacimiento, curp, sexo, nivel, gradoaCursar, escuelaProcedencia, calleEscuela, coloniaEscuela, calleDomicilio, entreCalles, noDomicilio, 				coloniaDomicilio, codigoPostal, celular, telefono, ciudad, estado, email, calificacion, idRegistro,razonRechazo, estatus) 									VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

	$stmt->bind_param('ssssissssssisssssisiiisssdiss', $nombre_alum, $apellidoPaterno, $apellidoMaterno, $fechaDeNacimiento, $edad, $municipio, $estado, 		$pais, $curp, $sexo, $nivel_estudio, $grado, $escuela_anterior, $calleEscuela, $coloniaEscuela,$calle,$entreCalles, $numero, $colonia, $cp, $celular, 		$telefono, $ciudad_dom, $estado_dom, $email,$calificacion,$fkregistro,$rechazo,$estatus);
	$stmt->execute();
	$stmt->close();
	$fkalumno= $mysqli->insert_id;
}
else{
	
	if($espacio>0){
		$fkregistro= $mysqli->insert_id;
		$fase=2;
		$stmt = $mysqli->prepare("INSERT INTO Alumno(nombre, apellidoPaterno, apellidoMaterno, fechaNacimiento, edad, municipioNacimiento, estadoNacimiento, 		paisNacimiento, curp, sexo, nivel, gradoaCursar, escuelaProcedencia, calleEscuela, coloniaEscuela, calleDomicilio, entreCalles, noDomicilio, 				coloniaDomicilio, codigoPostal, celular, telefono, ciudad, estado, email, calificacion, idRegistro, fase) 													VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

		$stmt->bind_param('ssssissssssisssssisiiisssdii', $nombre_alum, $apellidoPaterno, $apellidoMaterno, $fechaDeNacimiento, $edad, $municipio, $estado, 		$pais, $curp, $sexo, $nivel_estudio, $grado, $escuela_anterior, $calleEscuela, $coloniaEscuela,$calle,$entreCalles, $numero, $colonia, $cp, $celular, 		$telefono, $ciudad_dom, $estado_dom, $email,$calificacion,$fkregistro,$fase);
		$stmt->execute();
		$stmt->close();
		$fkalumno= $mysqli->insert_id;	
		
		if($sexo==varon){
			$stmt4 =$mysqli->prepare("UPDATE Vacantes SET hombres = hombres - 1 WHERE grado =?");	
			$stmt4->bind_param('i', $grado);
			$stmt4->execute();
			$stmt4->close(); 
		}
		else if ($sexo==mujer){
			$stmt4 =$mysqli->prepare("UPDATE Vacantes SET mujeres = mujeres - 1 WHERE grado =?");	
			$stmt4->bind_param('i', $grado);
			$stmt4->execute();
			$stmt4->close(); 
		}


		
	}
	else{
		$fkregistro= $mysqli->insert_id;
		$estatus="lista de espera";
		$stmt = $mysqli->prepare("INSERT INTO Alumno(nombre, apellidoPaterno, apellidoMaterno, fechaNacimiento, edad, municipioNacimiento, estadoNacimiento, 		paisNacimiento, curp, sexo, nivel, gradoaCursar, escuelaProcedencia, calleEscuela, coloniaEscuela, calleDomicilio, entreCalles, noDomicilio, 				coloniaDomicilio, codigoPostal, celular, telefono, ciudad, estado, email, calificacion, idRegistro, estatus) 												VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

		$stmt->bind_param('ssssissssssisssssisiiisssdis', $nombre_alum, $apellidoPaterno, $apellidoMaterno, $fechaDeNacimiento, $edad, $municipio, $estado, 		$pais, $curp, $sexo, $nivel_estudio, $grado, $escuela_anterior, $calleEscuela, $coloniaEscuela,$calle,$entreCalles, $numero, $colonia, $cp, $celular, 		$telefono, $ciudad_dom, $estado_dom, $email,$calificacion,$fkregistro,$estatus);
		$stmt->execute();
		$stmt->close();	
		$fkalumno= $mysqli->insert_id;
	}
}


$stmt3 = $mysqli->prepare ("INSERT INTO Familia (nombreP, apellidoPaternoP, apellidoMaternoP, estadoCivilP, edadP, oficioP, telefonoP, ingresoMensualP, empresaP, nombreM, apellidoPaternoM, apellidoMaternoM, estadoCivilM, edadM, oficioM, telefonoM,ingresoMensualM,empresa,AlumnoID) Values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt3->bind_param('ssssisiisssssssiisi',$nombrePadre, $apellidoPpadre, $apellidoMpadre, $estadoPadre, $edadPadre, $oficioPadre, $telefono_padre, $ingreso_padre, $empresa_padre, $nombreMadre, $apellidoPmadre,$apellidoMmadre,$estadoMadre,$edadMadre,$oficioMadre,$telefono_madre,$ingreso_madre,$empresa_madre,$fkalumno);
$stmt3->execute();
$stmt3->close();



header("location: confirma.html");
?>
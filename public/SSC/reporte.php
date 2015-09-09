<html>

	<head>
	<title>Ciudad de los Ni&ntilde;os - Bienvenido </title>
	<link rel="shortcut icon" href="imagenes/icono.ico" />
	<link href="css/styles.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/jquery.flot.js"></script>
	<script type="text/javascript" src="js/jquery.flot.pie.js"></script>
	<script type="text/javascript">
	<!--
	//Obtener la fecha. 
	fecha = new Date();
	dia = fecha.getDate();
	mes = fecha.getMonth();
	año = fecha.getFullYear();
	
	
	//Mes
	if(mes == 0) 
	mostrarmes = "Enero " 

	else if(mes ==1) 
	mostrarmes = "Febrero " 

	else if(mes ==2) 
	mostrarmes = "Marzo " 

	else if(mes ==3) 
	mostrarmes = "Abril " 

	else if(mes ==4) 
	mostrarmes = "Mayo " 

	else if(mes ==5) 
	mostrarmes = "Junio " 

	else if(mes ==6) 
	mostrarmes = "Julio " 

	else if(mes ==7) 
	mostrarmes = "Agosto " 

	else if(mes ==8) 
	mostrarmes = "Septiembre " 

	else if(mes ==9) 
	mostrarmes = "Octubre " 

	else if(mes ==10) 
	mostrarmes = "Noviembre " 

	else if(mes ==11) 
	mostrarmes = "Diciembre "
	//-->

	</script>
	</head>
	
	<body>
		<form name="reporte" method="post" action="reporte.php"> 
		<table style="HEIGHT:50%;WIDTH:100%;" class="text1">
	
		<tr>
		
		<!-- Primer espacio en blanco -->
		<td style="HEIGHT:100%;WIDTH:20%;"> </td>
	
		
		<!-- Espacio de trabajo -->
		
		<td style="HEIGHT:100%;WIDTH:60%;">
		<fieldset class="fieldset4">
		
		<table style="HEIGHT:100%;WIDTH:100%;">
		<tr>
		
		<!-- Tabla/Parte para el logo -->
		<td  style="HEIGHT:100%;WIDTH:20%;">
		<img src="imagenes/logo.jpg" alt="Logo Ciudad de los Niños">
		</td>
		
		<td style="HEIGHT:100%;WIDTH:60%;">
		<center> Direcci&oacute;n de Desarrollo Social y Comunicaci&oacute;n </center>
		<center> Proceso de Admisi&oacute;n-Inscripci&oacute;n </center>
		<br>
		<h1 align="center"> REPORTES </h1>
		</td>
		
		
		<td  style="HEIGHT:100%;WIDTH:20%;">
		<center> RE-AI-003 </center>
		<center> Versi&oacute;n 1 </center>
		<center> <script>document.write(dia+" de "+mostrarmes+" del "+año+"");</script> </center>
		</td>
		</tr>	
		</table>
		
		<br>
		<br>
		
			<fieldset style="border:2px solid blue">
			<legend> <img src="imagenes/reportess.jpg" alt="Muestra de reportes"> </legend>
			<br>
			<br>
			<fieldset class="fieldset5">
<?php
$link = new mysqli("localhost", "root", "", "mydb");			
$reporte= $_POST['tipo_reporte'];
$mes= $_POST['mes_reporte'];
$anio= $_POST['year_reporte'];

if($reporte=='grado_nivel'){
$stmt1=$link->prepare("select count(gradoaCursar)
					from alumno a, registro b
					where nivel='primaria'
						and a.idRegistro = b.idRegistro
						and month(b.fechaSolicitud)=?
						and year(b.fechaSolicitud)=?");
					$stmt1->bind_param('ii',$mes,$anio);
					$stmt1->execute();
					$stmt1->bind_result($result);
					$stmt1->fetch();
					echo("<center> <h3> El total de presolicitudes de primaria es ".$result."</h3> </center> <br>");
					$stmt1->close();
for($i=1; $i<=6; $i++){					
	$stmt1=$link->prepare("select count(gradoaCursar)
					from alumno a, registro b
					where a.gradoaCursar=$i
						and a.idRegistro = b.idRegistro
						and month(b.fechaSolicitud)=?
						and year(b.fechaSolicitud)=?");
					$stmt1->bind_param('ii',$mes,$anio);
					$stmt1->execute();
					$stmt1->bind_result($result);
					$stmt1->fetch();
					echo("<center> El total de presolicitudes de <b>".$i. "</b> grado es ".$result."</center><br>");
					$resultado[$i]=$result;
					$stmt1->close();
}
?>
</fieldset>
		<br>
		<br>
			<fieldset class="fieldset5">
<?php

$stmt1=$link->prepare("select count(gradoaCursar)
					from alumno a, registro b
					where nivel='secundaria'
						and a.idRegistro = b.idRegistro
						and month(b.fechaSolicitud)=?
						and year(b.fechaSolicitud)=?");
					$stmt1->bind_param('ii',$mes,$anio);
					$stmt1->execute();
					$stmt1->bind_result($result);
					$stmt1->fetch();
					echo("<center> <h3> El total de presolicitudes de secundaria es ".$result."</h3> </center> <br>");
					$stmt1->close();
for($i=7; $i<=9; $i++){					
	$stmt1=$link->prepare("select count(gradoaCursar)
					from alumno a, registro b
					where a.gradoaCursar=$i
						and a.idRegistro = b.idRegistro
						and month(b.fechaSolicitud)=?
						and year(b.fechaSolicitud)=?");
					$stmt1->bind_param('ii',$mes,$anio);
					$stmt1->execute();
					$stmt1->bind_result($result);
					$stmt1->fetch();
					echo("<center> El total de presolicitudes de <b>".$i. "</b> grado es ".$result."</center> <br>");
					$resultado[$i]=$result;
					$stmt1->close();
}
?>
</fieldset>
			<br>
			<br>
			<fieldset class="fieldset5">
<?php
$stmt1=$link->prepare("select count(gradoaCursar)
					from alumno a, registro b
					where nivel='preparatoria'
						and a.idRegistro = b.idRegistro
						and month(b.fechaSolicitud)=?
						and year(b.fechaSolicitud)=?");
					$stmt1->bind_param('ii',$mes,$anio);
					$stmt1->execute();
					$stmt1->bind_result($result);
					$stmt1->fetch();
					echo("<center> <h3> El total de presolicitudes de preparatoria es ".$result."</h3> </center> <br>");
					$stmt1->close();
for($i=10; $i<=12; $i++){					
	$stmt1=$link->prepare("select count(gradoaCursar)
					from alumno a, registro b
					where a.gradoaCursar=$i
						and a.idRegistro = b.idRegistro
						and month(b.fechaSolicitud)=?
						and year(b.fechaSolicitud)=?");
					$stmt1->bind_param('ii',$mes,$anio);
					$stmt1->execute();
					$stmt1->bind_result($result);
					$stmt1->fetch();
					echo("<center> El total de presolicitudes de <b>".$i. " </b> grado es ".$result."</center> <br>");
					$resultado[$i]=$result;
					$stmt1->close();
}
?>
</fieldset>
<br>
<br>
<?php
}
if($reporte=='rechazadas'){
	$stmt2=$link->prepare("	SELECT nombre, apellidoPaterno, apellidoMaterno, razonRechazo 
							FROM Alumno a, Registro b 
							WHERE a.estatus='rechazado' 
							and a.idRegistro = b.idRegistro
							and month(b.fechaSolicitud)=?
							and year(b.fechaSolicitud)=?");					
	$stmt2->bind_param('ii',$mes,$anio);
	$stmt2->execute();
	$stmt2->bind_result($result1,$result2,$result3, $result4);	
	echo("Las presolicitudes rechazadas fueron: <br>");
	while($stmt2->fetch()){
		echo("<b>Nombre:</b> ".$result1." ".$result2." ".$result3." "." <b>Razón:</b> ".$result4." <br>");
	}
	$stmt5=$link->prepare("select count(idAlumno)
						from alumno a, registro b
						where estatus = 'rechazado'
						and a.idRegistro = b.idRegistro
						and month(b.fechaSolicitud)=?
						and year(b.fechaSolicitud)=?");
	$stmt5->bind_param('ii',$mes,$anio);
	$stmt5->execute();
	$stmt5->bind_result($result3);
	$stmt5->fetch();
	$resultado[0]=$result3;
	$stmt5->close();
	
	$stmt6=$link->prepare("select count(idAlumno)
						from alumno a, registro b
						where estatus != 'rechazado'
						and a.idRegistro = b.idRegistro
						and month(b.fechaSolicitud)=?
						and year(b.fechaSolicitud)=?");
	$stmt6->bind_param('ii',$mes,$anio);
	$stmt6->execute();
	$stmt6->bind_result($result3);
	$stmt6->fetch();
	$resultado[1]=$result3;
	$stmt6->close();
	
	$stmt8=$link->prepare("select count(idAlumno)
						from alumno a, registro b
						where estatus = 'rechazado'
						and a.idRegistro = b.idRegistro
						and razonRechazo = 'ingreso'
						and month(b.fechaSolicitud)=?
						and year(b.fechaSolicitud)=?");
	$stmt8->bind_param('ii',$mes,$anio);
	$stmt8->execute();
	$stmt8->bind_result($result3);
	$stmt8->fetch();
	$resultado2[0]=$result3;
	$stmt8->close();
	
	$stmt9=$link->prepare("select count(idAlumno)
						from alumno a, registro b
						where estatus = 'rechazado'
						and a.idRegistro = b.idRegistro
						and razonRechazo = 'calificacion'
						and month(b.fechaSolicitud)=?
						and year(b.fechaSolicitud)=?");
	$stmt9->bind_param('ii',$mes,$anio);
	$stmt9->execute();
	$stmt9->bind_result($result3);
	$stmt9->fetch();
	$resultado2[1]=$result3;
	$stmt9->close();
	
	$stmt9=$link->prepare("select count(idAlumno)
						from alumno a, registro b
						where estatus = 'rechazado'
						and a.idRegistro = b.idRegistro
						and razonRechazo = 'ingreso y calificacion'
						and month(b.fechaSolicitud)=?
						and year(b.fechaSolicitud)=?");
	$stmt9->bind_param('ii',$mes,$anio);
	$stmt9->execute();
	$stmt9->bind_result($result3);
	$stmt9->fetch();
	$resultado2[2]=$result3;
	$stmt9->close();
	
}
?>
<!-- Tercer query (Lista de espera)-->
<?php
if($reporte=='lisata_espera'){
$stmt3=$link->prepare("select count(idAlumno)
					from alumno
					where estatus= 'lista de espera'");
			$stmt3->execute();
			$stmt3->bind_result($result);
			$stmt3->fetch();
			echo("Total de alumnos en lista de espera ".$result."<br><br>");
			$stmt3->close();
			
$stmt4=$link->prepare("select nombre, apellidoPaterno, apellidoMaterno, gradoaCursar, fechaSolicitud
					from alumno a, registro b
					where a.idRegistro = b.idRegistro
					and estatus= 'lista de espera'");
			$stmt4->execute();
			$stmt4->bind_result($result1,$result2,$result3,$result4,$result5);	
			echo("Alumnos en lista de espera: <br>");
			while($stmt4->fetch()){
			echo("<b>Nombre:</b> ".$result1." ".$result2." ".$result3."<b> Fecha de presolicitud:</b> ".$result5." <b>Grado a cursar:</b> ".$result4."<br>");
			}
			$stmt4->close();
			
for($i=1; $i<=12; $i++){					
	$stmt7=$link->prepare("select count(idAlumno)
					from alumno a, registro b
					where a.gradoaCursar=$i
						and a.idRegistro = b.idRegistro
						and estatus='lista de espera'");
					
					$stmt7->execute();
					$stmt7->bind_result($result);
					$stmt7->fetch();
					$resultado[$i]=$result;
					$stmt7->close();
}
	}
?>



</fieldset>
<br>
			
			<table style="HEIGHT:100%;WIDTH:100%;">
			<tr>
				<td style="HEIGHT:100%;WIDTH:25%;">
				</br></br></br></br></br></br></br></br></br></br>
				<div><a href="reporte.html"> <input type="button" value="Regresar" class="text2"> </a></div>	
				<a href="principal.html"> <input type="button" value="Main menu"  class="text2"> </a>
				</td>

				<td style="HEIGHT:100%;WIDTH:50%;">
				<div id="graph">
				<script type="text/javascript">
				<?php
				if($reporte=='grado_nivel'){
				?>
				
				var grados = <?php echo json_encode($resultado); ?>;
				var data=[];
				for (i=1;i<=12;i++){
					var obj= {
					label: i+" grado", 
					data: grados[i]
					};
					data.push(obj);
				}
				$.plot($("#graph"), data,
				{
       		 		series: {
            			pie: { 
                			show: true,
                			radius: .95,
                			label: {
                    			show: true,
                    			radius: 1,
                    			formatter: function(label, series){
                        		return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">'+label+'<br/>'+Math.round(series.percent)+'%</								div>';                    
                        		},
                    			background: { 
                    			opacity: .5, 
                    			color: '#000'
                    			}
                			}
                			
            			}
        			},
        			grid: {
            			hoverable: true,
            			clickable: true
       				},
       			    legend: {
           			show: false
       			    }
				});
				<?php
				}
				else if($reporte=='rechazadas'){
				?>
				grados = <?php echo json_encode($resultado); ?>;
				data=[];
				for (i=0;i<=1;i++){
					if(i==0)
					obj= {
					label: "rechazado",
					data: grados[i]};
					if(i==1)
					obj={label: "no rechazado",
					data: grados[i]};
					
					data.push(obj);
				}
				$.plot($("#graph"), data,
				{
       		 		series: {
            			pie: { 
                			show: true,
                			radius: .95,
                			label: {
                    			show: true,
                    			radius: 1,
                    			formatter: function(label, series){
                        		return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">'+label+'<br/>'+Math.round(series.percent)+'%</								div>';                    
                        		},
                    			background: { 
                    			opacity: .5, 
                    			color: '#000'
                    			}
                			}
                			
            			}
        			},
        			grid: {
            			hoverable: true,
            			clickable: true
       				},
       			    legend: {
           			show: false
       			    }
				});
				
				<?php
				
				}
				else if($reporte=='lisata_espera'){
				?>
				
				grados = <?php echo json_encode($resultado); ?>;
				data=[];
				for (i=1;i<=12;i++){
					obj= {
					label: i+" grado", 
					data: grados[i]
					};
					data.push(obj);
				}
				$.plot($("#graph"), data,
				{
       		 		series: {
            			pie: { 
                			show: true,
                			radius: .95,
                			label: {
                    			show: true,
                    			radius: 1,
                    			formatter: function(label, series){
                        		return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">'+label+'<br/>'+Math.round(series.percent)+'%</								div>';                    
                        		},
                    			background: { 
                    			opacity: .5, 
                    			color: '#000'
                    			}
                			}
                			
            			}
        			},
        			grid: {
            			hoverable: true,
            			clickable: true
       				},
       			    legend: {
           			show: false
       			    }
				});
				<?php
				}
				?>
				</script>
				</div>
				<div id="hover"> </div>
				</td>
				<?php
				if($reporte=='rechazadas'){
				?>
				<td style="HEIGHT:100%;WIDTH:50%;">
				<div id="graph2">
				<script type="text/javascript">
				grados = <?php echo json_encode($resultado2); ?>;
				data=[];
				for (i=0;i<=2;i++){
					if(i==0)
					obj= {
					label: "ingreso",
					data: grados[i]};
					if(i==1)
					obj={label: "calificacion",
					data: grados[i]};
					if(i==2)
					obj= {
					label: "ingreso y calificacion",
					data: grados[i]};
					
					data.push(obj);
				}
				$.plot($("#graph2"), data,
				{
       		 		series: {
            			pie: { 
                			show: true,
                			radius: .95,
                			label: {
                    			show: true,
                    			radius: 1,
                    			formatter: function(label, series){
                        		return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">'+label+'<br/>'+Math.round(series.percent)+'%</								div>';                    
                        		},
                    			background: { 
                    			opacity: .5, 
                    			color: '#000'
                    			}
                			}
                			
            			}
        			},
        			grid: {
            			hoverable: true,
            			clickable: true
       				},
       			    legend: {
           			show: false
       			    }
				});
				<?php
				}
				?>
				</script>
				</div>
				</td>
			</tr>
			<tr>
				
			</tr>
			</table>
		</td>
		
		
		<!-- Espacio 3 en blanco -->
		<td style="HEIGHT:100%;WIDTH:20%;"> </td>
		</tr>
		
		</table>
		</form>

	</body>
</html>
var allGood;
var respuesta;
var tipo;

//datos del alumno
var nombre;
var apellidoPaterno;
var apellidoMaterno;
var clave;

function tipoBusqueda(){

	nombre= document.getElementById("nombre_alumno").value;
	apellidoPaterno= document.getElementById("apellido_paterno_alumno").value;
	apellidoMaterno= document.getElementById("apellido_materno_alumno").value;
	clave= 	document.getElementById("clave").value;

	var radio=document.getElementsByName("buscar");	
	
	if (radio[0].checked==true){
		tipo="clave";
		limpiarNombre()
		if (clave==null){
			allGood=false;
			}		
		}
	else if (radio[1].checked==true){
		tipo="nombre";
		limpiarClave();
		if (nombre==""||apellidoPaterno==""||apellidoMaterno=="")
			allGood=false;
		}

}

function checarExistencia(){
	tipoBusqueda();
	
	clave= 	document.getElementById("clave").value;
	nombre= document.getElementById("nombre_alumno").value;
	apellidoPaterno= document.getElementById("apellido_paterno_alumno").value;
	apellidoMaterno= document.getElementById("apellido_materno_alumno").value;
	console.log(apellidoPaterno+apellidoMaterno+nombre);
	var xmlhttp;    
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  
	xmlhttp.onreadystatechange=function(){
		 if (xmlhttp.readyState==4 && xmlhttp.status==200){
		 			respuesta= xmlhttp.responseText;
	
			if(respuesta==1){
					allGood=true;
					}
			else {
					allGood=false;
					}
			}
	}
		
	if(tipo=="nombre"){
		xmlhttp.open("GET","validar_baja.php?nombre="+nombre+"&apellidoPaterno="+apellidoPaterno+"&apellidoMaterno="+apellidoMaterno+"&tipo="+tipo,true);
		archivoPhp("baja_nombre.php");
		}
	else
	if (tipo=="clave"){
		xmlhttp.open("GET","validar_baja.php?clave="+clave+"&tipo="+tipo,true);
		archivoPhp("baja_clave.php");
	}
	xmlhttp.send();
	
	var confirmar=confirm("¿Seguro que quiere dar de baja?");
	if(!confirmar)
		allGood=false;
		
	return allGood;
}

function limpiarCampos(){
	limpiarNombre();
	limpiarClave();
}
function limpiarNombre(){
	document.getElementById("nombre_alumno").value="";
	document.getElementById("apellido_paterno_alumno").value="";
	document.getElementById("apellido_materno_alumno").value="";	
}
function limpiarClave(){
	document.getElementById("clave").value="";
}
function bloquearNombre(){
	document.getElementById("nombre_alumno").disabled=true;
	document.getElementById("apellido_paterno_alumno").disabled=true;
	document.getElementById("apellido_materno_alumno").disabled=true;
	document.getElementById("clave").disabled=false;
}
function bloquearClave(){
	document.getElementById("nombre_alumno").disabled=false;
	document.getElementById("apellido_paterno_alumno").disabled=false;
	document.getElementById("apellido_materno_alumno").disabled=false;
	document.getElementById("clave").disabled=true;
}
function archivoPhp(archivo){
	document.getElementById("forma").action=archivo;
}

/*
function dejarPasar(){
		//tipoBusqueda();
	//	checarExistencia();
		 if(allGood) return true;
		 else{
			 alert("No se encuentra en la base de datos"); 
			 return false;
		 }
	 }*/
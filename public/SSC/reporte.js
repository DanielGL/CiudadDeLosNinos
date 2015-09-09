function changeFunc(){
var seleccion= document.getElementById("tipo_rep");
console.log(seleccion);
var selectedValue = seleccion.options[seleccion.selectedIndex].value;
if(selectedValue=="grado_nivel"||selectedValue=="rechazadas"){
document.getElementById('fecharep').style.display='block';
}
else{
	document.getElementById('fecharep').style.display='none';
}

}

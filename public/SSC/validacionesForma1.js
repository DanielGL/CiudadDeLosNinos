//Validaciones by Panic
//checa si es una fecha válida
function checarFecha(d, m, a){
    var f = (((a % 4 == 0) && ( (!(a % 100 == 0)) || (a % 400 == 0))) ? 29 : 28);
    var meses=[31, f, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    
    if(!(d <= meses[m]))
        return false;
}

//checa que se haya seleccionado si tienen hijos ahi
function checarHijos(){
    if((document.forma.hijos[0].checked==false) &&
    (document.forma.hijos[1].checked==false)){
        alert("Especifique si ya tiene hijos inscritos en Ciudad de los Ninos.");
        return false;
    }
}

//checa que se haya seleccionado el sexo
function checarSexo(){
    if((document.forma.sexo[0].checked==false) &&
    (document.forma.sexo[1].checked==false)){
        alert("Especifique el sexo");
        return false;
    }
}

//checa que se haya seleccionado el nivel de estudio
function checarNivel_estudio(){
    if((document.forma.nivel_estudio[0].checked==false) &&
    (document.forma.nivel_estudio[1].checked==false) &&
    (document.forma.nivel_estudio[2].checked==false)){
        alert("Especifique el sexo");
        return false;
    }
}

//checa que se haya seleccionado el nivel de estudio
function checarNivel_estudio(){
    if((document.forma.nivel_estudio[0].checked==false) &&
    (document.forma.nivel_estudio[1].checked==false) &&
    (document.forma.nivel_estudio[2].checked==false)){
        alert("Especifique el sexo");
        return false;
    }
}

//checa que la calificación del grado anterior esté en escala de 1 a 10
function checarCalificacionAnterior(elemento){
    var valor = elemento.value;
    if(valor>10 && valor<1){
        alert("La calificaci&oacute;n final anterior debe ser en escala de 1 a 10");
        return false;
    }
}
//

function checarClave(elemento){
         var valor=elemento.value; 
             if(! valor.match(/^\d{6}$/))  {
                alert("Favor de seguir formato de clave 123456");
                  valor.value="";
                  allGood =false;
                  }
            }

function checarFecha(elemento){ //version mejorada con ExpReg
   var ExpReg_cad=/^\d{4}$/;
   if (!ExpReg_cad.test(elemento.value) && elemento.value.length>0 ){
   alert("Solo puede ingresar numeros en el formato 1990");
   elemento.value="";
   allGood=false;
}

}


function checarTextos(elemento){ //version mejorada con ExpReg
   var ExpReg_cad=/^[aA-zZ]*$/;
   if (!ExpReg_cad.test(elemento.value) && elemento.value.length>0 ){
   alert("Solo puede ingresar letras");
   elemento.value="";
   allGood=false;
}

}

function checarEdad(elemento){
         var valor=elemento.value; 
             if(! valor.match(/^\d{2}$/))  {
                alert("Favor de seguir el formato: 12");
                  valor.value="";
                  allGood =false;
                  }
            }



 
 function checarCurp(elemento){
      var curp=elemento.value;
      var ExpReg_cad=/[a-zA-Z]{4,4}[0-9]{6}[a-zA-Z]{6,6}[0-9]{2}/;
                     if ( !ExpReg_cad.test(curp) ) 
                     { 
                       alert("Favor de seguir formato de curp correcto: 4 letras 6 numeros 6 letras 2 numeros");
                     allGood=false; // falso si no es una curp correcta
                     }
                           }
/*
function checarTel(elemento){ // verificar formato de telefono
                //al aceptar solo digitos se verifica que no sean letras
   var tel=elemento.value; 
       if( ! tel.match(/^\d{4}-\d{4}-\d{2}$/) ) {
          alert("Favor de seguir formato telefonico xxxx-xxxx-xx")
            elemento.value="";
            allGood=false;
            }
      }
*/

         function checarMail(elemento){
                              var mail=elemento.value;
                              var ExpReg_cad=/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/;
                              if ( ! ExpReg_cad.match(mail) ) 
                              {
                                 alert("Favor de seguir formato de mail correcto: correo@empresa.com");
                                 allGood= false; // falso si no es una curp correcta
                              }
                           }

                  function checarCalif(elemento){  
                  califa=elemento.value;  
                  var ExpReg_cad =/^\s*-?[0-9]\d*(\.\d{1})?\s*$/;
                         if( ! ExpReg_cad.test(califa) ) {
                            alert("Favor de seguir formato: 9.8");
                              elemento.value="";
                              allGood= false;
                              }
                        }


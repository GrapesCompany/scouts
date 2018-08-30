/*__________________________________________Inicio Administrador - Jefe de Grupo_________________________________________________________*/

function showAgregarJefeGrupo(str) {

    document.getElementById("div_nuevodirigente").innerHTML = "";
    document.getElementById("div_nuevoscout").innerHTML = "";
    document.getElementById("div_modificarjefegrupo").innerHTML = "";
    document.getElementById("div_listarscouts").innerHTML = "";
    document.getElementById("div_listardirigentes").innerHTML = ""; 
    document.getElementById("div_reportegenero").innerHTML = ""; 

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_nuevojefegrupo").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "nuevo_jefegrupo.php?q=" + str, true);
    xmlhttp.send();
}

function showAgregarDirigente(str) {

    document.getElementById("div_nuevojefegrupo").innerHTML = ""; 
    document.getElementById("div_nuevoscout").innerHTML = "";
    document.getElementById("div_modificarjefegrupo").innerHTML = "";
    document.getElementById("div_listarscouts").innerHTML = "";
    document.getElementById("div_listardirigentes").innerHTML = ""; 
    document.getElementById("div_reportegenero").innerHTML = ""; 


     var xmlhttp = new XMLHttpRequest();
     xmlhttp.onreadystatechange = function () {
         if (this.readyState == 4 && this.status == 200) {
             document.getElementById("div_nuevodirigente").innerHTML = this.responseText;
         }
     }
 
     xmlhttp.open("GET", "nuevo_dirigente.php?q=" + str, true);
     xmlhttp.send();
 }

 function showAgregarScout(str) {

    document.getElementById("div_nuevojefegrupo").innerHTML = ""; 
    document.getElementById("div_nuevodirigente").innerHTML = "";
    document.getElementById("div_modificarjefegrupo").innerHTML = "";
    document.getElementById("div_listarscouts").innerHTML = "";
    document.getElementById("div_listardirigentes").innerHTML = ""; 
    document.getElementById("div_reportegenero").innerHTML = ""; 
 
     var xmlhttp = new XMLHttpRequest();
     xmlhttp.onreadystatechange = function () {
         if (this.readyState == 4 && this.status == 200) {
             document.getElementById("div_nuevoscout").innerHTML = this.responseText;
         }
     }
 
     xmlhttp.open("GET", "nuevo_scout.php?q=" + str, true);
     xmlhttp.send();
 }

 function showModificarJefeGrupo(str) {

    document.getElementById("div_nuevojefegrupo").innerHTML = ""; 
    document.getElementById("div_nuevodirigente").innerHTML = "";
    document.getElementById("div_nuevoscout").innerHTML = "";
    document.getElementById("div_listarscouts").innerHTML = ""; 
    document.getElementById("div_listardirigentes").innerHTML = "";  
    document.getElementById("div_reportegenero").innerHTML = ""; 

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_modificarjefegrupo").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "modificar_jefegrupo.php?q=" + str, true);
    xmlhttp.send();
}



function showListarScouts(str) {

    document.getElementById("div_nuevojefegrupo").innerHTML = ""; 
    document.getElementById("div_nuevodirigente").innerHTML = "";
    document.getElementById("div_nuevoscout").innerHTML = "";
    document.getElementById("div_modificarjefegrupo").innerHTML = "";       
    document.getElementById("div_listardirigentes").innerHTML = "";  
    document.getElementById("div_reportegenero").innerHTML = "";     

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_listarscouts").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_scouts.php?q=" + str, true);
    xmlhttp.send();
}


function showListarDirigentes(str) {

    document.getElementById("div_nuevojefegrupo").innerHTML = ""; 
    document.getElementById("div_nuevodirigente").innerHTML = "";
    document.getElementById("div_nuevoscout").innerHTML = "";
    document.getElementById("div_modificarjefegrupo").innerHTML = "";
    document.getElementById("div_listarscouts").innerHTML = ""; 
    document.getElementById("div_reportegenero").innerHTML = "";      

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_listardirigentes").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_dirigentes.php?q=" + str, true);
    xmlhttp.send();
}


function showReporteGenero(str) {

    document.getElementById("div_nuevojefegrupo").innerHTML = ""; 
    document.getElementById("div_nuevodirigente").innerHTML = "";
    document.getElementById("div_nuevoscout").innerHTML = "";
    document.getElementById("div_modificarjefegrupo").innerHTML = "";
    document.getElementById("div_listarscouts").innerHTML = ""; 
    document.getElementById("div_listardirigentes").innerHTML = "";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_reportegenero").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "reporte_genero.php?q=" + str, true);
    xmlhttp.send();
}
 

 /*__________________________________________Fin Administrador - Jefe de Grupo_________________________________________________________*/
/*__________________________________________Inicio Administrador - Dirigente__________________________________________________________*/

function showAgregarScoutd(str) {

    document.getElementById("div_listarscoutsd").innerHTML = ""; 
    document.getElementById("div_listarujefesd").innerHTML = "";
    document.getElementById("div_modificardirigente").innerHTML = ""; 
 
     var xmlhttp = new XMLHttpRequest();
     xmlhttp.onreadystatechange = function () {
         if (this.readyState == 4 && this.status == 200) {
             document.getElementById("div_nuevoscoutd").innerHTML = this.responseText;
         }
     }
 
     xmlhttp.open("GET", "nuevo_scoutd.php?q=" + str, true);
     xmlhttp.send();
 }

 function showListarScoutsd(str) {

    document.getElementById("div_nuevoscoutd").innerHTML = ""; 
    document.getElementById("div_listarujefesd").innerHTML = "";   
    document.getElementById("div_modificardirigente").innerHTML = ""; 
    

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_listarscoutsd").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_scoutsd.php?q=" + str, true);
    xmlhttp.send();
}


function showListarUJefesd(str) {

    document.getElementById("div_nuevoscoutd").innerHTML = ""; 
    document.getElementById("div_listarscoutsd").innerHTML = ""; 
    document.getElementById("div_modificardirigente").innerHTML = ""; 
           

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_listarujefesd").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_ujefesd.php?q=" + str, true);
    xmlhttp.send();
}

function showModificarDirigente(str) {

    document.getElementById("div_nuevoscoutd").innerHTML = ""; 
    document.getElementById("div_listarscoutsd").innerHTML = "";  
    document.getElementById("div_listarujefesd").innerHTML = "";
     

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_modificardirigente").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "modificar_dirigente.php?q=" + str, true);
    xmlhttp.send();
}



 /*__________________________________________Fin Administrador - Dirigente_____________________________________________________________*/
 /*__________________________________________Inicio Administrador - Scout______________________________________________________________*/

 function showListarUJefese(str) {
    
    document.getElementById("div_modificarscout").innerHTML = "";
    document.getElementById("div_listarscoutse").innerHTML = "";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_listarujefese").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_ujefese.php?q=" + str, true);
    xmlhttp.send();
}

function showListarScoutse(str) {
    
    document.getElementById("div_modificarscout").innerHTML = "";
    document.getElementById("div_listarujefese").innerHTML = "";
    

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_listarscoutse").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_scoutse.php?q=" + str, true);
    xmlhttp.send();
}




 function showModificarScout(str) {

    document.getElementById("div_listarujefese").innerHTML = "";
    document.getElementById("div_listarscoutse").innerHTML = "";

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_modificarscout").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "modificar_scout.php?q=" + str, true);
    xmlhttp.send();
}



 /*__________________________________________Fin Administrador - Scout________________________________________________________________*/



 function onlinecampos()
 {      
     document.getElementById("nombre").removeAttribute("disabled");
     document.getElementById("apellido").removeAttribute("disabled");
     document.getElementById("fech_nac").removeAttribute("disabled");
     document.getElementById("telefono").removeAttribute("disabled");
     document.getElementById("edad").removeAttribute("disabled");
     document.getElementById("genero").removeAttribute("disabled");
     document.getElementById("celectronico").removeAttribute("disabled");
     document.getElementById("direccion").removeAttribute("disabled");
    
 
 }

 function onlinecamposdirigente()
 {
     //document.getElementById("cedula").removeAttribute("disabled");
     document.getElementById("nombre").removeAttribute("disabled");
     document.getElementById("apellido").removeAttribute("disabled");
     document.getElementById("fech_nac").removeAttribute("disabled");
     document.getElementById("telefono").removeAttribute("disabled");
     document.getElementById("edad").removeAttribute("disabled");
     document.getElementById("genero").removeAttribute("disabled");
     document.getElementById("celectronico").removeAttribute("disabled");
     //document.getElementById("cargo").removeAttribute("disabled");
     //document.getElementById("unidad").removeAttribute("disabled");
     //document.getElementById("uespecifica").removeAttribute("disabled");
     document.getElementById("direccion").removeAttribute("disabled");
     document.getElementById("especialidad").removeAttribute("disabled");
 
 }

 function onlinecamposscout()
 {
     
     document.getElementById("nombre").removeAttribute("disabled");
     document.getElementById("apellido").removeAttribute("disabled");     
     document.getElementById("fech_nac").removeAttribute("disabled");
     document.getElementById("genero").removeAttribute("disabled");
     document.getElementById("telefono").removeAttribute("disabled");
     document.getElementById("edad").removeAttribute("disabled");     
     document.getElementById("celectronico").removeAttribute("disabled");
     document.getElementById("direccion").removeAttribute("disabled");     
     //document.getElementById("unidad").removeAttribute("disabled");
     //document.getElementById("uespecifica").removeAttribute("disabled");
     document.getElementById("contrasena").removeAttribute("disabled");

     document.getElementById("direccionr").removeAttribute("disabled");
     document.getElementById("telefonor").removeAttribute("disabled");     
 
 }

 


 function ingresarJefeGrupo()
 {
   
    var verificarCedula = document.getElementById('cedula').value;
    var correito = document.getElementById('celectronico').value;

    var cedulaVerificada = validarCedula(verificarCedula);
    var valcorreo = validateMail(correito);

    var dataString = 'cedula=' + document.getElementById('cedula').value +
        '&nombre=' + document.getElementById('nombre').value +
        '&apellido=' + document.getElementById('apellido').value +
        '&telefono=' + document.getElementById('telefono').value +
        '&edad=' + document.getElementById('edad').value +
        '&inputPassword=' + document.getElementById('contrasena').value +
        '&genero=' + document.getElementById('genero').value +
        '&fech_nac=' + document.getElementById('fech_nac').value +
        '&direccion=' + document.getElementById('direccion').value +
        '&fec_elec=' + document.getElementById('fec_elec').value +
          '&info=' + document.getElementById('info').value +
        '&correo=' + document.getElementById('celectronico').value;
    
    if (document.getElementById('cedula').value && document.getElementById('nombre').value && document.getElementById('apellido').value &&
        document.getElementById('telefono').value && document.getElementById('genero').value && document.getElementById('contrasena').value &&
        document.getElementById('fech_nac').value && document.getElementById('direccion').value && document.getElementById('celectronico').value &&
        document.getElementById('edad').value) {
            if (cedulaVerificada == true) {
                if (valcorreo == true) {
                $.ajax({
                    type: "POST",
                    url: "php/ingresarJefeGrupo.php",
                    data: dataString,
                    success: function (data) {
                        showAgregarJefeGrupo("gh");

                        alert(data);
                        //recuperando las variables

                    }, error: function (errorThrown) {
                        alert("Existe un error" + errorThrown);
                    }

                });
            
            } else {
                alert("El correo electronico ingresado es incorrecto");
            }
        } else {
            alert("La cédula ingresada es incorrecta");
        }
    } else {
        alert("Faltan parametros por llenar");
    }
 }


 function ingresarNuevoDirigente()
 {

    var verificarCedula = document.getElementById('cedula').value;
    var correito = document.getElementById('celectronico').value;

    var cedulaVerificada = validarCedula(verificarCedula);
    var valcorreo = validateMail(correito);


    var dataString = 'cedula=' + document.getElementById('cedula').value +
    '&nombre=' + document.getElementById('nombre').value +
    '&apellido=' + document.getElementById('apellido').value +
    '&telefono=' + document.getElementById('telefono').value +
    '&unidad=' + document.getElementById('unidad').value +
    '&cargo=' + document.getElementById('cargo').value +
    '&edad=' + document.getElementById('edad').value +
    '&inputPassword=' + document.getElementById('contrasena').value +
    '&genero=' + document.getElementById('genero').value +
    '&fech_nac=' + document.getElementById('fech_nac').value +
    '&direccion=' + document.getElementById('direccion').value +
    '&uespecifica=' + document.getElementById('uespecifica').value +
  


    '&correo=' + document.getElementById('celectronico').value;
     
if (document.getElementById('cedula').value && document.getElementById('nombre').value && document.getElementById('apellido').value &&
    document.getElementById('telefono').value && document.getElementById('genero').value && document.getElementById('contrasena').value &&
    document.getElementById('fech_nac').value && document.getElementById('direccion').value && document.getElementById('celectronico').value &&
    document.getElementById('edad').value &&  document.getElementById('cargo').value && document.getElementById('unidad').value  ) {
    if (cedulaVerificada == true) {
                if (valcorreo == true) {
            $.ajax({
                type: "POST",
                url: "php/ingresarNuevoDirigente.php",
                data: dataString,
                success: function (data) {
                    showAgregarDirigente("gh");

                    alert(data);
                    //recuperando las variables

                }, error: function (errorThrown) {
                    alert("Existe un error" + errorThrown);
                }

            });
        } else {
            alert("El correo electronico ingresado es incorrecto");
        }
    } else {
        alert("La cédula ingresada es incorrecta");
    }
    
} else {
    alert("Faltan parametros por llenar");
}

 }



 function ingresarNuevousuario()
 {

    var verificarCedula = document.getElementById('cedula').value;
    var correito = document.getElementById('celectronico').value;

    var verificarCedular =document.getElementById('cedular').value;
    var cedulaVerificadar = validarCedula(verificarCedular);
    var cedulaVerificada = validarCedula(verificarCedula);
    var valcorreo = validateMail(correito);

    var dataString = 'cedula=' + document.getElementById('cedula').value +
    '&nombre=' + document.getElementById('nombre').value +
    '&apellido=' + document.getElementById('apellido').value +
    '&telefono=' + document.getElementById('telefono').value +
    '&unidad=' + document.getElementById('unidad').value +

    '&edad=' + document.getElementById('edad').value +
    '&inputPassword=' + document.getElementById('contrasena').value +
    '&genero=' + document.getElementById('genero').value +
    '&fech_nac=' + document.getElementById('fech_nac').value +
    '&direccion=' + document.getElementById('direccion').value +
    '&uespecifica=' + document.getElementById('uespecifica').value +
    '&correo=' + document.getElementById('celectronico').value+
    
    
    '&cedular=' + document.getElementById('cedular').value+
    '&nombrer=' + document.getElementById('nombrer').value+
    '&direccionr=' + document.getElementById('direccionr').value+
    '&telefonor=' + document.getElementById('telefonor').value;
     
if (document.getElementById('cedula').value && document.getElementById('nombre').value && document.getElementById('apellido').value &&
    document.getElementById('telefono').value && document.getElementById('genero').value && document.getElementById('contrasena').value &&
    document.getElementById('fech_nac').value && document.getElementById('direccion').value && document.getElementById('celectronico').value &&
    document.getElementById('edad').value && document.getElementById('unidad').value   ) {
        if (cedulaVerificada == true && cedulaVerificadar==true) {
            if (valcorreo == true) {
            $.ajax({
                type: "POST",
                url: "php/ingresarNuevoScout.php",
                data: dataString,
                success: function (data) {
                    showAgregarScout("gh");

                    alert(data);
                    //recuperando las variables

                }, error: function (errorThrown) {
                    alert("Existe un error" + errorThrown);
                }

            });
        } else {
            alert("El correo electronico ingresado es incorrecto");
        }
    } else {
        alert("La cédula ingresada es incorrecta");
    }
        
    
} else {
    alert("Faltan parametros por llenar");
}

 }



 


 function ingresarNuevousuariod()
 {
    var verificarCedula = document.getElementById('cedula').value;
    var correito = document.getElementById('celectronico').value;

    var verificarCedular =document.getElementById('cedular').value;
    var cedulaVerificadar = validarCedula(verificarCedular);
    var cedulaVerificada = validarCedula(verificarCedula);
    var valcorreo = validateMail(correito);

    var dataString = 'cedula=' + document.getElementById('cedula').value +
    '&nombre=' + document.getElementById('nombre').value +
    '&apellido=' + document.getElementById('apellido').value +
    '&telefono=' + document.getElementById('telefono').value +
    '&unidad=' + document.getElementById('unidad').value +

    '&edad=' + document.getElementById('edad').value +
    '&inputPassword=' + document.getElementById('contrasena').value +
    '&genero=' + document.getElementById('genero').value +
    '&fech_nac=' + document.getElementById('fech_nac').value +
    '&direccion=' + document.getElementById('direccion').value +
    '&uespecifica=' + document.getElementById('uespecifica').value +
    '&correo=' + document.getElementById('celectronico').value+
    
    
    '&cedular=' + document.getElementById('cedular').value+
    '&nombrer=' + document.getElementById('nombrer').value+
    '&direccionr=' + document.getElementById('direccionr').value+
    '&telefonor=' + document.getElementById('telefonor').value;
     
if (document.getElementById('cedula').value && document.getElementById('nombre').value && document.getElementById('apellido').value &&
    document.getElementById('telefono').value && document.getElementById('genero').value && document.getElementById('contrasena').value &&
    document.getElementById('fech_nac').value && document.getElementById('direccion').value && document.getElementById('celectronico').value &&
    document.getElementById('edad').value && document.getElementById('unidad').value   ) {
   if (cedulaVerificada == true && cedulaVerificadar==true) {
            if (valcorreo == true) {
            $.ajax({
                type: "POST",
                url: "php/ingresarNuevoScout.php",
                data: dataString,
                success: function (data) {
                    showAgregarScoutd("gh");

                    alert(data);
                    //recuperando las variables

                }, error: function (errorThrown) {
                    alert("Existe un error" + errorThrown);
                }

            });
        } else {
            alert("El correo electronico ingresado es incorrecto");
        }
    } else {
        alert("La cédula ingresada es incorrecta");
    }
    
} else {
    alert("Faltan parametros por llenar");
}

 }


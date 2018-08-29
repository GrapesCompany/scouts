/*__________________________________________Inicio Administrador - Jefe de Grupo_________________________________________________________*/

function showAgregarJefeGrupo(str) {

    document.getElementById("div_nuevodirigente").innerHTML = "";
    document.getElementById("div_nuevoscout").innerHTML = "";
    document.getElementById("div_modificarjefegrupo").innerHTML = "";
    document.getElementById("div_listaruscout").innerHTML = "";
    document.getElementById("div_listarudirigente").innerHTML = "";
    document.getElementById("div_listarscouts").innerHTML = "";
    document.getElementById("div_listardirigentes").innerHTML = ""; 

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
    document.getElementById("div_listaruscout").innerHTML = "";
    document.getElementById("div_listarudirigente").innerHTML = "";
    document.getElementById("div_listarscouts").innerHTML = "";
    document.getElementById("div_listardirigentes").innerHTML = ""; 


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
    document.getElementById("div_listaruscout").innerHTML = "";
    document.getElementById("div_listarudirigente").innerHTML = "";
    document.getElementById("div_listarscouts").innerHTML = "";
    document.getElementById("div_listardirigentes").innerHTML = ""; 
 
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
    document.getElementById("div_listaruscout").innerHTML = "";
    document.getElementById("div_listarudirigente").innerHTML = "";
    document.getElementById("div_listarscouts").innerHTML = ""; 
    document.getElementById("div_listardirigentes").innerHTML = "";  

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_modificarjefegrupo").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "modificar_jefegrupo.php?q=" + str, true);
    xmlhttp.send();
}

function showListarUScout(str) {

    document.getElementById("div_nuevojefegrupo").innerHTML = ""; 
    document.getElementById("div_nuevodirigente").innerHTML = "";
    document.getElementById("div_nuevoscout").innerHTML = "";
    document.getElementById("div_modificarjefegrupo").innerHTML = "";
    document.getElementById("div_listarudirigente").innerHTML = "";
    document.getElementById("div_listarscouts").innerHTML = ""; 
    document.getElementById("div_listardirigentes").innerHTML = "";  

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_listaruscout").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_uscout.php?q=" + str, true);
    xmlhttp.send();
}

function showListarUDirigente(str) {

    document.getElementById("div_nuevojefegrupo").innerHTML = ""; 
    document.getElementById("div_nuevodirigente").innerHTML = "";
    document.getElementById("div_nuevoscout").innerHTML = "";
    document.getElementById("div_modificarjefegrupo").innerHTML = "";
    document.getElementById("div_listaruscout").innerHTML = "";
    document.getElementById("div_listarscouts").innerHTML = "";
    document.getElementById("div_listardirigentes").innerHTML = ""; 
      

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_listarudirigente").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_udirigente.php?q=" + str, true);
    xmlhttp.send();
}

function showListarScouts(str) {

    document.getElementById("div_nuevojefegrupo").innerHTML = ""; 
    document.getElementById("div_nuevodirigente").innerHTML = "";
    document.getElementById("div_nuevoscout").innerHTML = "";
    document.getElementById("div_modificarjefegrupo").innerHTML = "";
    document.getElementById("div_listaruscout").innerHTML = "";
    document.getElementById("div_listarudirigente").innerHTML = "";   
    document.getElementById("div_listardirigentes").innerHTML = "";  
    

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
    document.getElementById("div_listaruscout").innerHTML = "";
    document.getElementById("div_listarudirigente").innerHTML = "";  
    document.getElementById("div_listarscouts").innerHTML = ""; 
     

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("div_listardirigentes").innerHTML = this.responseText;
        }
    }

    xmlhttp.open("GET", "listar_dirigentes.php?q=" + str, true);
    xmlhttp.send();
}

 

 /*__________________________________________Fin Administrador - Jefe de Grupo_________________________________________________________*/


 function onlinecampos()
 {
     document.getElementById("cedula").removeAttribute("disabled");
     document.getElementById("nombre").removeAttribute("disabled");
     document.getElementById("apellido").removeAttribute("disabled");
     document.getElementById("fech_nac").removeAttribute("disabled");
     document.getElementById("telefono").removeAttribute("disabled");
     document.getElementById("edad").removeAttribute("disabled");
     document.getElementById("genero").removeAttribute("disabled");
     document.getElementById("celectronico").removeAttribute("disabled");
    
 
 }


 function ingresarJefeGrupo()
 {
   

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
        alert("Faltan parametros por llenar");
    }
 }


 function ingresarNuevoDirigente()
 {
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
    '&fec_elec=' + document.getElementById('fec_elec').value +
    '&uespecifica=' + document.getElementById('uespecifica').value +
  


    '&correo=' + document.getElementById('celectronico').value;
     
if (document.getElementById('cedula').value && document.getElementById('nombre').value && document.getElementById('apellido').value &&
    document.getElementById('telefono').value && document.getElementById('genero').value && document.getElementById('contrasena').value &&
    document.getElementById('fech_nac').value && document.getElementById('direccion').value && document.getElementById('celectronico').value &&
    document.getElementById('edad').value &&  document.getElementById('cargo').value && document.getElementById('unidad').value &&
    document.getElementById('fec_elec').value  ) {
   
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
    alert("Faltan parametros por llenar");
}

 }
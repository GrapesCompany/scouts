<?php
session_start();
if(isset($_SESSION['userJefeGrupo'])){
 // $administrador=$_SESSION['userAdministrador'];
}else
{
  header("Location: index2.php?denegado=peligro");
}
?>


<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>SCOUT Administración</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="./assets/css/font-awesome.css" rel="stylesheet">
    
    <link href="./assets/css/style.css" rel="stylesheet">
	<link href="./assets/css/estilos.css" rel="stylesheet">    
    
		<link href="./assets/js/guidely/guidely.css" rel="stylesheet"> 
		
		<link href="./assets/css/pages/reports.css" rel="stylesheet">


<script languaje="Javascript">   
<!--  
document.write('<style type="text/css">div.cp_oculta{display: none;}</style>');  
function MostrarOcultar(capa,enlace)  
{  
    if (document.getElementById)  
    {  
        var aux = document.getElementById(capa).style;  
        aux.display = aux.display? "":"block";  
    }  
}  
   
//-->  
</script> 
 
  </head>

<body>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="#">
				SCOUT SAN FELIPE NERI - ADMINISTRACIÓN			
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
			
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> 
							Administrador
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="#" onclick="showModificarJefeGrupo(this.value)">Perfil</a></li>
							<li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal2">Cambiar contraseña</a></li>
							<li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Cerrar Sesión</a></li>
						</ul>						
					</li>
				</ul>
			
				<form class="navbar-search pull-right">
				
					<input type="text" class="search-query" id='btnBuscar' placeholder="Buscar...">
					&nbsp;
					<a onclick="showBuscarTotalMiembros(this.value)"><i class="icon-search icon-large colorsearch"></i></a> 
				</form>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
    
<div class="subnavbar">

	<div class="subnavbar-inner">
	
		<div class="container">

			<ul class="mainnav">
				
				<li class="  dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-user"></i>
						<span>Nuevo</span>
						<b class="caret"></b>
					</a>
				
					<ul class="dropdown-menu">
                    	<li><a href="#" onclick="showAgregarJefeGrupo(this.value)">Jefe de Grupo</a></li>
						<li><a href="#" onclick="showAgregarDirigente(this.value)">Dirigente</a></li>
                        <li><a href="#" onclick="showAgregarScout(this.value)">Scout</a></li>
                    </ul>    				
				</li>

				<li class="  dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-list-alt"></i>
						<span>Listar</span>
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
                        <li><a href="#" onclick="showListarScouts(this.value)">Scouts</a></li>
                        <li><a href="#" onclick="showListarDirigentes(this.value)">Dirigentes</a></li>
                    </ul>    				
				</li>

					<li class="  dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-bar-chart"></i>
						<span>Reportes</span>
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><a class="texto" href="javascript:MostrarOcultar('texto1');">Por género</a></li>
						   
                     </ul>    				
				</li>
			
			</ul>

		</div> <!-- /container -->
	
	</div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
    
		


<div class="main">	
	<div class="main-inner">
	    <div class="container">
<!-- __________________________________________________________________________________________________________________________________ -->

<?php 
include 'conexion.php';
$conexion=conectar();

$sql = "SELECT COUNT(*) FROM `usuario` where `SEXO_SCO` = 'Masculino' AND `UNIDAD` = 'Manada'";
$result = mysqli_query($conexion,$sql) or die("Problemas al Reservar cita verifique que sea un usuario del sistema.  "); 
if($r=mysqli_fetch_array($result)){
		$masculino =(int)$r[0];
}

$sql = "SELECT COUNT(*) FROM `usuario` where `SEXO_SCO` = 'Femenino' AND `UNIDAD` = 'Manada'";
$result = mysqli_query($conexion,$sql) or die("Problemas al Reservar cita verifique que sea un usuario del sistema.  "); 
if($r=mysqli_fetch_array($result)){
	$femenino =(int)$r[0];
}

 $dataPoints = array( 
	 array("label"=>"Masculino", "y"=>$masculino),
	 array("label"=>"Femenino", "y"=>$femenino),
 )	
 ?>

 <?php 
 
$sql2 = "SELECT COUNT(*) FROM `usuario` where `SEXO_SCO` = 'Masculino' AND `UNIDAD` = 'Tropa'";
$result = mysqli_query($conexion,$sql2) or die("Problemas al Reservar cita verifique que sea un usuario del sistema.  "); 
if($r=mysqli_fetch_array($result)){
		$masculino2 =(int)$r[0];
}

$sql2 = "SELECT COUNT(*) FROM `usuario` where `SEXO_SCO` = 'Femenino' AND `UNIDAD` = 'Tropa'";
$result = mysqli_query($conexion,$sql2) or die("Problemas al Reservar cita verifique que sea un usuario del sistema.  "); 
if($r=mysqli_fetch_array($result)){
	$femenino2 =(int)$r[0];
}

 $dataPoints2 = array( 
	 array("label"=>"Masculino", "y"=>$masculino2),
	 array("label"=>"Femenino", "y"=>$femenino2),
 )	
 ?>

  <?php 
 
 $sql2 = "SELECT COUNT(*) FROM `usuario` where `SEXO_SCO` = 'Masculino' AND `UNIDAD` = 'Caminante'";
 $result = mysqli_query($conexion,$sql2) or die("Problemas al Reservar cita verifique que sea un usuario del sistema.  "); 
 if($r=mysqli_fetch_array($result)){
		 $masculino2 =(int)$r[0];
 }
 
 $sql2 = "SELECT COUNT(*) FROM `usuario` where `SEXO_SCO` = 'Femenino' AND `UNIDAD` = 'Caminante'";
 $result = mysqli_query($conexion,$sql2) or die("Problemas al Reservar cita verifique que sea un usuario del sistema.  "); 
 if($r=mysqli_fetch_array($result)){
	 $femenino2 =(int)$r[0];
 }
 
  $dataPoints3 = array( 
	  array("label"=>"Masculino", "y"=>$masculino2),
	  array("label"=>"Femenino", "y"=>$femenino2),
  )	
  ?>

    <?php 
	
 $sql2 = "SELECT COUNT(*) FROM `usuario` where `SEXO_SCO` = 'Masculino' AND `UNIDAD` = 'Rover'";
 $result = mysqli_query($conexion,$sql2) or die("Problemas al Reservar cita verifique que sea un usuario del sistema.  "); 
 if($r=mysqli_fetch_array($result)){
		 $masculino2 =(int)$r[0];
 }
 
 $sql2 = "SELECT COUNT(*) FROM `usuario` where `SEXO_SCO` = 'Femenino' AND `UNIDAD` = 'Rover'";
 $result = mysqli_query($conexion,$sql2) or die("Problemas al Reservar cita verifique que sea un usuario del sistema.  "); 
 if($r=mysqli_fetch_array($result)){
	 $femenino2 =(int)$r[0];
 }
 
  $dataPoints4 = array( 
	  array("label"=>"Masculino", "y"=>$masculino2),
	  array("label"=>"Femenino", "y"=>$femenino2),
	 
  )	
  ?>


<!--Agregar Jefe de Grupo-->              
<div id="div_nuevojefegrupo" class="container"></div>

<!--Agregar Dirigente-->              
<div id="div_nuevodirigente" class="container"></div> 

<!--Agregar Scout-->              
<div id="div_nuevoscout" class="container"></div> 

<!--Modificar Jefe de Grupo-->              
<div id="div_modificarjefegrupo" class="container"></div> 

<!--Listar Scouts-->              
<div id="div_listarscouts" class="container"></div>

<!--Listar Dirigentes-->              
<div id="div_listardirigentes" class="container"></div>

<!--Buscar Total Miembros-->              
<div id="div_buscartotalmiembros" class="container"></div>


 

<!--Reporte por Genero-->              
<div class="cp_oculta" id="texto1">
<div id="div_reportegenero">

<h2>Manada:</h2> 
<hr>
<div id="chartContainer" style="height: 300pt; width: 100%;"></div>
<br>
<h2>Tropa:</h2> 
<hr>
<div id="chartContainer2" style="height: 300pt; width: 100%;"></div>
<br>
<h2>Caminante:</h2> 
<hr>
<div id="chartContainer3" style="height: 300pt; width: 100%;"></div>
<br>
<h2>Rover:</h2> 
<hr>
<div id="chartContainer4" style="height: 300pt; width: 100%;"></div>

  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</div>
</div>

<!--Listado de Scouts-->              
<div id="div_listadoscouts" class="container"></div>

<!--Listado de Dirigentes-->              
<div id="div_listadodirigentes" class="container"></div>

       



<!-- __________________________________________________________________________________________________________________________________ -->

	    </div> <!-- /container -->    
	</div> <!-- /main-inner -->	    
</div> <!-- /main -->
    

    <!-- Seccion Salir-->
    <div class="modal fade colorbtn2" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title letrasalir" id="exampleModalLabel">¿Desea salir?

			 <button class="close reubicarclose" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
			</h5>
           
          </div>
         
          <div class="modal-footer">
          <a class="btn btn-lg tambutton colorbtn" href="./login/cerrar.php/?tipo=jefedegrupo">Si</a>
          <a class="btn btn-lg tambutton" type="button" data-dismiss="modal">No</a>
            
          </div>
        </div>
      </div>
	</div>
	

	    <!-- Seccion Cambiar Contraseña-->
		<div class="modal fade colorbtn2" id="logoutModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title letrasalir" id="exampleModalLabel">¿Desea cambiar la contraseña?
			 <button class="close reubicarclose" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
			</h5>
			        
          </div>
         
          <div class="modal-footer">
		
		  <label for="catual" class="tamletra aligfn">Contraseña Actual</label>
		  <input type="password" id="cactual" class="form-control monte" placeholder="******" required="required" autofocus="autofocus">   
		  <hr>
		  <label for="cnueva" class="tamletra aligfn">Contraseña Nueva</label>
		  <input type="password" id="cnueva" class="form-control monte" placeholder="******" required="required" autofocus="autofocus">  
		  
		  <label for="rcnueva" class="tamletra aligfn">Repetir Contraseña Nueva </label>
          <input type="password" id="rcnueva" class="form-control monte" placeholder="******" required="required" autofocus="autofocus">  
		
          <button class="btn btn-lg tambutton2 colorbtn3"  onclick="cambiarContrasenaJefeGrupo()" href="#">Guardar</button>
          
		  <button  class="btn btn-lg tambutton2" type="submit" data-dismiss="modal">Cancelar</button>
		 
          </div>
        </div>
      </div>
    </div>


    <!-- Seccion Cambiar Scout de Unidad-->
    <div class="modal fade colorbtn2" id="CambiarScoutAd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title letrasalir" id="exampleModalLabel">¿Desea cambiar al Scout de Unidad?

			 <button class="close reubicarclose" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
			</h5>
          </div>
          <div class="modal-footer"> 
		  <p class="altra"></p>
	  
		   <hr>
		  <label for="unidadn" class="tamletra aligfn"><b>Unidad Nueva:</b></label> 
    	  <select type="text" id="unidadn" name="unidadn" class="form-control monte8" placeholder="Unidad" required="required" autofocus="autofocus">
         <option value="1">Manada</option>
         <option value="2">Tropa</option>  
         <option value="3">Caminante</option>
         <option value="4">Rover</option>
  		 </select> 
		  
		   
		   <p class="altra"></p><br>
          <button class="btn btn-lg tambutton2 colorbtn3"  onclick="actualizarScoutUnidadJG()" data-dismiss="modal" href="#">Cambiar</button>
          <button class="btn btn-lg tambutton2" type="button" data-dismiss="modal">Cancelar</button>  
 
		           
          </div>

        </div>
      </div>
	</div>


	    <!-- Seccion Cambiar Dirigentes de Unidad-->
		<div class="modal fade colorbtn2" id="CambiarDirigenteAd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title letrasalir" id="exampleModalLabel">¿Desea cambiar al Dirigente de Unidad?

			 <button class="close reubicarclose" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
			</h5>
          </div>
          <div class="modal-footer"> 
		  <p class="altra"></p>
	 	   
		   <hr>
		  <label for="unidadnD" class="tamletra aligfn"><b>Unidad Nueva:</b></label> 
    	  <select type="text" id="unidadnD" name="unidadnD" class="form-control monte8" placeholder="Unidad" required="required" autofocus="autofocus">
         <option value="1">Manada</option>
         <option value="2">Tropa</option>  
         <option value="3">Caminante</option>
         <option value="4">Rover</option>
  		 </select> 
		   <p class="altra"></p><br>
          <button class="btn btn-lg tambutton2 colorbtn3" onclick="actualizarDirigenteUnidadJG()" data-dismiss="modal"  href="#">Cambiar</button>
          <button class="btn btn-lg tambutton2" type="button" data-dismiss="modal">Cancelar</button>  
		            
          </div>

        </div>
      </div>
	</div>

		    <!-- Seccion Cambiar Cargo de Dirigentes-->
			<div class="modal fade colorbtn2" id="CambiarDirigenteCargo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title letrasalir" id="exampleModalLabel">¿Desea cambiar el cargo de un Dirigente?

			 <button class="close reubicarclose" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
			</h5>
          </div>
          <div class="modal-footer"> 
		  <p class="altra"></p>
	 	    
		   <hr>
		  <label for="cargod" class="tamletra aligfn"><b>Nuevo Cargo:</b></label> 
		  <input type="text" id="cargod" class="form-control monte7"  required="required" autofocus="autofocus">

		   <p class="altra"></p><br>
          <button class="btn btn-lg tambutton2 colorbtn3" data-dismiss="modal"  href="#">Cambiar</button>
          <button class="btn btn-lg tambutton2" type="button" data-dismiss="modal">Cancelar</button>  
		            
          </div>

        </div>
      </div>
	</div>


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./assets/js/jquery-1.7.2.min.js"></script>

<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/base.js"></script>
<script src="./assets/js/excanvas.min.js"></script>
<script src="./assets/js/chart.min.js"></script>

<script src="./assets/js/guidely/guidely.min.js"></script>
<script src="./vendor/js/funciones.js"></script>
<script src="./vendor/js/validaciones.js"></script>

<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
 

<script>

window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Reporte"
	},
	subtitles: [{
		text: "por género:"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0\"\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});

var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title: {
		text: "Reporte"
	},
	subtitles: [{
		text: "por género:"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0\"\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});

var chart3 = new CanvasJS.Chart("chartContainer3", {
	animationEnabled: true,
	title: {
		text: "Reporte"
	},
	subtitles: [{
		text: "por género:"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0\"\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints3, JSON_NUMERIC_CHECK); ?>
	}]
});

var chart4 = new CanvasJS.Chart("chartContainer4", {
	animationEnabled: true,
	title: {
		text: "Reporte"
	},
	subtitles: [{
		text: "por género:"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0\"\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
	}]
});

chart.render();
chart2.render();
chart3.render();
chart4.render();
 
}




</script>

 
  </body>

</html>

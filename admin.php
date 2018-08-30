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
			
			<a class="brand" href="index2.php">
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
					<input type="text" class="search-query" placeholder="Buscar...">
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
                        <li><a href="#" onclick="showReporteGenero(this.value)">Por género</a></li>
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

<!--Reporte por Genero-->              
<div id="div_reportegenero" class="container"></div>

<!--Listado de Scouts-->              
<div id="div_listadoscouts" class="container"></div>

<!--Listado de Dirigentes-->              
<div id="div_listadodirigentes" class="container"></div>


<?php
 
 $dataPoints = array( 
	 array("label"=>"Masculino", "y"=>60),
	 array("label"=>"Femenino", "y"=>40),
 )
	
 ?>

  <div id="chartContainer" style="height: 400pt; width: 100%;"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

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
          <button class="btn btn-lg tambutton colorbtn" href="#">Si</button>
          <button class="btn btn-lg tambutton" type="button" data-dismiss="modal">No</button>
            
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
		  <input type="password" id="catual" class="form-control monte" placeholder="******" required="required" autofocus="autofocus">   
		  <hr>
		  <label for="cnueva" class="tamletra aligfn">Contraseña Nueva</label>
		  <input type="password" id="cnueva" class="form-control monte" placeholder="******" required="required" autofocus="autofocus">  
		  
		  <label for="rcnueva" class="tamletra aligfn">Repetir Contraseña Nueva </label>
          <input type="password" id="rcnueva" class="form-control monte" placeholder="******" required="required" autofocus="autofocus">  
		 
          <button class="btn btn-lg tambutton2 colorbtn3" href="#">Guardar</button>
          <button class="btn btn-lg tambutton2" type="button" data-dismiss="modal">Cancelar</button>
            
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
	 	   <label for="unidadac" class="tamletra aligfn">Unidad Actual:</label>
          <input type="text" id="unidadac" class="form-control monte7" placeholder="Manada" disabled required="required" autofocus="autofocus">
		   <hr>
		  <label for="unidadn" class="tamletra aligfn"><b>Unidad Nueva:</b></label> 
    	  <select type="text" id="unidadn" name="unidadn" class="form-control monte8" placeholder="Unidad" required="required" autofocus="autofocus">
         <option value="1">Manada</option>
         <option value="2">Tropa</option>  
         <option value="3">Caminante</option>
         <option value="4">Rover</option>
  		 </select> 
		   <p class="altra"></p><br>
          <button class="btn btn-lg tambutton2 colorbtn3" href="#">Cambiar</button>
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
	 	   <label for="unidada" class="tamletra aligfn">Unidad Actual:</label>
          <input type="text" id="unidada" class="form-control monte7" placeholder="Manada" disabled required="required" autofocus="autofocus">
		   <hr>
		  <label for="unidadn" class="tamletra aligfn"><b>Unidad Nueva:</b></label> 
    	  <select type="text" id="unidadn" name="unidadn" class="form-control monte8" placeholder="Unidad" required="required" autofocus="autofocus">
         <option value="1">Manada</option>
         <option value="2">Tropa</option>  
         <option value="3">Caminante</option>
         <option value="4">Rover</option>
  		 </select> 
		   <p class="altra"></p><br>
          <button class="btn btn-lg tambutton2 colorbtn3" href="#">Cambiar</button>
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
		text: "Noviembre 2017"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

 
  </body>

</html>

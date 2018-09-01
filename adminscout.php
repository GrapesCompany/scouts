<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>SCOUT Usuario</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
    
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="./assets/css/font-awesome.css" rel="stylesheet">
    
    <link href="./assets/css/style.css" rel="stylesheet">
	<link href="./assets/css/estilos.css" rel="stylesheet">
    
    
    <link href="./assets/js/guidely/guidely.css" rel="stylesheet"> 

 
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
				SCOUT SAN FELIPE NERI - SCOUT			
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
			
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i> 
							Scout
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
							<li><a href="#" onclick="showModificarScout(this.value)">Perfil</a></li>
							<li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal2">Cambiar contraseña</a></li>
							<li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Cerrar Sesión</a></li>
							
						</ul>						
					</li>
				</ul>
			
				
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
						<i class="icon-list-alt"></i>
						<span>Listar</span>
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
                    	<li><a href="#" onclick="showListarUJefese(this.value)">Jefe de Grupo</a></li>
                        <li><a href="#" onclick="showListarScoutse(this.value)">Scout</a></li>
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

 
<!--Listar Scouts-->              
<div id="div_listarscoutse" class="container"></div>

<!--Listar Unidad Dirigente-->              
<div id="div_listarujefese" class="container"></div> 

<!--Modificar Scout-->              
<div id="div_modificarscout" class="container"></div> 

<!--Listado Scout-->              
<div id="div_listarscoutssc" class="container"></div> 

<!--Listado Jefe de Grupo-->              
<div id="div_listarjefegsc" class="container"></div>
 

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
          <a class="btn btn-lg tambutton colorbtn" href="./login/cerrar.php/?tipo=scout">Si</a>
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
		  
		  <label for="cactual" class="tamletra aligfn">Contraseña Actual</label>
		  <input type="password" id="cactual" class="form-control monte" placeholder="******" required="required" autofocus="autofocus">   
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



<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./assets/js/jquery-1.7.2.min.js"></script>

<script src="./assets/js/bootstrap.js"></script>
<script src="./assets/js/base.js"></script>

<script src="./assets/js/guidely/guidely.min.js"></script>
<script src="./vendor/js/funciones.js"></script>


 
  </body>

</html>

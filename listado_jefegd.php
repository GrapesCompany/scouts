<?php

include 'conexion.php';
session_start();
$conexion = conectar();
$grupoD = $_SESSION["userDirigente"][0]["grupoD"];

$findDirigentes = mysqli_query($conexion, "SELECT * FROM jefe_grupo JOIN trabajador on jefe_grupo.CEDULA_TRA = trabajador.CEDULA_TRA")
or die("Problemas en el select" . mysqli_error($conexion));

 $pep ='<div class="row">	      	
		  	  
 <div class="span10">     
     <div class="widget paddi">       
       <div class="widget-content padd">       
         <h2 class="colores"> <i class="icon-bar-chart"></i> Listado Jefe de Grupo - Dirigentes</h2>         
          <hr>

<div class="container">	  
 
 
    <div class="span8 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">			      		
       <table class="table">
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Cédula</th>
           <th scope="col">Fecha de Eleccion</th>
           <th scope="col">Informacion</th>
           <th scope="col" class="text-center">Acción</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <th scope="row">1</th>
           <td>1717171717</td>
           <td>Pepito</td>
           <td>Alcazer</td>          
           <td><button type="button" class="btn btn-warning dropdown-item colorbtnlist" data-toggle="modal" data-target="#CambiarDirigenteAd">Ver detalle</button></td> 
         </tr>
        
         
       </tbody>
     </table>
     
 </div> 
 
     </div>  
   </div>  <!--/span4             <td><button type="button" class="btn btn-warning"><a class="dropdown-item colorbtnlist" href="#" data-toggle="modal" data-target="#CambiarScoutAd">Mostrar</a></button></td> 
   -->      	
   
   

   
 
   <!--<div class="span1 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content paddibutton">
       <br> 
      <button type="button" class="btn btn-primary btn-block colorbtn6" onclick="onlinecampos(this.value)">Modificar</button>     
  </div>  
     </div>  
 </div>  /span4 -->


</div> <!-- /container -->
</div> <!-- /widget-content -->
       
     </div> <!-- /widget -->
     
   </div> <!-- /span12 -->

 </div> <!-- /row -->';
echo $pep;
?>
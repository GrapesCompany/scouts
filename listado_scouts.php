<?php

include 'conexion.php';
$idUnidad = $_GET['q'];
$UnidadStr;          

if($idUnidad == '1')
  $UnidadStr = 'Manada';
else
  if($idUnidad == '2')
    $UnidadStr = 'Tropa';
  else
    if($idUnidad == '3')
      $UnidadStr = 'Caminante';
    else
      $UnidadStr = 'Rover';

$conexion = conectar();

$findCita = mysqli_query($conexion, "SELECT * FROM usuario WHERE ID_GRUPO_SCOUT =$idUnidad")
or die("Problemas en el select" . mysqli_error($conexion));


 echo '<div class="row">	      	
		  	  
 <div class="span10">     
     <div class="widget paddi">       
       <div class="widget-content padd">       
         <h2 class="colores"> <i class="icon-list"></i> Listado Scouts</h2>         
          <hr>

<div class="container">	  
 
 
    <div class="span8">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">			      		
       <table class="table">
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">Cédula</th>
           <th scope="col">Nombre</th>
           <th scope="col">Apellido</th>
           <th scope="col">Edad</th>
           <th scope="col">Unidad</th>
           <th scope="col">Correo</th>
           <th scope="col" class="text-center">Acción</th>
         </tr>
       </thead>
       <tbody>';
       $c = 1;
          while ($row = (mysqli_fetch_array($findCita))) {
       echo '
         <tr>
           <th scope="row">'.$c.'</th>
           <td>'.$row[0].'</td>
           <td>'.$row[2].'</td>
           <td>'.$row[3].'</td>          
           <td>'.$row[8].'</td>          
           <td>'.$UnidadStr.'</td>          
           <td>'.$row[9].'</td>          
           <td><button type="button"  value="'.$row[0].'"  onclick="cambioUnidadScoutJG(this.value)" class="btn btn-warning dropdown-item colorbtnlist" >Cambiar Unidad</button></td> 
 
           </tr>';
         $c++;
       }
    echo '   
       </tbody>
     </table>
     
 </div> 
 
     </div>  
   </div>   	
   
   

   
 
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

?>
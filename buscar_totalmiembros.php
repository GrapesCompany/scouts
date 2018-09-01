<?php

include 'conexion.php';
$idBuscar = $_GET['q'];
$conexion = conectar();

$findUsuarios = mysqli_query($conexion, "SELECT * FROM usuario 
                                        WHERE NOMBRE 
                                        LIKE '%$idBuscar%' OR APELLIDO 
                                        LIKE '%$idBuscar%' OR EMAIL 
                                        LIKE '%$idBuscar%'")or die("Problemas en el select" . mysqli_error($conexion));

$findJefedeGrupo = mysqli_query($conexion, "SELECT * FROM trabajador 
                                            JOIN jefe_grupo ON trabajador.CEDULA_TRA=jefe_grupo.CEDULA_TRA 
                                            WHERE trabajador.NOMBRE_TRA 
                                            LIKE '%$idBuscar%' OR trabajador.APELLIDO_TRA 
                                            LIKE '%$idBuscar%' OR trabajador.EMAIL_TRA 
                                            LIKE '%$idBuscar%'")or die("Problemas en el select" . mysqli_error($conexion));

$findDirigente = mysqli_query($conexion, "SELECT * FROM trabajador 
                                          JOIN dirigente ON trabajador.CEDULA_TRA=dirigente.CEDULA_TRA 
                                          WHERE trabajador.NOMBRE_TRA 
                                          LIKE '%$idBuscar%' OR trabajador.APELLIDO_TRA 
                                          LIKE '%$idBuscar%' OR trabajador.EMAIL_TRA 
                                          LIKE '%$idBuscar%'")or die("Problemas en el select" . mysqli_error($conexion));

 echo '<div class="row">	      	
		  	  
 <div class="span10">     
     <div class="widget paddi">       
       <div class="widget-content padd">       
         <h2 class="colores"> <i class="icon-bar-chart"></i> Búsqueda Total</h2>         
          <hr>

<div class="container">	  
 
 
    <div class="span8">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">	

       <h2 class="colores"> <i class="icon-group"></i>Scouts</h2>         
       <hr>

       <table class="table">
       <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Cédula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Correo</th>
          </tr>
       </thead>
       <tbody>';
       $c = 1;
          while ($row = (mysqli_fetch_array($findUsuarios))) {
       echo '
         <tr>
            <th scope="row">'.$c.'</th>
            <td>'.$row[0].'</td>
            <td>'.$row[2].'</td>
            <td>'.$row[3].'</td>          
            <td>'.$row[8].'</td>          
            <td>'.$row[9].'</td>                
          </tr>';
         $c++;
       }
    echo '       
       </tbody>
     </table>

     <h2 class="colores"> <i class="icon-user"></i> Jefes de Grupo</h2>         
       <hr>

     <table class="table">
       <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Cédula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Correo</th>
          </tr>
       </thead>
       <tbody>';
       $d = 1;
          while ($row = (mysqli_fetch_array($findJefedeGrupo))) {
       echo '
         <tr>
            <th scope="row">'.$d.'</th>
            <td>'.$row[0].'</td>
            <td>'.$row[1].'</td>
            <td>'.$row[2].'</td>          
            <td>'.$row[5].'</td>          
            <td>'.$row[7].'</td>                
          </tr>';
         $d++;
       }
    echo '       
       </tbody>
     </table>

     <h2 class="colores"> <i class="icon-male"></i> Dirigentes</h2>         
       <hr>

     <table class="table">
       <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Cédula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Correo</th>
          </tr>
       </thead>
       <tbody>';
       $e = 1;
          while ($row = (mysqli_fetch_array($findDirigente))) {
       echo '
         <tr>
            <th scope="row">'.$e.'</th>
            <td>'.$row[0].'</td>
            <td>'.$row[1].'</td>
            <td>'.$row[2].'</td>          
            <td>'.$row[5].'</td>          
            <td>'.$row[7].'</td>            
          </tr>';
         $e++;
       }
    echo '       
       </tbody>
     </table>
     
 </div> 
 
     </div>  
   </div>   	
   
   
 


</div> <!-- /container -->
</div> <!-- /widget-content -->
       
     </div> <!-- /widget -->
     
   </div> <!-- /span12 -->

 </div> <!-- /row -->';

?>
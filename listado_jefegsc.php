<?php
include 'conexion.php';
session_start();
 $conexion = conectar();

 $idGrupoS = $_SESSION["userScout"][0]["idGrupoS"];

$findJefeGrupo = mysqli_query($conexion, "SELECT * FROM usuario WHERE ID_GRUPO_SCOUT =$idGrupoS")
or die("Problemas en el select" . mysqli_error($conexion));



 echo '<div class="row">	      	
		  	  
 <div class="span10">     
     <div class="widget paddi">       
       <div class="widget-content padd">       
         <h2 class="colores"> <i class="icon-bar-chart"></i> Listado Jefe de Grupo - Scout</h2>         
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
           <th scope="col">Fecha de Nacimiento</th>
           <th scope="col">Direccion</th>
           <th scope="col">Telefono</th>
           <th scope="col" class="text-center">Acción</th>
         </tr>
       </thead>
       <tbody>';
       $c = 1;
          while ($row = (mysqli_fetch_array($findJefeGrupo))) {
       echo '
         <tr>
            <th scope="row">'.$c.'</th>
            <td>'.$row[0].'</td>
            <td>'.$row[2].'</td>
            <td>'.$row[3].'</td>
            <td>'.$row[5].'</td>          
            <td>'.$row[6].'</td>          
            <td>'.$row[7].'</td>            
            <td><button type="button" value='.$row[0].' class="btn btn-warning colorbtnlist" onclick="showdatoscout(this.value)">Ver</button></td> 
         </tr>';
         $c++;
       }
    echo '
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

?>
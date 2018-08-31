<?php

include 'conexion.php';
session_start();
$conexion = conectar();
$grupoD = $_SESSION["userDirigente"][0]["grupoD"];

$findScouts = mysqli_query($conexion, "SELECT * FROM usuario WHERE ID_GRUPO_SCOUT =$grupoD")
or die("Problemas en el select" . mysqli_error($conexion));

echo '<div class="row">	      	
		  	  
<div class="span10">     
    <div class="widget paddi">       
      <div class="widget-content padd">       
        <h2 class="colores"> <i class="icon-bar-chart"></i> Listado de Scouts</h2>         
         <hr>

<div class="container">	  


   <div class="span8">	      		
    <div class="widget">	      			
      <div class="widget-content colorwidget">			      		
      <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombres</th>
          <th scope="col">Email</th>
          <th scope="col">Representante</th>
          <th scope="col">Direccion</th>
          <th scope="col">Telefono</th>
          <th scope="col" class="text-center">Acción</th>
        </tr>
      </thead>
      <tbody>';
      $c = 1;
         while ($row = (mysqli_fetch_array($findScouts))) {
      echo '
        <tr>
           <th scope="row">'.$c.'</th>
           <td>'.$row[2].' &nbsp '.$row[3].'</td>
           <td>'.$row[9].'</td>                    
           <td>'.$row[12].'</td>            
           <td>'.$row[13].'</td>            
           <td>'.$row[14].'</td>            
          <td><button type="button" class="btn btn-warning dropdown-item colorbtnlist" data-toggle="modal" data-target="#CambiarDirigenteAd">Mostrar</button></td> 
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

<?php

include 'conexion.php';
session_start();
$conexion = conectar();

$findDirigentes = mysqli_query($conexion, "SELECT * 
                                          FROM jefe_grupo JOIN trabajador 
                                          on jefe_grupo.CEDULA_TRA = trabajador.CEDULA_TRA")
or die("Problemas en el select" . mysqli_error($conexion));

$findJefeGrupo = mysqli_query($conexion, "SELECT * 
                                          FROM trabajador JOIN jefe_grupo 
                                          ON trabajador.CEDULA_TRA=jefe_grupo.CEDULA_TRA")
or die("Problemas en el select" . mysqli_error($conexion));


 
echo '<div class="row">	      	
		  	  
<div class="span10">     
    <div class="widget paddi">       
      <div class="widget-content padd">       
        <h2 class="colores"> <i class="icon-bar-chart"></i> Listado Jefe de Grupo </h2>         
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
          <th scope="col">Nombres y Apellidos</th>
          <th scope="col">Telefono</th>
          <th scope="col">Email</th>
          <th scope="col">Direccion</th>
          <th scope="col" class="text-center">Acción</th>
        </tr>
      </thead>
      <tbody>';
      $d = 1;
         while ($row = (mysqli_fetch_array($findJefeGrupo))) {
      echo '
        <tr>
           <th scope="row">'.$d.'</th>
           <td>'.$row[0].'</td>
           <td>'.$row[1].' &nbsp '.$row[2].'</td>            
           <td>'.$row[3].'</td>                    
           <td>'.$row[7].'</td>            
           <td>'.$row[10].'</td>            
          <td><button type="button" class="btn btn-warning dropdown-item colorbtnlist" data-toggle="modal" data-target="#CambiarDirigenteAd">Mostrar</button></td> 
        </tr>';
        $d++;
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


 echo '<div class="row">	      	
		  	  
 <div class="span10">     
     <div class="widget paddi">       
       <div class="widget-content padd">       
         <h2 class="colores"> <i class="icon-bar-chart"></i> Listado Dirigentes</h2>         
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
           <th scope="col">Fecha de Eleccion</th>
           <th scope="col">Nombres y Apellidos</th>
           <th scope="col">Telefono</th>
           <th scope="col">Direccion</th>
           <th scope="col" class="text-center">Acción</th>
         </tr>
       </thead>
       <tbody>';
       $c = 1;
          while ($row = (mysqli_fetch_array($findDirigentes))) {
       echo '
         <tr>
            <th scope="row">'.$c.'</th>
            <td>'.$row[0].'</td>
            <td>'.$row[1].'</td>                    
            <td>'.$row[4].' &nbsp '.$row[5].'</td>            
            <td>'.$row[6].'</td>            
            <td>'.$row[13].'</td>            
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
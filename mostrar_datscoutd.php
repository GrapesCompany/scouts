<?php

include 'conexion.php';
$idUsuario = $_GET['q'];
$conexion = conectar();

$UnidadStr;          

$infoUsuarios = mysqli_query($conexion, "SELECT * FROM usuario u 
                                          inner JOIN grupo g 
                                          on u.ID_GRUPO_SCOUT = g.ID_GRUPO_SCOUT
                                          WHERE u.CEDULA = '$idUsuario'")or die("Problemas en el select" . mysqli_error($conexion));


while ($row = (mysqli_fetch_array($infoUsuarios))) {

  if($row[10] == '1')
  $UnidadStr = 'Manada';
else
  if($row[10] == '2')
    $UnidadStr = 'Tropa';
  else
    if($row[10] == '3')
      $UnidadStr = 'Caminante';
    else
    $row[10] = 'Rover';



 echo '		<div class="row">	      	
		  	  
 <div class="span10">
     
     <div class="widget paddi">
       
       <div class="widget-content padd">
       
         <h2 class="colores"> <i class="icon-user"></i> Detalle Datos Scout</h2>
         
          <hr>

<div class="container">	

<div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
     <label for="cedula" class="tamletra2"><b>Cédula</b></label>					 
     <input type="text" name="cedula" id="cedula"  onkeyup="this.value=soloNumeros(this.value)" disabled minlength="10" maxlength="10" class="form-control monte10" placeholder="'.$row[0].'" required="required" autofocus="autofocus">
           </div> <!-- /widget-content -->
     </div> <!-- /widget -->
   </div> <!-- /span4 -->
 
<div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">			      		
     <label for="nombre" class="tamletra2"><b>Nombre</b></label>
  <input type="text" name="nombre" id="nombre" onkeyup="this.value=soloLetras(this.value)" disabled class="form-control monte10" placeholder="'.$row[2].'" required="required">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
   </div> <!-- /span4 -->      		 	
   
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
     <label for="apellido" class="tamletra2"><b>Apellido</b></label>
              <input type="text" name="apellido" id="apellido"  onkeyup="this.value=soloLetras(this.value)" disabled class="form-control monte10" placeholder="'.$row[3].'" required="required">		      		
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="fech_nac" class="tamletra2"><b>Fecha de Nacimiento</b></label>
             <input type="text" id="fech_nac" name="fech_nac"  class="form-control monte10" disabled placeholder="'.$row[5].'" required="required">
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->

 <div class="span4 hespan">	      		
 <div class="widget">	      			
   <div class="widget-content colorwidget">
   <label for="genero" class="tamletra2">Genero</label>				
   <input type="text" id="genero" name="genero"  class="form-control monte10" disabled placeholder="'.$row[4].'" required="required">

</div> <!-- /widget-content -->
 </div> <!-- /widget -->
</div> <!-- /span4 -->

 <div class="span4 hespan">	      		
 <div class="widget">	      			
   <div class="widget-content colorwidget">
<label for="edad" class="tamletra2">Edad</label>
        <input type="text" id="edad" name="edad"  onkeyup="this.value=soloNumeros(this.value)" disabled maxlength="2"class="form-control monte10" placeholder="'.$row[8].'" required="required">
</div> <!-- /widget-content -->
 </div> <!-- /widget -->
</div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="telefono" class="tamletra2">Teléfono</label>
            <input type="text" id="telefono" name="telefono" disabled  onkeyup="this.value=soloNumeros(this.value)" maxlength="10" class="form-control monte10" placeholder="'.$row[7].'" required="required" autofocus="autofocus">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 

 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">				   
       <label for="direccion" class="tamletra2">Dirección</label>
       <input type="text" id="direccion" name="direccion" class="form-control monte10" disabled placeholder="'.$row[6].'" required="required">
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="celectronico" class="tamletra2">Correo electrónico</label>
             <input type="text" id="celectronico" class="form-control monte10" disabled placeholder="'.$row[9].'" required="required">
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 

<div class="span4 hespan">	      		
<div class="widget">	      			
  <div class="widget-content colorwidget">				   
 <label for="unidad" class="tamletra2">Unidad</label>				
 <input type="text" id="unidad" name="unidad" disabled class="form-control monte10" placeholder="'.$UnidadStr.'" required="required">

</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span4 -->

<div class="span4 hespan">	      		
<div class="widget">	      			
  <div class="widget-content colorwidget">
<label for="uespecifica" class="tamletra2">Unidad específica</label>
      <input type="text" id="uespecifica" class="form-control monte10" disabled placeholder="'.$row[18].'" required="required" autofocus="autofocus">
      
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span4 -->

 
 

 <div class="container">	    	  
  <div class="span10"> 
     <div class="widget medida2">
       <div class="widget-content medida">
         <h3 class="colores"> <i class="icon-user"></i> Representante</h3>
          <hr>
            <div class="container medida">	

            <div class="span4 hespan2">	      		
            <div class="widget">	      			
              <div class="widget-content colorwidget">
          <label for="cedular" class="tamletra2">Cédula</label>
                   <input type="text" id="cedular"  onkeyup="this.value=soloNumeros(this.value)" disabled minlength="10" maxlength="10" class="form-control monte11" placeholder="'.$row[11].'" required="required" autofocus="autofocus">      
         </div> <!-- /widget-content -->
            </div> <!-- /widget -->
          </div> <!-- /span4 -->

          <div class="span4 hespan2">	      		
            <div class="widget">	      			
              <div class="widget-content colorwidget">
          <label for="nombrer" class="tamletra2">Nombres Completos</label>
                   <input type="text" id="nombrer" onkeyup="this.value=soloLetras(this.value)" disabled class="form-control monte11" placeholder="'.$row[12].'" required="required" autofocus="autofocus">      
         </div> <!-- /widget-content -->
            </div> <!-- /widget -->
          </div> <!-- /span4 -->

          <div class="span4 hespan2">	      		
          <div class="widget">	      			
            <div class="widget-content colorwidget">
        <label for="direccionr" class="tamletra2">Dirección</label>
                 <input type="text" id="direccionr" class="form-control monte11" disabled placeholder="'.$row[13].'" required="required" autofocus="autofocus">      
       </div> <!-- /widget-content -->
          </div> <!-- /widget -->
        </div> <!-- /span4 -->

        <div class="span4 hespan2">	      		
        <div class="widget">	      			
          <div class="widget-content colorwidget">
      <label for="telefonor" class="tamletra2">Telefóno</label>
               <input type="text" id="telefonor" onkeyup="this.value=soloNumeros(this.value)" disabled maxlength="10"  class="form-control monte11" placeholder="'.$row[14].'" required="required" autofocus="autofocus">      
     </div> <!-- /widget-content -->
        </div> <!-- /widget -->
      </div> <!-- /span4 -->
            </div>
          </div>
        </div>
      </div>
  </div>


  <div class="span8 hespan">	      		
  <div class="widget">	      			
    <div class="widget-content colorwidget">
    <br>
    <button type="button" class="btn btn-warning colorbtnlist" onclick="showBuscarTotalMiembrosd()">Regresar</button>
</div> <!-- /widget-content -->
  </div> <!-- /widget -->
</div> <!-- /span4 -->

</div> <!-- /container -->
</div> <!-- /widget-content -->
       
     </div> <!-- /widget -->
     
   </div> <!-- /span12 -->

 </div> <!-- /row -->';
}
?>
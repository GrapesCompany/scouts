<?php


session_start();
if(isset($_SESSION['userDirigente'])){
  $dirigente=$_SESSION['userDirigente'];
}else
{
  header("Location: ../index2.php");
}



$cedulaD=$dirigente[0]['cedulaD'];
$nombreD=$dirigente[0]['nombreD'];
$apellidoD=$dirigente[0]['apellidoD'];
$telefonoD=$dirigente[0]['telefonoD'];
$edadD=$dirigente[0]['edadD'];
$generoD=$dirigente[0]['generoD'];
$emailD=$dirigente[0]['emailD'];
$fechNacD=$dirigente[0]['fechNacD'];
$direccionD=$dirigente[0]['direccionD'];
$grupoD=$dirigente[0]['grupoD'];
$unidadD=$dirigente[0]['unidadD'];
$cargoD=$dirigente[0]['cargoD'];


echo '		<div class="row">	      	
		  	  
 <div class="span10">
     
     <div class="widget paddi">
       
       <div class="widget-content padd">
       
         <h2 class="colores"> <i class="icon-user"></i> Mi Perfil</h2>
         
          <hr>

<div class="container">	

<div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
     <label for="cedula" class="tamletra">Cédula</label>					 
     <input type="text" name="cedula" id="cedula" value="'; echo $cedulaD;echo'" class="form-control monte" placeholder="1717171717" disabled required="required" autofocus="autofocus">
           </div> <!-- /widget-content -->
     </div> <!-- /widget -->
   </div> <!-- /span4 -->
 
<div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">			      		
     <label for="nombre" class="tamletra">Nombre</label>
  <input type="text" name="nombre" id="nombre" onkeyup="this.value=soloLetras(this.value)"  value="'; echo $nombreD; echo'" class="form-control monte" placeholder="Example" disabled required="required">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
   </div> <!-- /span4 -->      		 	
   
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
     <label for="apellido" class="tamletra">Apellido</label>
              <input type="text" name="apellido" id="apellido" onkeyup="this.value=soloLetras(this.value)"  value="'; echo $apellidoD;echo'" class="form-control monte" placeholder="Example" disabled required="required">		      		
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="fech_nac" class="tamletra">Fecha de Nacimiento</label>
             <input type="date" id="fech_nac" name="fech_nac"  value="'; echo $fechNacD;echo'" class="form-control monte" placeholder="Fecha de Nacimiento" disabled required="required">
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="telefono" class="tamletra">Teléfono</label>
            <input type="text" id="telefono" name="telefono"  onkeyup="this.value=soloNumeros(this.value)" maxlength="10" value="'; echo $telefonoD;echo'" class="form-control monte" placeholder="Teléfono" disabled required="required" autofocus="autofocus">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
    <label for="edad" class="tamletra">Edad</label>
            <input type="text" id="edad" name="edad"  nkeyup="this.value=soloNumeros(this.value)" maxlength="2"  value="'; echo $edadD;echo'"  class="form-control monte" placeholder="18" disabled required="required">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">				   
      <label for="genero" class="tamletra">Género</label>				
    <select type="text" id="genero" name="genero" class="form-control monte"  value="'; echo $generoD;echo'" placeholder="Género" disabled required="required" autofocus="autofocus">
              <option value="Masculino" class="monte">Masculino</option>
              <option value="Femenino">Femenino</option>                           
        </select> 
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="celectronico" class="tamletra">Correo electrónico</label>
             <input type="email" id="celectronico" value="'; echo $emailD;echo'"  class="form-control monte" placeholder="example@correo.com" disabled required="required">
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
 <div class="widget">	      			
   <div class="widget-content colorwidget">				   
  <label for="cargo" class="tamletra">Cargo</label>				
<select type="text" id="cargo" name="cargo" value="'; echo $cargoD;echo'"  class="form-control monte" placeholder="Cargo" required="required" disabled autofocus="autofocus">
          <option value="Jefe de Grupo">Jefe de Grupo</option>
          <option value="Dirigente">Dirigente</option>                           
    </select> 
</div> <!-- /widget-content -->
 </div> <!-- /widget -->
</div> <!-- /span4 -->

<div class="span4 hespan">	      		
<div class="widget">	      			
  <div class="widget-content colorwidget">				   
 <label for="unidad" class="tamletra">Unidad</label>				
<select type="text" id="unidad" name="unidad" value="'; echo $grupoD;echo'" class="form-control monte" placeholder="Unidad" required="required" disabled autofocus="autofocus">
         <option value="1">Manada</option>
         <option value="2">Tropa</option>
         <option value="3">Caminante</option>
         <option value="4">Rover</option>                           
   </select> 
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span4 -->

<div class="span4 hespan">	      		
<div class="widget">	      			
  <div class="widget-content colorwidget">
<label for="uespecifica" class="tamletra">Unidad específica</label>
      <input type="text" id="uespecifica" class="form-control monte" value="'; echo $unidadD;echo'" placeholder="Unidad específica" disabled required="required" autofocus="autofocus">
      
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span4 -->


<div class="span4 hespan">	      		
<div class="widget">	      			
  <div class="widget-content colorwidget">
<label for="direccion" class="tamletra">Dirección</label>
<input type="text" id="direccion" value="'; echo $direccionD;echo'" class="form-control monte" placeholder="Riobamba-Ecuador" required="required" disabled autofocus="autofocus">   
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span4 -->


 <!-- <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget invisible">
     <label for="invisible" class="tamletra">Contraseña</label>
            <input type="password" id="invisible" class="form-control monte" placeholder="******" required="required" disabled autofocus="autofocus">
           
  </div>  
     </div>  
 </div>   /span4 -->

 <div class="span8 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
       <br>
      <button type="button" class="btn btn-primary btn-block colorbtn6" onclick="onlinecamposdirigente(this.value)">Modificar</button>
      &nbsp;&nbsp;
      <button type="button"  onclick="modificarDirigente()" class="btn btn-primary btn-block colorbtn">Guardar</button>
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span8 -->


</div> <!-- /container -->
</div> <!-- /widget-content -->
       
     </div> <!-- /widget -->
     
   </div> <!-- /span12 -->

 </div> <!-- /row -->';

?>
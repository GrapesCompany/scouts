<?php



session_start();
if(isset($_SESSION['userJefeGrupo'])){
  $jefegrupo=$_SESSION['userJefeGrupo'];
}else
{
  header("Location: ../index2.php");
}



$cedulaJG=$jefegrupo[0]['cedulaJG'];
$nombreJG=$jefegrupo[0]['nombreJG'];
$apellidoJG=$jefegrupo[0]['apellidoJG'];
$telefonoJG=$jefegrupo[0]['telefonoJG'];
$edadJG=$jefegrupo[0]['edadJG'];
$generoJG=$jefegrupo[0]['generoJG'];
$emailJG=$jefegrupo[0]['emailJG'];
$contrasenaJG=$jefegrupo[0]['contrasenaJG'];
$fechNacJG=$jefegrupo[0]['fechNacJG'];
$direccionJG=$jefegrupo[0]['direccionJG'];
$fechaeleccionJG=$jefegrupo[0]['fechaeleccionJG'];
$informacionJG=$jefegrupo[0]['informacionJG'];







 echo '		<div class="row">	      	
		  	  
 <div class="span10">
     
     <div class="widget paddi">
       
       <div class="widget-content padd">
       
         <h2 class="colores"> <i class="icon-user"></i> Mi perfil</h2>
         
          <hr>

<div class="container">	

<div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
     <label for="cedula" class="tamletra">Cédula</label>					 
     <input type="text" name="cedula" id="cedula" value="'; echo $cedulaJG;echo'"class="form-control monte" placeholder="1717171717" disabled required="required" autofocus="autofocus">
           </div> <!-- /widget-content -->
     </div> <!-- /widget -->
   </div> <!-- /span4 -->

   <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
     <label for="fech_eleccion" class="tamletra">Fecha de Elección</label>					 
     <input type="text" name="fech_eleccion" id="fech_eleccion" class="form-control monte" placeholder="01/01/2018" disabled required="required" autofocus="autofocus">
           </div> <!-- /widget-content -->
     </div> <!-- /widget -->
   </div> <!-- /span4 -->
 
<div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">			      		
     <label for="nombre" class="tamletra">Nombre</label>
  <input type="text" name="nombre" id="nombre"  onkeyup="this.value=soloLetras(this.value)" value="'; echo $nombreJG;echo'"class="form-control monte" placeholder="Example" disabled required="required">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
   </div> <!-- /span4 -->      		 	
   
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
     <label for="apellido" class="tamletra">Apellido</label>
              <input type="text" name="apellido" id="apellido" onkeyup="this.value=soloLetras(this.value)" value="'; echo $apellidoJG;echo'" class="form-control monte" placeholder="Example" disabled required="required">		      		
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="fech_nac" class="tamletra">Fecha de Nacimiento</label>
             <input type="date" id="fech_nac" name="fech_nac"  value="'; echo $fechNacJG;echo'"class="form-control monte" placeholder="Fecha de Nacimiento" disabled required="required">
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="telefono" class="tamletra">Teléfono</label>
            <input type="text" id="telefono" name="telefono"  onkeyup="this.value=soloNumeros(this.value)" maxlength="10" value="'; echo $telefonoJG;echo'" class="form-control monte" placeholder="Teléfono" disabled required="required" autofocus="autofocus">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
    <label for="edad" class="tamletra">Edad</label>
            <input type="text" id="edad" name="edad"  nkeyup="this.value=soloNumeros(this.value)" maxlength="2" value="'; echo $edadJG;echo'" class="form-control monte" placeholder="18" disabled required="required">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">				   
      <label for="genero" class="tamletra">Género</label>				
    <select type="text" id="genero" name="genero" value="'; echo $generoJG;echo'" class="form-control monte" placeholder="Género" disabled required="required" autofocus="autofocus">
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
             <input type="email" id="celectronico"  value="'; echo $emailJG;echo'" class="form-control monte" placeholder="example@correo.com" disabled required="required">
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="direccion" class="tamletra">Direccion</label>
             <input type="text" id="direccion" value="'; echo $direccionJG;echo'"  class="form-control monte" placeholder="Riobamba-Ecuador" disabled required="required">
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->

 <div class="span8 hespan">	      		
 <div class="widget">	      			
   <div class="widget-content colorwidget">
   <textarea type="text" id="info"   class="form-control monte3" placeholder="Información Adicional" disabled rows="3">';  echo $informacionJG; echo' </textarea>
   <label for="info"></label></div> <!-- /widget-content -->
  
 </div> <!-- /widget -->
</div> <!-- /span4 -->

 <!-- <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget invisible">
     <label for="invisible" class="tamletra">Contraseña</label>
            <input type="password" id="invisible"  class="form-control monte" placeholder="******" required="required" autofocus="autofocus">       
  </div>  
     </div>  
 </div>  -->



 <div class="span8 hespan">      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
       <br> 
      <button type="button" class="btn btn-primary btn-block colorbtn6" onclick="onlinecampos(this.value)">Modificar</button>
      &nbsp;&nbsp;
      <button type="button" class="btn btn-primary btn-block colorbtn"  onclick="modificarMiCuentaJefeGrupo()">Guardar</button>
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span8 -->


</div> <!-- /container -->
</div> <!-- /widget-content -->
       
     </div> <!-- /widget -->
     
   </div> <!-- /span12 -->

 </div> <!-- /row -->';

?>
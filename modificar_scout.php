<?php
session_start();
if(isset($_SESSION['userScout'])){
  $scout=$_SESSION['userScout'];
}else
{
  header("Location: ../index.php");
}



$cedulaS=$scout[0]['cedulaS'];
$nombreS=$scout[0]['nombreS'];
$apellidoS=$scout[0]['apellidoS'];
$telefonoS=$scout[0]['telefonoS'];
$fechaNacS=$scout[0]['fechaNacS'];
$edadS=$scout[0]['edadS'];
$grupoS=$scout[0]['grupoS'];
$sexoS=$scout[0]['sexoS'];
$estadoS=$scout[0]['estadoS'];
$contrasenaS=$scout[0]['contrasenaS'];
$correoS=$scout[0]['correoS'];
$unidadS=$scout[0]['unidadS'];
$direccionS=$scout[0]['direccionS'];
$cedularS=$scout[0]['cedularS'];
$nombrerS=$scout[0]['nombrerS'];
$direccionrS=$scout[0]['direccionrS'];
$telefonorS=$scout[0]['telefonorS'];








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
     <input type="text" name="cedula" id="cedula"  value="'; echo $cedulaS;echo'" class="form-control monte" placeholder="1717171717" disabled required="required" autofocus="autofocus">
           </div> <!-- /widget-content -->
     </div> <!-- /widget -->
   </div> <!-- /span4 -->
 
<div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">			      		
     <label for="nombre" class="tamletra">Nombre</label>
  <input type="text" name="nombre" id="nombre"   onkeyup="this.value=soloLetras(this.value)"  value="'; echo $nombrerS;echo'" class="form-control monte" placeholder="Example" disabled required="required">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
   </div> <!-- /span4 -->      		 	
   
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
     <label for="apellido" class="tamletra">Apellido</label>
              <input type="text" name="apellido" id="apellido" onkeyup="this.value=soloLetras(this.value)"  value="'; echo $apellidoS;echo'" class="form-control monte" disabled placeholder="Example" required="required">		      		
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="fech_nac" class="tamletra">Fecha de Nacimiento</label>
             <input type="date" id="fech_nac" name="fech_nac"  value="'; echo $fechaNacS;echo'" class="form-control monte" disabled placeholder="Fecha de Nacimiento" required="required">
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->

 <div class="span4 hespan">	      		
 <div class="widget">	      			
   <div class="widget-content colorwidget">
   <label for="genero" class="tamletra">Genero</label>				
   <select type="text" id="genero" name="genero" value="'; echo $sexoS;echo'" class="form-control monte" disabled placeholder="Genero" required="required" autofocus="autofocus">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>                                   
      </select> 
</div> <!-- /widget-content -->
 </div> <!-- /widget -->
</div> <!-- /span4 -->

 <div class="span4 hespan">	      		
 <div class="widget">	      			
   <div class="widget-content colorwidget">
<label for="edad" class="tamletra">Edad</label>
        <input type="text" id="edad" name="edad"  value="'; echo $edadS;echo'" class="form-control monte" disabled placeholder="18" required="required">
</div> <!-- /widget-content -->
 </div> <!-- /widget -->
</div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="telefono" class="tamletra">Teléfono</label>
            <input type="text" id="telefono"  nkeyup="this.value=soloNumeros(this.value)" maxlength="2"   onkeyup="this.value=soloNumeros(this.value)" name="telefono"  value="'; echo $telefonoS;echo'" class="form-control monte" disabled placeholder="Teléfono" required="required" autofocus="autofocus">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 

 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">				   
       <label for="direccion" class="tamletra">Dirección</label>
       <input type="text" id="direccion" name="direccion"  value="'; echo $direccionS;echo'" class="form-control monte" disabled placeholder="Dirección" required="required">
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="celectronico" class="tamletra">Correo electrónico</label>
             <input type="email" id="celectronico" value="'; echo $correoS;echo'" class="form-control monte" disabled placeholder="example@correo.com" required="required">
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 

<div class="span4 hespan">	      		
<div class="widget">	      			
  <div class="widget-content colorwidget">				   
 <label for="unidad" class="tamletra">Unidad</label>				
<select type="text" id="unidad" name="unidad"  value="'; echo $grupoS;echo'" class="form-control monte" placeholder="Unidad" disabled required="required" autofocus="autofocus">
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
      <input type="text" id="uespecifica"  value="'; echo $unidadS;echo'" class="form-control monte" placeholder="Unidad específica" disabled required="required" autofocus="autofocus">
      
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span4 -->

  
 

 <!-- <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget invisible">
     <label for="invisible" class="tamletra">Invisible</label>
            <input type="password" id="invisible" class="form-control monte" placeholder="invisible" disabled required="required" autofocus="autofocus"> 
         
            </div>   
     </div>  
 </div>  -->



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
          <label for="cedular" class="tamletra">Cédula</label>
                   <input type="text" id="cedular"  value="'; echo $cedularS;echo'"class="form-control monte2" placeholder="1717171717" disabled required="required" autofocus="autofocus">      
         </div> <!-- /widget-content -->
            </div> <!-- /widget -->
          </div> <!-- /span4 -->

          <div class="span4 hespan2">	      		
            <div class="widget">	      			
              <div class="widget-content colorwidget">
          <label for="nombrer" class="tamletra">Nombre</label>
                   <input type="text" id="nombrer"   onkeyup="this.value=soloLetras(this.value)"  value="'; echo $nombrerS;echo'" class="form-control monte2" placeholder="Example" disabled required="required" autofocus="autofocus">      
         </div> <!-- /widget-content -->
            </div> <!-- /widget -->
          </div> <!-- /span4 -->

          <div class="span4 hespan2">	      		
          <div class="widget">	      			
            <div class="widget-content colorwidget">
        <label for="direccionr" class="tamletra">Dirección</label>
                 <input type="text" id="direccionr"  value="'; echo $direccionrS;echo'"class="form-control monte2" placeholder="Riobamba" disabled required="required" autofocus="autofocus">      
       </div> <!-- /widget-content -->
          </div> <!-- /widget -->
        </div> <!-- /span4 -->

        <div class="span4 hespan2">	      		
        <div class="widget">	      			
          <div class="widget-content colorwidget">
      <label for="telefonor" class="tamletra">Telefóno</label>
               <input type="text" id="telefonor"  onkeyup="this.value=soloNumeros(this.value)" maxlength="10"  value="'; echo $telefonorS;echo'" class="form-control monte2" placeholder="0999988888" disabled required="required" autofocus="autofocus">      
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
   <button type="button" class="btn btn-primary btn-block colorbtn6" onclick="onlinecamposscout(this.value)">Modificar</button>
   &nbsp;&nbsp;
   <button type="button"  onclick="modificarMicuentaUsuarioScout(this.value)" class="btn btn-primary btn-block colorbtn">Guardar2</button>
</div> <!-- /widget-content -->
  </div> <!-- /widget -->
</div> <!-- /span8 -->

</div> <!-- /container -->
</div> <!-- /widget-content -->
       
     </div> <!-- /widget -->
     
   </div> <!-- /span12 -->

 </div> <!-- /row -->';

?>
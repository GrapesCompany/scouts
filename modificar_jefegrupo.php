<?php
 $pep ='		<div class="row">	      	
		  	  
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
     <input type="text" name="cedula" id="cedula" class="form-control monte" placeholder="1717171717" disabled required="required" autofocus="autofocus">
           </div> <!-- /widget-content -->
     </div> <!-- /widget -->
   </div> <!-- /span4 -->
 
<div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">			      		
     <label for="nombre" class="tamletra">Nombre</label>
  <input type="text" name="nombre" id="nombre" class="form-control monte" placeholder="Example" disabled required="required">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
   </div> <!-- /span4 -->      		 	
   
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
     <label for="apellido" class="tamletra">Apellido</label>
              <input type="text" name="apellido" id="apellido" class="form-control monte" placeholder="Example" disabled required="required">		      		
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="fech_nac" class="tamletra">Fecha de Nacimiento</label>
             <input type="date" id="fech_nac" name="fech_nac"  class="form-control monte" placeholder="Fecha de Nacimiento" disabled required="required">
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="telefono" class="tamletra">Teléfono</label>
            <input type="text" id="telefono" name="telefono" class="form-control monte" placeholder="Teléfono" disabled required="required" autofocus="autofocus">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
    <label for="edad" class="tamletra">Edad</label>
            <input type="text" id="edad" name="edad" class="form-control monte" placeholder="18" disabled required="required">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">				   
      <label for="genero" class="tamletra">Género</label>				
    <select type="text" id="genero" name="genero" class="form-control monte" placeholder="Género" disabled required="required" autofocus="autofocus">
              <option value="1" class="monte">Masculino</option>
              <option value="2">Femenino</option>                           
        </select>
 
 
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="celectronico" class="tamletra">Correo electrónico</label>
             <input type="email" id="celectronico" class="form-control monte" placeholder="example@correo.com" disabled required="required">
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 


 <!-- <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget invisible">
     <label for="invisible" class="tamletra">Contraseña</label>
            <input type="password" id="invisible" class="form-control monte" placeholder="******" required="required" autofocus="autofocus">       
  </div>  
     </div>  
 </div>  -->

 <div class="span8 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
       <br>
      <button type="button" class="btn btn-primary btn-block colorbtn4" onclick="onlinecampos(this.value)">Modificar</button>
      &nbsp;&nbsp;
      <button type="button" class="btn btn-primary btn-block colorbtn">Guardar</button>
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->


</div> <!-- /container -->
</div> <!-- /widget-content -->
       
     </div> <!-- /widget -->
     
   </div> <!-- /span12 -->

 </div> <!-- /row -->';
echo $pep;
?>
<?php
 $pep ='		<div class="row">	      	
		  	  
 <div class="span10">
     
     <div class="widget paddi">
       
       <div class="widget-content padd">
       
         <h2 class="colores"> <i class="icon-user"></i> Detalle Datos Dirigente Admin</h2>
         
          <hr>

<div class="container">	

<div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
     <label for="cedula" class="tamletra2">Cédula</label>					 
     <input type="text" name="cedula" id="cedula" onkeyup="this.value=soloNumeros(this.value)" minlength="10" disabled class="form-control monte10" placeholder="1717171717" required="required" autofocus="autofocus">
           </div> <!-- /widget-content -->
     </div> <!-- /widget -->
   </div> <!-- /span4 -->
 
<div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">			      		
     <label for="nombre" class="tamletra2">Nombre</label>
  <input type="text" name="nombre" id="nombre"  onkeyup="this.value=soloLetras(this.value)" disabled class="form-control monte10" placeholder="Example" required="required">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
   </div> <!-- /span4 -->      		 	
   
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
     <label for="apellido" class="tamletra2">Apellido</label>
              <input type="text" name="apellido" id="apellido"  onkeyup="this.value=soloLetras(this.value)" disabled class="form-control monte10" placeholder="Example" required="required">		      		
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="fech_nac" class="tamletra2">Fecha de Nacimiento</label>
             <input type="text" id="fech_nac" name="fech_nac"  class="form-control monte10" disabled placeholder="Fecha de Nacimiento" required="required">
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="telefono" class="tamletra2">Teléfono</label>
            <input type="text" id="telefono" name="telefono" onkeyup="this.value=soloNumeros(this.value)" disabled maxlength="10" class="form-control monte10" placeholder="Teléfono" required="required" autofocus="autofocus">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
    <label for="edad" class="tamletra2">Edad</label>
            <input type="text" id="edad" name="edad" onkeyup="this.value=soloNumeros(this.value)" disabled maxlength="2" class="form-control monte10" placeholder="18" required="required">
 </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">				   
      <label for="genero" class="tamletra2">Género</label>				
      <input type="text" id="genero" name="genero" onkeyup="this.value=soloNumeros(this.value)" disabled maxlength="2" class="form-control monte10" placeholder="Masculino" required="required">

   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 
 <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">
   <label for="celectronico" class="tamletra2">Correo electrónico</label>
             <input type="text" id="celectronico" class="form-control monte10" disabled placeholder="example@correo.com" required="required">
   </div> <!-- /widget-content -->
     </div> <!-- /widget -->
 </div> <!-- /span4 -->
 



<div class="span4 hespan">	      		
<div class="widget">	      			
  <div class="widget-content colorwidget">
<label for="direccion" class="tamletra2">Dirección</label>
<input type="text" id="direccion" class="form-control monte10" placeholder="Riobamba-Ecuador" disabled required="required" autofocus="autofocus">   
</div> <!-- /widget-content -->
</div> <!-- /widget -->
</div> <!-- /span4 -->


 


 <div class="container">	    	  
 <div class="span10"> 
    <div class="widget medida2">
      <div class="widget-content medida">
        <h3 class="colores"> <i class="icon-list"></i> Información Adicional</h3>
         <hr>
           <div class="container medida">	

           <div class="span4 hespan2">	      		
           <div class="widget">	      			
             <div class="widget-content colorwidget">
         <label for="unidad" class="tamletra2">Unidad</label>
                  <input type="text" id="unidad"  disabled minlength="10" maxlength="10" class="form-control monte11"  required="required" autofocus="autofocus">      
        </div> <!-- /widget-content -->
           </div> <!-- /widget -->
         </div> <!-- /span4 -->

         <div class="span4 hespan2">	      		
           <div class="widget">	      			
             <div class="widget-content colorwidget">
         <label for="cargo" class="tamletra2">Cargo</label>
         <input type="text" id="cargo"  disabled minlength="10" maxlength="10" class="form-control monte11"  required="required" autofocus="autofocus">      
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
       <button type="button" class="btn btn-warning colorbtnlist"  onclick="showBuscarTotalMiembros()">Regresar</button>
      
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
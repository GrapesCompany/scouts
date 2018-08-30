<?php
 $pep ='<div class="row">	      	
		  	  
 <div class="span10">     
     <div class="widget paddi">       
       <div class="widget-content padd">       
         <h2 class="colores"> <i class="icon-list"></i> Listar Dirigentes</h2>         
          <hr>

<div class="container">	  

<div class="span1 hespan">	      		
<div class="widget">	      			
  <div class="widget-content paddibutton">
  <p></p>
</div>  
</div>  
</div> <!-- /span4 -->

<div class="span4 hespan">	      		
<div class="widget">	      			
  <div class="widget-content colorwidget">				   
 <label for="unidad" class="tamletra">Unidad</label> 
    <select type="text" id="unidad" name="unidad" class="form-control monte" placeholder="Unidad" required="required" autofocus="autofocus">
    
         <option value="1">Manada</option>
         <option value="2">Tropa</option>  
         <option value="3">Caminante</option>
         <option value="4">Rover</option>
    </select> 
    </div> <!-- /widget-content -->
  </div> <!-- /widget -->
</div> <!-- /span4 -->

 
 
   <!-- <div class="span4 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content colorwidget">			      		
     <label for="nombre" class="tamletra">Nombre</label>
  <input type="text" name="nombre" id="nombre" class="form-control monte" placeholder="Example" disabled required="required">
 </div>  
     </div>  
   </div>  /span4 -->      		 	
   
 
 <div class="span1 hespan">	      		
     <div class="widget">	      			
       <div class="widget-content paddibutton">
       <br><!-- /span4 
      <button type="button" class="btn btn-primary btn-block colorbtn6" onclick="onlinecampos(this.value)">Modificar</button>
      &nbsp;&nbsp;-->
      
      <button type="button" class="btn btn-primary btn-block coloricono" onclick="showListadoDirigentes(this.value)"><i class="icon-search icon-2x"></i></button>
 </div>  
     </div>  
 </div> <!-- /span4 -->


</div> <!-- /container -->
</div> <!-- /widget-content -->
       
     </div> <!-- /widget -->
     
   </div> <!-- /span12 -->

 </div> <!-- /row -->';
echo $pep;
?>
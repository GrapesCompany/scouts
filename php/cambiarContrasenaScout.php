<?php
include '../conexion.php';


session_start();
if(isset($_SESSION['userScout'])){
 $scout=$_SESSION['userScout'];
}else
{
  header("Location: index2.php?denegado=peligro");
}





$catual=$_POST['cactual'];
$cnueva=$_POST['cnueva'];
$rcnueva=$_POST['rcnueva'];

$cedulaScout=$scout[0]['cedulaS'];
$conrasenaScout=$scout[0]['contrasenaS'];


if($conrasenaScout!=$catual)
{
    echo "La contraseña actual no es correcta";
}else
{
        $conexion=conectar();


         
         mysqli_query( $conexion, "UPDATE  `usuario` SET `CONTRASENA`='$rcnueva' where `CEDULA`='$cedulaScout'" ) or die("Problemas en el select.  ".mysqli_error($conexion));
        
         unset($_SESSION['userScout']);
       
            echo "La contraseña se actualizo correctamente";
       
         cerrar($conexion);
         
         
 
}

?>
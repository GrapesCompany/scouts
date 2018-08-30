<?php
include '../conexion.php';
session_start();
if(isset($_SESSION['userDirigente'])){
 $dirigente=$_SESSION['userDirigente'];
}else
{
  header("Location: index2.php?denegado=peligro");
}





$catual=$_POST['cactual'];
$cnueva=$_POST['cnueva'];
$rcnueva=$_POST['rcnueva'];

$cedulaDirigente=$dirigente[0]['cedulaD'];
$conrasenaDirigente=$dirigente[0]['contrasenaD'];


if($conrasenaDirigente!=$catual)
{
    echo "La contraseña actual no es correcta";
}else
{
        $conexion=conectar();


         
         mysqli_query( $conexion, "UPDATE  `trabajador` SET `CONTRASENA_TRA`='$rcnueva' where `CEDULA_TRA`='$cedulaDirigente'" ) or die("Problemas en el select.  ".mysqli_error($conexion));
        
         unset($_SESSION['userDirigente']);
       
            echo "La contraseña se actualizo correctamente";
       
         cerrar($conexion);
         
         
 
}

?>
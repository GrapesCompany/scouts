
<?php
include '../conexion.php';
session_start();
if(isset($_SESSION['userJefeGrupo'])){
 $jefegrupo=$_SESSION['userJefeGrupo'];
}else
{
  header("Location: index2.php?denegado=peligro");
}




$catual=$_POST['cactual'];
$cnueva=$_POST['cnueva'];
$rcnueva=$_POST['rcnueva'];

$cedulaJefeGrupo=$jefegrupo[0]['cedulaJG'];
$conrasenaJefeGrupo=$jefegrupo[0]['contrasenaJG'];


if($conrasenaJefeGrupo!=$catual)
{
    echo "La contraseña actual no es correcta";
}else
{
        $conexion=conectar();


         
         mysqli_query( $conexion, "UPDATE  `trabajador` SET `CONTRASENA_TRA`='$rcnueva' where `CEDULA_TRA`='$cedulaJefeGrupo'" ) or die("Problemas en el select.  ".mysqli_error($conexion));
        
         unset($_SESSION['userJefeGrupo']);
       
            echo "La contraseña se actualizo correctamente";
       
         cerrar($conexion);
         
         
 
}

?>
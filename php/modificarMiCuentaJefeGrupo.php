
<?php
include '../conexion.php';
session_start();
if(isset($_SESSION['userJefeGrupo'])){
 $jefegrupo=$_SESSION['userJefeGrupo'];
}else
{
  header("Location: index2.php?denegado=peligro");
}


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$genero=$_POST['genero'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$fech_nac=$_POST['fech_nac'];
$correo=$_POST['correo'];


$_SESSION['userJefeGrupo'][0]['nombreJG']=$nombre;
$_SESSION['userJefeGrupo'][0]['apellidoJG']=$apellido;
$_SESSION['userJefeGrupo'][0]['direccionJG']=$direccion;
$_SESSION['userJefeGrupo'][0]['generoJG']=$genero;
$_SESSION['userJefeGrupo'][0]['edad']=$edad;

$_SESSION['userJefeGrupo'][0]['telefonoJG']=$telefono;
$_SESSION['userJefeGrupo'][0]['fechaNacJG']=$fech_nac;
$_SESSION['userJefeGrupo'][0]['correoJG']=$correo;

$cedulaJefeGrupo=$jefegrupo[0]['cedulaJG'];

$conexion=conectar();
    mysqli_query( $conexion, "UPDATE  `trabajador` SET `NOMBRE_TRA`='$nombre',`APELLIDO_TRA`='$apellido', `TELEFONO`='$telefono',`EDAD_TRA`='$edad',`GENERO_TRA`='$genero',
    `FECH_NAC_TRA`='$fech_nac',`EMAIL_TRA`='$correo',`DIRECCION`='$direccion' where `CEDULA_TRA`='$cedulaJefeGrupo'" ) or die("Problemas en el select.  ".mysqli_error($conexion));
     
     echo "Se ha modificado correctamente al Usuario.  ";
    cerrar($conexion);
    
   
  

?>

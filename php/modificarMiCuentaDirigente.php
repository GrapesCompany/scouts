<?php

include '../conexion.php';
session_start();
if(isset($_SESSION['userDirigente'])){
  $dirigente=$_SESSION['userDirigente'];
}else
{
  header("Location: ../index2.php");
}

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$genero=$_POST['genero'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$fech_nac=$_POST['fech_nac'];
$correo=$_POST['correo'];
$uespecifica=$_POST['uespecifica'];


$_SESSION['userDirigente'][0]['nombreD']=$nombre;
$_SESSION['userDirigente'][0]['apellidoD']=$apellido;
$_SESSION['userDirigente'][0]['direccionD']=$direccion;
$_SESSION['userDirigente'][0]['generoD']=$genero;
$_SESSION['userDirigente'][0]['edadD']=$edad;

$_SESSION['userDirigente'][0]['telefonoD']=$telefono;
$_SESSION['userDirigente'][0]['fechaNacD']=$fech_nac;
$_SESSION['userDirigente'][0]['emailD']=$correo;
$_SESSION['userDirigente'][0]['unidadD']=$uespecifica;

$cedulaDirigente=$dirigente[0]['cedulaD'];


$conexion=conectar();
    mysqli_query( $conexion, "UPDATE  `trabajador` SET `NOMBRE_TRA`='$nombre',`APELLIDO_TRA`='$apellido', `TELEFONO`='$telefono',`EDAD_TRA`='$edad',`GENERO_TRA`='$genero',
    `FECH_NAC_TRA`='$fech_nac',`EMAIL_TRA`='$correo',`DIRECCION`='$direccion' where `CEDULA_TRA`='$cedulaDirigente'" ) or die("Problemas en el select.  ".mysqli_error($conexion));
     
     mysqli_query( $conexion, "UPDATE  `dirigente` SET `UNIDAD`='$uespecifica' where `CEDULA_TRA`='$cedulaDirigente'" ) or die("Problemas en el select.  ".mysqli_error($conexion));

     echo "Se ha modificado correctamente al Usuario.  ";
    cerrar($conexion);


?>
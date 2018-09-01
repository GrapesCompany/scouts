<?php

$cedula=$_POST['cedula'];
$cargo=$_POST['cargo'];

echo $cedula;

include '../conexion.php';
$conexion=conectar();
$sql = "UPDATE  dirigente SET dirigente.CARGO='$cargo' WHERE dirigente.CEDULA_TRA= '$cedula'" ;

$result = mysqli_query($conexion,$sql) or die("Problemas al cambiar de Unidad.  ");

cerrar($conexion);

?>
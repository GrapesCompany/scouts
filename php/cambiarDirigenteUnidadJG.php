<?php

$cedula=$_POST['cedula'];
$unidad=$_POST['unidad'];

echo $cedula;

include '../conexion.php';
$conexion=conectar();
$sql = "UPDATE  dirigente SET dirigente.ID_GRUPO_SCOUT='$unidad' WHERE dirigente.CEDULA_TRA= '$cedula'" ;

$result = mysqli_query($conexion,$sql) or die("Problemas al cambiar de Unidad.  ");
echo "La Unidad se ha actualizado correctamente";
cerrar($conexion);

?>
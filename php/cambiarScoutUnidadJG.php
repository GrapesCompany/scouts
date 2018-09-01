<?php

$cedula=$_POST['cedula'];
$unidad=$_POST['unidad'];



include '../conexion.php';
$conexion=conectar();
$sql = "UPDATE  usuario SET usuario.ID_GRUPO_SCOUT='$unidad' WHERE usuario.CEDULA= '$cedula'" ;

$result = mysqli_query($conexion,$sql) or die("Problemas al cambiar de Unidad.  ");
echo "El cambio de unidad se ha realizado correctamente";
cerrar($conexion);

?>
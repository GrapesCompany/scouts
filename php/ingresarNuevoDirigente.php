<?php 


include '../conexion.php';

$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$genero=$_POST['genero'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$fech_nac=$_POST['fech_nac'];
$correo=$_POST['correo'];
$inputPassword=$_POST['inputPassword'];
$unidad=$_POST['unidad'];
$cargo=$_POST['cargo'];

$conexion=conectar();

$conexion=conectar();
$sql = "SELECT `CEDULA_TRA` FROM `dirigente` WHERE `CEDULA_TRA`='$cedula'" ;

$result = mysqli_query($conexion,$sql) or die("Problemas al Reservar cita verifique que sea un usuario del sistema.  ");
 
if(mysqli_fetch_array($result))
{
echo "El Auxiliar que desea registrar ya existe en la base de datos.  ";
}else{
 
 mysqli_query( $conexion, "INSERT INTO `trabajador` (
   `CEDULA_TRA`, 
   `NOMBRE_TRA`, 
   `APELLIDO_TRA`, 
   `DIRECCION`, 
   `TELEFONO`, 
   `FECH_NAC_TRA`, 
   `CONTRASENA_TRA`, 
   `ESTADO_TRA`,
   GENERO_TRA,
   EDAD_TRA, 
   `EMAIL_TRA`) values
   ('$cedula' , '$nombre' , '$apellido' , '$direccion', '$telefono','$fech_nac','$inputPassword','0','$genero'.'$edad','$correo')" ) or die("Problemas en el select.  ".mysqli_error($conexion));



mysqli_query( $conexion, "INSERT INTO `jefe_grupo` (
    `CEDULA_TRA`, 
    `ID_GRUPO_SCOUT`, 
    `UNIDAD`, 
    `CARGO` ) values
    ('$cedula' ,'$unidad', 'unidad espesifica' , '$cargo' )" ) or die("Problemas en el select.  ".mysqli_error($conexion));


 cerrar($conexion);
 echo "El jefe de grupo se ha registrado correctamente.  ";
}


?>
<?php  

include '../conexion.php';

$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$genero=$_POST['genero'];

$genero=$_POST['genero'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$fech_nac=$_POST['fech_nac'];
$correo=$_POST['correo'];
$inputPassword=$_POST['inputPassword'];
$unidad=$_POST['unidad'];
$unidadEspesifica=$_POST['uespecifica'];

$cedular=$_POST['cedular'];
$nombrer=$_POST['nombrer'];
$direccionr=$_POST['direccionr'];
$telefonor=$_POST['telefonor'];

$conexion=conectar();
$sql = "SELECT `CEDULA` FROM `usuario` WHERE `CEDULA`='$cedula'" ;

$result = mysqli_query($conexion,$sql) or die("Problemas al Reservar cita verifique que sea un usuario del sistema.  ");
 
if(mysqli_fetch_array($result))
{
echo "El Scout que desea registrar ya existe en la base de datos.  ";
}else{
 
 mysqli_query( $conexion, "INSERT INTO `usuario` ( 
`CEDULA`,
`ID_GRUPO_SCOUT`, 
`NOMBRE`, 
`APELLIDO`,
`SEXO_SCO`,
`FECHA_NAC`, 
`DIRECCION`, 
`TELEFONO`, 
`EDAD`, 
`EMAIL`, 
`UNIDAD`, 
`CED_REPRE`, 
`NOMBRE_REPRE`, 
`DIRECCION_REPRE`, 
`TELEFONO_REPRE`, 
`ESTADO`,
`CONTRASENA`) values
   ('$cedula' ,'$unidad' , '$nombre' , '$apellido' ,'$genero','$fech_nac', '$direccion', '$telefono','$edad',
   '$correo','$unidadEspesifica','$cedular','$nombrer','$direccionr','$telefonor','0','$inputPassword')" ) or die("Problemas en el select.  ".mysqli_error($conexion));

echo "El Scout se ha registrado correctamente.  ";
cerrar($conexion);
 }
?>
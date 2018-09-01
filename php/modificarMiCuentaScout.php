<?php  

include '../conexion.php';
session_start();
if(isset($_SESSION['userScout'])){
 $scout=$_SESSION['userScout'];
}else
{
  header("Location: index2.php?denegado=peligro");
}




$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$genero=$_POST['genero'];

$genero=$_POST['genero'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$fech_nac=$_POST['fech_nac'];
$correo=$_POST['correo'];

$unidadEspesifica=$_POST['uespecifica'];

$cedular=$_POST['cedular'];
$nombrer=$_POST['nombrer'];
$direccionr=$_POST['direccionr'];
$telefonor=$_POST['telefonor'];

$_SESSION['userScout'][0]['nombreS']=$nombre;
$_SESSION['userScout'][0]['apellidoS']=$apellido;
$_SESSION['userScout'][0]['direccionS']=$direccion;
$_SESSION['userScout'][0]['sexoS']=$genero;
$_SESSION['userScout'][0]['edadS']=$edad;
$_SESSION['userScout'][0]['telefonoS']=$telefono;
$_SESSION['userScout'][0]['fechaNacS']=$fech_nac;
$_SESSION['userScout'][0]['correoS']=$correo;
$_SESSION['userScout'][0]['unidadS']=$unidadEspesifica;
$_SESSION['userScout'][0]['cedularS']=$cedular;
$_SESSION['userScout'][0]['nombrerS']=$nombrer;
$_SESSION['userScout'][0]['direccionS']=$direccionr;
$_SESSION['userScout'][0]['telefonorS']=$telefonor;


$cedulaScout = $scout[0]['cedulaS'];



$conexion=conectar();
    mysqli_query( $conexion, "UPDATE  `usuario` SET 
  
   
    `NOMBRE`='$nombre',
    `APELLIDO`='$apellido',
    `SEXO_SCO`='$genero', 
    `FECHA_NAC`='$fech_nac',
    `DIRECCION`='$direccion',
    `TELEFONO`='$telefono',
    `EDAD`='$edad',
    `EMAIL`='$correo',
    `UNIDAD`='$unidadEspesifica',
    `CED_REPRE`='$cedular',
    `NOMBRE_REPRE`='$nombrer',
    `DIRECCION_REPRE`='$direccionr',
    `TELEFONO_REPRE`='$telefonor'
    
    
     where `CEDULA`='$cedulaScout'" ) or die("Problemas en el select.  ".mysqli_error($conexion));
     
     echo "Se ha modificado correctamente al Usuario.  ";
    cerrar($conexion);
    
   











?>
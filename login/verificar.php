<?php
session_start();
include '../conexion.php';

$conexion = conectar();
$username = $_POST['username'];
$password = $_POST['password'];
$tipoP = $_GET['tipoP'];
$cargo = $_POST['optradio'];

if ($tipoP == 'paciente' && $username != "" && $username != null && $password != "" && $password != null) {
    $existenciausuario = mysqli_query($conexion, "SELECT * FROM paciente WHERE paciente.`CEDULA_PAC`='$username' AND  paciente.`CONTRASENA_PAC`='$password' AND  paciente.`ESTADO_PAC`='0'") or die("Problemas en el select" . mysqli_error($conexion));

    while ($f = mysqli_fetch_array($existenciausuario)) {
        $arreglo_paciente[] = array('cedulaP' => $f['CEDULA_PAC'],
            'nombreP' => $f['NOMBRE_PAC'],
            'apellidoP' => $f['APELLIDO_PAC'],
            'telefonoP' => $f['TELEFONO_PAC'],
            'fechaNacP' => $f['FECHA_NAC_PAC'],
            'edadP' => $f['EDAD_PAC'],
            'provinciaP' => $f['PROVINCIA_PAC'],
            'cantonP' => $f['CANTON_PAC'],
            'profesionP' => $f['PROFESION'],
            'estadoCivilP' => $f['ESTADOCIVIL'],
            'sexoP' => $f['SEXO'],
            'estadoP' => $f['ESTADO_PAC'],
            'contrasenaP' => $f['CONTRASENA_PAC'],
            'correoP'=> $f['CORREO_PAC'],
            'direccionP'=> $f['DIRECCION_PAC']
            
        );
    }
    if ($arreglo_paciente != null) {
        $_SESSION['userPaciente']=$arreglo_paciente;
        echo "eres paciente";
        header('Location: ../../adminpaciente.php');
    } else {
        header('Location: ../../index.php?error=fail');
    }
} else {
    if ($tipoP == 'administrador' && $cargo == 'jefegrupo' && $username != "" && $username != null && $password != "" && $password != null) {
        $existenciausuario = mysqli_query($conexion, " SELECT * FROM trabajador JOIN jefe_grupo ON trabajador.`CEDULA_TRA`=jefe_grupo.`CEDULA_TRA` WHERE trabajador.`CEDULA_TRA`='$username'  AND  trabajador.`CONTRASENA_TRA`='$password' AND trabajador.`ESTADO_TRA`='0'") or die("Problemas en el select" . mysqli_error($conexion));
       
        while ($f = mysqli_fetch_array($existenciausuario)) {
            $arreglo_jefegrupo[] = array('cedulaJG' => $f['CEDULA_TRA'],
             'nombreJG' => $f['NOMBRE_TRA'],
                'apellidoJG' => $f['APELLIDO_TRA'],
                'telefonoJG' => $f['TELEFONO'],
                'edadJG' => $f['EDAD_TRA'],
                'generoJG' => $f['GENERO_TRA'],
                'emailJG' => $f['EMAIL_TRA'],
                'contrasenaJG' => $f['CONTRASENA_TRA'],
                'estadoJG' => $f['ESTADO_TRA'],
                'fechNacJG' => $f['FECH_NAC_TRA'],
                'direccionJG' => $f['DIRECCION'],
            'fechaeleccionJG' => $f['FECHA_ELECCION'],
            'informacionJG' => $f['INFORMACION']);
        }

        if ($arreglo_jefegrupo != null) {
            $_SESSION['userJefeGrupo']=$arreglo_jefegrupo;
            echo "eres jefegrupo";
            header('Location: ../../admin.php');
        } else {
            header('Location: ../../index2.php?error=fail');
        }

    } else {
        if ($tipoP == 'administrador' && $cargo == 'dirigente' && $username != "" && $username != null && $password != "" && $password != null) {
            $existenciausuario = mysqli_query($conexion, "SELECT * FROM trabajador JOIN dirigente ON trabajador.`CEDULA_TRA`=dirigente.`CEDULA_TRA` WHERE trabajador.`CEDULA_TRA`='$username' AND trabajador.`CONTRASENA_TRA`='$password' AND  trabajador.`ESTADO_TRA`='0'") or die("Problemas en el select" . mysqli_error($conexion));

            while ($f = mysqli_fetch_array($existenciausuario)) {
                $arreglo_dirigente[] = array('cedulaD' => $f['CEDULA_TRA'],
                'nombreD' => $f['NOMBRE_TRA'],
                   'apellidoD' => $f['APELLIDO_TRA'],
                   'telefonoD' => $f['TELEFONO'],
                   'edadD' => $f['EDAD_TRA'],
                   'generoD' => $f['GENERO_TRA'],
                   'emailD' => $f['EMAIL_TRA'],
                   'contrasenaD' => $f['CONTRASENA_TRA'],
                   'estadoD' => $f['ESTADO_TRA'],
                   'fechNacD' => $f['FECH_NAC_TRA'],
                   'direccionD' => $f['DIRECCION'],
                   'grupoD' => $f['ID_GRUPO_SCOUT'],
                   'unidadD' => $f['UNIDAD'],
                   'cargoD' => $f['CARGO']);
            }

            if ($arreglo_dirigente != null) {
                $_SESSION['userDirigente']=$arreglo_dirigente;
                echo "eres Dirigente";
                header('Location: ../../admindirigente.php');
            } else {
                header('Location: ../../index2.php?error=fail');
            }

        } else {
            if($tipoP == 'administrador' && $cargo == 'administrador' && $username != "" && $username != null && $password != "" && $password != null){
                $existenciausuario = mysqli_query($conexion, "SELECT * FROM admin WHERE admin.`USUARIO`='$username' AND  admin.`CONTRASENA`='$password'") or die("Problemas en el select" . mysqli_error($conexion));

                while ($f = mysqli_fetch_array($existenciausuario)) {
                    $arreglo_administrador[] = array('usuarioA' => $f['USUARIO'],
                        'contrasenaA' => $f['CONTRASENA']);
                }
    
                if ($arreglo_administrador != null) {
                    $_SESSION['userAdministrador']=$arreglo_administrador;
                    echo "eres administrador";
                    header('Location: ../../admin.php');
                } else {
                    header('Location: ../../index2.php?error=fail');
                }
            }else{
                if ($tipoP == 'administrador') {
                    header('Location: ../../index2.php?error=fail');
                } else {
                    header('Location: ../../index.php?error=fail');
                }
            }

        }
    }
}

cerrar($conexion);

?>
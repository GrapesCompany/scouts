<?php
session_start();
include '../conexion.php';

$conexion = conectar();
$username = $_POST['username'];
$password = $_POST['password'];
$tipoP = $_GET['tipoP'];
$cargo = $_POST['optradio'];

if ($tipoP == 'scout' && $username != "" && $username != null && $password != "" && $password != null) {
    $existenciausuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario.`CEDULA`='$username' AND  usuario.`CONTRASENA`='$password' AND  usuario.`ESTADO`='0'") or die("Problemas en el select" . mysqli_error($conexion));

    while ($f = mysqli_fetch_array($existenciausuario)) {
        $arreglo_scout[] = array('cedulaS' => $f['CEDULA'],
            'nombreS' => $f['NOMBRE'],
            'idGrupoS' => $f['ID_GRUPO_SCOUT'],
            'apellidoS' => $f['APELLIDO'],
            'telefonoS' => $f['TELEFONO'],
            'fechaNacS' => $f['FECHA_NAC'],
            'edadS' => $f['EDAD'],
            'grupoS' => $f['ID_GRUPO_SCOUT'],
            'sexoS' => $f['SEXO_SCO'],
             'estadoS' => $f['ESTADO'],
            'contrasenaS' => $f['CONTRASENA'],
            'correoS'=> $f['EMAIL'],
            'unidadS'=> $f['UNIDAD'],   
            'direccionS'=> $f['DIRECCION'],
            'cedularS' => $f['CED_REPRE'],
            'nombrerS' => $f['NOMBRE_REPRE'],
            'direccionrS' => $f['DIRECCION_REPRE'],
            'telefonorS' => $f['TELEFONO_REPRE']
            
        );
    }
    if ($arreglo_scout != null) {
        $_SESSION['userScout']=$arreglo_scout;
        echo "eres scout";
        header('Location: ../../adminscout.php');
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
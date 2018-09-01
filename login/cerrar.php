<?php

session_start();

$tipo = $_GET['tipo'];

switch ($tipo) {
    case 'jefedegrupo':unset($_SESSION['userJefeGrupo']);
        header("Location: ../../index2.php?salir=exito");
        break;
    case 'dirigente':unset($_SESSION['userDirigente']);
        header("Location: ../../index2.php?salir=exito");
        break;
    case 'scout':unset($_SESSION['userScout']);
        header("Location: ../../index.php?salir=exito");
        break;
    default:unset($_SESSION['userJefeGrupo']);
            unset($_SESSION['userDirigente']);
            unset($_SESSION['userScout']);
            header("Location: ../../index.php?salir=exito");
}

?>

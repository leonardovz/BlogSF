<?php
session_start();
// require_once "config.php";
require_once '../config/config.php';
require_once '../config/conexion.php';
require_once '../config/functions.php';
require_once 'funciones.php';
require_once '../config/rutas.php';
$conexion = conexion($bd_config);
$ruta=ruta();




switch ($_POST['opcion']) {
    case 'PublicacionesRecientes':
    $post = searchPost($conexion);
    if (sizeof($post)>0) {
        echo json_encode($post);
    }else{ 
        echo json_encode(array('respuesta' => 'error' ) );
    }
    break;
    case 'ServiciosInicio':
    $post = searchUserService($conexion);
    if (sizeof($post)>0) {
        echo json_encode($post);
    }else{ 
        echo json_encode(array('respuesta' => 'error' ) );
    }
    break;
    
    default:
        # code...
        break;
}





?>
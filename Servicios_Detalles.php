<?php 
require_once 'config/config.php';
require_once 'Admin/functions.php';

$conexion = conexion($bd_config);
if(true){
    require 'views/serv_Detalles.view.php';
}else{
    // header('Location: Servicios.php');
}

?>
<?php 
require_once 'config/config.php';
require_once 'Admin/functions.php';

$conexion = conexion($bd_config);
require_once 'views/perfil.view.php';
?>
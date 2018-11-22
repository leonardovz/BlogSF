<?php 
require_once 'config/config.php';
require_once 'Admin/functions.php';

$conexion = conexion($bd_config);
$servicios = searchService($conexion);
require 'views/servicios.view.php';

?>
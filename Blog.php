<?php 
require_once 'config/config.php';
require_once 'Admin/functions.php';

$conexion = conexion($bd_config);
require 'views/blog.view.php';

?>
<?php
    require_once 'config.php';

    $conexion = new mysqli($bd_config['host'],$bd_config['usuario'],$bd_config['pass'],$bd_config['database']);
    $conexion->set_charset("utf8");
?>
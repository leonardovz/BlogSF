<?php 
require_once 'config/config.php';
require_once 'Admin/functions.php';

$conexion = conexion($bd_config);
if($_GET['idPub']!=''){
    require 'views/blog_Detalles.view.php';
}else{
    header('Location: blog.php');
}

?>
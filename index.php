<?php 
require_once 'config/config.php';
require_once 'Admin/functions.php';
// $conexion = conexion($bd_config);
if(!isset($conexion)){
    echo "error al conectar a la base de datos" .json_encode($bd_config);
    exit;
}
if(!$_GET){
    require_once 'views/index.view.php';
}
else if($_GET['ruta'] == "blog"){
    require_once 'views/blog.view.php';
}elseif ($_GET['ruta'] == "Login" || $_GET['ruta'] == "login") {
    require_once 'Login.php';
}else{
    require_once 'views/index.view.php';
}
?>
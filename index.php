<?php 
session_start();
require_once 'config/config.php';
require_once 'Admin/functions.php';
$conexion = conexion($bd_config);

if(!isset($conexion)){
    echo "error al conectar a la base de datos" .json_encode($bd_config);
    exit;
}

if(isset($_GET['ruta'])){
    $rutas = explode("/",$_GET['ruta']);
    //  var_dump($rutas);
    if($rutas[0] == "inicio"){
        require_once 'views/index.view.php';
    }
    else if($rutas[0] == "blog"){
        require_once 'views/blog.view.php';
    }
    elseif ($rutas[0] == "servicios" || $rutas[0] == "Servicios") {
        require 'views/servicios.view.php';
    }
    elseif ($rutas[0] == "servicio" || $rutas[0] == "Servicio") {
        require 'views/serv_Detalles.view.php';
    }
    elseif ($rutas[0] == "Publicaciones" || $rutas[0] == "publicaciones") {
        require 'views/blog_Detalles.view.php';
    }
    elseif ($rutas[0] == "Login" || $rutas[0] == "login") {
        if(isset($_SESSION['validarSesion'])){
            header('Location: http://localhost/SanFrancisco/');
        }else{
            require_once 'views/Login.php';
        }
    }
    elseif ($rutas[0] == "Registro" || $rutas[0] == "registro") {
        if(isset($_SESSION['validarSesion'])){
            header("Location:" . "$ruta");
        }else{
            require_once 'views/Registro.php';
        }
    }
    elseif ($rutas[0] == "Perfil" || $rutas[0] == "perfil" || $rutas[0] == "cuenta") {
        require_once 'views/perfil.view.php';
    }
    elseif ($_GET['ruta'] == "Compras" || $_GET['ruta'] == "compras" || $_GET['ruta'] == "planes") {
        require 'views/compras.view.php';
    }
    elseif ($rutas[0] == "informacion" || $rutas[0] == "Informacion") {
        require_once 'views/Acerca_de.php';
    }
    elseif ($rutas[0] == "Contacto" || $rutas[0] == "contacto") {
        require_once 'views/Contacto.php';
    }
    elseif ($rutas[0] == "cerrar" || $rutas[0] == "Cerrar") {
        require_once 'componentes/cerrarSesion.php';
    }
    else{
        require_once 'views/error404.php';
    }
}else{
    require_once 'views/index.view.php';
    
}
?>
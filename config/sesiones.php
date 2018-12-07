<?php 
require_once 'config.php';
require_once '../Admin/functions.php';
if (isset($_POST)) {
    $correo= $_POST['inCorreoLog'];

    $conexion2 = conexion($bd_config);

    $sql  = "SELECT * FROM usuarios WHERE correo = '$correo'";
    
    $sentencia = $conexion2->prepare($sql);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();
    if(isset($resultado[0])){
        $contraseña= $resultado[0]['contraseña'];

        if (!password_verify($pass,$contraseña)) {
            $respuesta = array(
                'respuesta'=> 'exito',
                'Texto'=> 'Usuario Existe'
            );
        }else{
            $respuesta = array(
                'respuesta'=> 'error',
                'pass'=> $resultado[0]['contraseña'],
                'password'=> $pass
            );
        }
        
    }else{
        $respuesta = array(
            'respuesta'=> 'error',
            'Texto'=> 'No existe el usuario'
        );
    }
}
die(json_encode($resultado[0]));
?>
<?php 
    require_once '../config/config.php';
    require_once 'functions.php';
try {
   $conexion = new mysqli($bd_config['host'],$bd_config['usuario'],$bd_config['pass'],$bd_config['database']);
    
    if (isset($_POST['crearAdmin'])) {
        $nombre= $_POST['inNombre'];
        $apellidos= $_POST['inApellidos'];
        $correo= $_POST['inCorreo'];
        $pass= $_POST['inPassword'];
        $tUser= $_POST['tipoUser'];
        $opciones = [
            'cost' => 12
        ];
        $passhash = password_hash($pass, PASSWORD_BCRYPT, $opciones);
        $sql = "INSERT INTO `usuarios`(`nombre`, `apellidos`, `correo`, `contraseña`, `tipoUser`) VALUES ('$nombre','$apellidos','$correo','$passhash',$tUser)";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        $idRegistro = $stmt->insert_id;
        if ($idRegistro>0) {
            $respuesta = array(
                'respuesta'=> 'exito',
                'idUsuario'=> $idRegistro
            );
        } else if ($stmt->errno == 1062){
            $respuesta = array(
                'respuesta'=> 'error',
                'Texto'=> 'El correo ya a sido registrado'
            );
        }else{
            $respuesta = array(
                'respuesta'=> 'error',
                'Texto'=> 'No se pueden insertar más Registros'
            );
        }

    }
    else if (isset($_POST['loginAdmin'])) {
        $correo= $_POST['correo'];
        $pass= $_POST['password'];

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
    
} catch (Exception $e) {
    echo "error: " . $e->getMessage();
    $respuesta = array(
        'respuesta'=> 'trycatch',
        'Texto'=> $e->getMessage()
    );
    
}
    die(json_encode($respuesta));
?>
<?php 
    require_once '../config/config.php';
try {
   $conexion = new mysqli($bd_config['host'],$bd_config['usuario'],$bd_config['pass'],$bd_config['database']);
    
    if (isset($_POST['crearAdmin'])) {
        $nombre= $_POST['inNombre'];
        $apellidos= $_POST['inApellidos'];
        $correo= $_POST['inCorreo'];
        $pass= $_POST['inPassword'];
        $tUser= $_POST['tipoUser'];
        $opciones = array(
            'cost' => 12
        );
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
    
} catch (Exception $e) {
    echo "error: " . $e->getMessage();
    $respuesta = array(
        'respuesta'=> 'trycatch',
        'Texto'=> $e->getMessage()
    );
}
     die(json_encode($respuesta));
?>
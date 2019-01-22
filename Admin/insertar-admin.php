<?php 
    require_once '../config/config.php';
    require_once 'functions.php';
try {
        $conexion=mysqli_connect('localhost','root','data1122','sanfrancisco');
        $conexion->set_charset("utf8");
    
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
        ////////////////////////////
        if(!correo_exixtente($conexion,$correo)){
            $sql = "INSERT INTO `usuarios`(`nombre`, `apellidos`, `correo`, `contraseña`, `tipoUser`,`validar`) VALUES ('$nombre','$apellidos','$correo','$pass',$tUser,1)";
            if(!$conexion->query($sql)){
                $respuesta = array(
                    'respuesta'=> 'error',
                    'Texto'=> $conexion->errno
                );
                exit;
            }else{
                $respuesta = array(
                    'respuesta'=> 'exito',
                    'idUsuario'=> $codigo_usuario
                );
            }
        }else{
            echo 'Error: Ya existe un usuario con codigo '.$codigo_usuario.' por favor use otro codigo de usuario.';
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

    function correo_exixtente($conexion, $correo){
		$sql="SELECT correo FROM usuarios WHERE correo = $correo";
		$result = $conexion->query($sql);
		if(mysqli_num_rows($result)<=0){
			return false;
		}else{
			return true;
		}
	}
?>
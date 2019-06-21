<?php
session_start();
	require_once '../config/conexion.php';
	require_once '../PHPMailer/PHPMailerAutoload.php';
    require_once '../config/rutas.php';

    $respuesta="";
if (isset($_POST['nombreUser'])) {
    echo json_encode($_POST);
    if(isset($_POST['nombreUser'])&&isset($_POST['apellidosUser'])){
        if(isset($_POST['passAc'])&&isset($_POST['newPass'])&&isset($_POST['newPassR'])&&$_POST['newPass']!=''){
           
            if($_POST['newPass']===$_POST['newPassR']){
                if(preg_match('/^[a-zA-Z0-9]*$/',$_POST['passAc'])&&preg_match('/^[a-zA-Z0-9]*$/',$_POST['newPass'])&&preg_match('/^[a-zA-Z0-9]*$/',$_POST['newPassR'])){
                    $datos = revisarcorreo($conexion,$_POST['passAc'],$_SESSION['correo']);
                    if($datos){
                        $respuesta = array(
                            'respuesta'=> 'exito',
                            'Texto' =>'Datos Actualizados'
                        );
                    }else{
                        $respuesta = array(
                            'respuesta'=> 'error',
                            'Texto' =>'Debes de ingresar la contraseña actual de tu cuenta'
                        );
                    }
                }else{
                    $respuesta = array(
                        'respuesta'=> 'error',
                        'Texto' =>'Caracteres especiales no validos'
                    );
                }
            }else{
                $respuesta = array(
                    'respuesta'=> 'error',
                    'Texto' =>'Las contraseñas no coinciden'
                );
            }
        }else{
            if(preg_match('/^[a-zA-Z-ZñÑáéíóúÁÉÍÓÚ ]*$/',$_POST['nombreUser'])&&preg_match('/^[a-zA-Z-ZñÑáéíóúÁÉÍÓÚ ]*$/',$_POST['apellidosUser'])){
                echo "Solo estas enviando nombre";
            }else{
                $respuesta = array(
                    'respuesta'=> 'error',
                    'Texto'=> 'No se admiten caracteres especiales'
                );
            }
        }
    }else{
        $respuesta = array(
            'respuesta'=> 'error',
            'Texto'=> 'No puedes dejar campos en blanco'
        );
    }
}
echo json_encode($respuesta);




function CambiarPass($conexion,$correo,$password){
	$cryptPassword = md5($password);
	$sql = "UPDATE usuarios SET password = '$cryptPassword' WHERE correo = '$correo'";
	$conexion->query($sql);

	if ($conexion->affected_rows >= 1) {
		return $respuesta = array(
			'pass'=> $newPassword,
			'bycript'=> $cryptPassword,
			'sql'=> $sql
		);
	}else{
		return $respuesta = array(
			'pass'=> 'error',
			'bycript'=> 'error',
			'sql'=> 'error'
		);

	}
	
}

function actualizarPerfil(){

}
function revisarCorreo($conexion,$pass,$correo){
	if ($conexion->connect_errno){
		die('Lo siento hubo un problema con el servidor');
	} else {
		$sql = "SELECT correo, password FROM usuarios WHERE correo = '$correo'";
		$resultado = $conexion->query($sql);
		
		if($resultado->num_rows){
            $comparar = $resultado->fetch_assoc();
            $pass=md5($pass);
            if($comparar['password']===$pass){
                return true;
            }else{
                return false;
            }
		} else {
			return false;
		}
	}
}





?> 
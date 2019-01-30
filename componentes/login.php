<?php 
	require_once '../config/conexion.php';
	require_once '../config/rutas.php';
if ($conexion->connect_errno){
	$respuesta = array(
		'respuesta'=> 'error',
		'Texto'=> 'Hay un problema al conectar con el servidor'
	);
	exit;
} 

if(isset($_POST['inCorreoLog'])) {
	$correo		= $_POST['inCorreoLog'];
	$pass		= $_POST['inPassLog'];

	$encriptarPass= encriptarPass($pass);


	//--------------------------------- //
	//-----------VALIDACION ----------- //
	//--------------------------------- //
	if(preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/',$correo)&& preg_match('/^[a-zA-Z0-9]*$/',$pass)){
		if(revisarCorreo($conexion,$correo)){
			$resultado = compararUsuario($conexion,$correo,$pass);
			if($resultado['validar']==1){
				$respuesta = array(
					'respuesta'=> 'error',
					'Texto'=> 'El correo electronico debe de ser validado, revisa tu bandeja de correo'
				);
			}else if($resultado['password']!=$encriptarPass){
				$respuesta = $resultado;
				echo strlen($pass);
			}else{
				$respuesta = array(
					'respuesta'=> 'exito',
					'Texto'=> 'Hora de crear la sesion'
				);
			}	
        }else{
                $respuesta = array(
                    'respuesta'=> 'error',
                    'Texto'=> 'Correo o contraseña incorrectos'
                );
		}
	}else{
		$respuesta = array(
			'respuesta'=> 'error',
			'Texto'=> 'No puede enviar Caracteres especiales Revice la información'
		);
	}

	

}
else{
	$respuesta = array(
		'respuesta'=> 'error',
		'Texto'=> 'El formulario no se envio de forma correcta'
	);
}

	//---------------------------------------------- //
	//----------- CORREOS EXISXTENTES ----------- //
	//---------------------------------------------- //
function revisarCorreo($conexion,$correo){
	if ($conexion->connect_errno){
		die('Lo siento hubo un problema con el servidor');
	} else {
		$sql = "SELECT correo FROM usuarios WHERE correo = '$correo'";
		$resultado = $conexion->query($sql);
		
		if($resultado->num_rows){
			return true;
	
		} else {
			return false;
		}
	}
}
	//---------------------------------------------- //
	//----------- Registrar USUARIOS --------------- //
	//---------------------------------------------- //
	
function compararUsuario($conexion, $correo, $pass){
	$sql = "SELECT *  FROM usuarios where correo = '$correo';";
	$resultado = $conexion->query($sql);
	if($resultado->num_rows){
		$fila = $resultado->fetch_assoc();
			return $fila;
		
	}else {
		return $respuesta = array(
			'respuesta'=> 'exito',
			'Texto'=> 'correo o contraseña incorrectos'
		);
	}

} 
	


die(json_encode($respuesta));
?>
<?php 
	session_start();
	require_once '../config/conexion.php';
	require_once '../PHPMailer/PHPMailerAutoload.php';
	require_once '../config/rutas.php';
if ($conexion->connect_errno){
	$respuesta = array(
		'respuesta'=> 'error',
		'Texto'=> 'Hay un problema al conectar con el servidor'
	);
	exit;
} 

if(isset($_POST['inNombre'])) {

	$nombre 	= $_POST['inNombre'];
	$apellidos 	= $_POST['inApellidos'];
	$correo		= $_POST['inCorreo'];
	$pass		= $_POST['inPass'];
	$passR		= $_POST['inPassR'];

	//--------------------------------- //
	//-----------VALIDACION ----------- //
	//--------------------------------- //
	if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/',$nombre) && preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/',$apellidos) && preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/',$correo)&& preg_match('/^[a-zA-Z0-9]*$/',$pass)){
		if(revisarCorreo($conexion,$correo)){
			$respuesta = array(
				'respuesta'=> 'error',
				'Texto'=> 'El correo ya ha sido registrado'
			);
		}else{
			//Si pasa todas las validaciones se genera el registro
			$respuesta = registrarUsuarios($conexion);
		}
	}else{
		$respuesta = array(
			'respuesta'=> 'error',
			'Texto'=> 'No puede enviar Caracteres especiales Revice la información'
		);
	}

	

}
else if(isset($_POST['inCorreoLog'])) {
	$correo		= $_POST['inCorreoLog'];
	$pass		= $_POST['inPassLog'];

	
	$encriptarPass = md5($pass);

	//--------------------------------- //
	//-----------VALIDACION ----------- //
	//--------------------------------- //
	if(preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/',$correo) && preg_match('/^[a-zA-Z0-9]*$/',$pass)){
		if(revisarCorreo($conexion,$correo)){
			$resultado = compararUsuario($conexion,$correo,$pass);
			if($resultado['validar']==1){
				$respuesta = array(
					'respuesta'=> 'error',
					'Texto'=> 'El correo electronico debe de ser validado, revisa tu bandeja de correo'
				);
			}else if($encriptarPass==$resultado['password']){
				$_SESSION['validarSesion']	= 	"ok";
				$_SESSION['idUsuario']		= 	$resultado['idUsuario'];
				$_SESSION['nombre']			= 	$resultado['nombre'];
				$_SESSION['apellidos']		= 	$resultado['apellidos'];
				$_SESSION['correo']			= 	$resultado['correo'];
				$_SESSION['tipoUser']		=	$resultado['tipoUser'];
				$_SESSION['fecha']			= 	$resultado['fecha'];
				$respuesta = array(
					'respuesta'=> 'exito',
					'Texto'=> $_SESSION['validarSesion']
				);
			}else{
				$respuesta = array(
					'respuesta'=> 'error',
					'Texto'=> 'correo o contraseña incorrectos'
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
function registrarUsuarios($conexion){
	$statement = $conexion->prepare("INSERT INTO usuarios(idUsuario, nombre, apellidos, correo, password, tipoUser, validar, encriptado, fecha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
	
	// Remplazamos los placeholder ? con los valores que queremos usar.
		// Una S por placeholder que tengamos.
		// s = string
		// i = integer
		// d = double

	$statement->bind_param('sssssiiss', $id,$nombre,$apellidos,$correo,$encriptarPass,$tipoUser,$validar,$validarCorreo,$fecha); // Mandamos los parametros para preparar la consulta y protejer de inyeccion SQL
	$id 		= NULL;
	$nombre 	= $_POST['inNombre'];
	$apellidos 	= $_POST['inApellidos'];
	$correo		= $_POST['inCorreo'];
	$pass		= $_POST['inPass'];
	$tipoUser = 5;
	$validar = 1;
	$fecha = NULL;

	$validarCorreo = md5($correo);
	$encriptarPass= md5($pass);
	

	//---------------------------------------------- //
	//-----------EJECUCIÓN DEL PROGRAMA ----------- //
	//---------------------------------------------- //
	$statement->execute();//Ejecutar solo si paso todos los filtros de datos
	if($conexion->affected_rows >= 1){
		date_default_timezone_set("America/Mexico_City");

		$url = ruta();	
		$mail = new PHPMailer;
		$mail->CharSet = 'UTF-8';
		$mail->isMail();
		$mail->setFrom('Serviciosanfco@gmail.com', 'SF noticias y servicios');
		$mail->addReplyTo('Serviciosanfco@gmail.com', 'SF noticias y servicios');
		$mail->Subject = "Por favor verifique su dirección de correo electrónico";
		$mail->addAddress($correo);
		$mail->msgHTML('<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px">
	
		<center>
			
			<img style="padding:20px; width:50%" src="http://drive.google.com/uc?export=view&id=1VMXji0nuInMduFaI5RC7R97RUa0YeT6w">
	
		</center>
	
		<div style="position:relative; margin:auto; width:600px; background:white; padding:20px">
		
			<center>
			
			<img style="padding:20px; width:15%" src="http://tutorialesatualcance.com/tienda/icon-email.png">
	
			<h3 style="font-weight:100; color:#999">VERIFIQUE SU DIRECCIÓN DE CORREO ELECTRÓNICO</h3>
	
			<hr style="border:1px solid #ccc; width:80%">
	
			<h4 style="font-weight:100; color:#999; padding:0 20px">Para comenzar a usar su cuenta, debe confirmar su dirección de correo electrónico</h4>
	
			<a href="'.$url.'verificar/'.$validarCorreo.'" target="_blank" style="text-decoration:none">
	
			<div style="line-height:60px; background:#0aa; width:60%; color:white">Verifique su dirección de correo electrónico</div>
	
			</a>
	
			<br>
	
			<hr style="border:1px solid #ccc; width:80%">
	
			<h5 style="font-weight:100; color:#999">Si no se inscribió en esta cuenta, puede ignorar este correo electrónico y la cuenta se eliminará.</h5>
	
			</center>
		</div>
	
	</div>');
		$envio = $mail->Send();

		if(!$envio){
			$respuesta = array(
				'respuesta'=> 'error',
				'Texto'=> 'No es posible enviar validacion intentelo más tarde'
			);
		}else{
			$respuesta = array(
				'respuesta'=> 'exito',
				'Texto'=> 'Registro realizado Satisfactoriamente,por favor revise la bandeja de entrada o la carpeta de SPAM de su correo electronico '. $correo .' para verificar su correo '
			);
		}
	} else {
		$respuesta = array(
			'respuesta'=> 'error',
			'Texto'=> 'No es posible Realizar el registro intentelo más tarde'
		);
	}
	return $respuesta;
}

function compararUsuario($conexion, $correo, $pass){
	$sql = "SELECT *  FROM usuarios where correo = '$correo';";
	$resultado = $conexion->query($sql);
	if($resultado->num_rows){
		$fila = $resultado->fetch_assoc();
			return $fila;
		
	}else {
		return $respuesta = array(
			'respuesta'=> 'error',
			'Texto'=> 'correo o contraseña incorrectos'
		);
	}

} 

die(json_encode($respuesta));
?>
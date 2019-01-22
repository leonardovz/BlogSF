<?php
	require_once '../config/conexion.php';
 $errores = 0;
if ($conexion->connect_errno){
	$respuesta = array(
		'respuesta'=> 'error',
		'Texto'=> 'Hay un problema al conectar con el servidor'
	);
	exit;
} 
else {
	$nombre 	= $_POST['inNombre'];
	$apellidos 	= $_POST['inApellidos'];
	$correo		= $_POST['inCorreo'];
	$pass		= $_POST['inPass'];
	$passR		= $_POST['inPassR'];

	//--------------------------------- //
	//-----------VALIDACION ----------- //
	//--------------------------------- //

	if(revisarCorreo($conexion,$correo)){
		$respuesta = array(
			'respuesta'=> 'error',
			'Texto'=> 'El correo ya ha sido registrado'
		);
		$errores += 1;
	}else{
		//Si pasa todas las validaciones se genera el registro
		$respuesta = registrarUsuarios($conexion);
	}

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

	$validarCorreo = $correo;
	$encriptarPass= $pass;
	

	//---------------------------------------------- //
	//-----------EJECUCIÓN DEL PROGRAMA ----------- //
	//---------------------------------------------- //
	
	$statement->execute();//Ejecutar solo si paso todos los filtros de datos
	if($conexion->affected_rows >= 1){
		$respuesta = array(
			'respuesta'=> 'exito',
			'Texto'=> 'Registro realizado Satisfactoriamente'
		);
	} else {
		$respuesta = array(
			'respuesta'=> 'error',
			'Texto'=> 'No es posible Realizar el registro intentelo más tarde'
		);
	}
	return $respuesta;
}

//Final de el archivo
die(json_encode($respuesta));
?>
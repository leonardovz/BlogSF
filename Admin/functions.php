<?php 
function conexion($bd_config){
    try {
		$conexion = new PDO('mysql:host='.$bd_config['host'].';dbname='.$bd_config['database'], $bd_config['usuario'], $bd_config['pass']);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}
// =========================== Servicios =========================== 
function searchService($conexion){
    $sentencia = $conexion->prepare("SELECT * FROM servicios ORDER BY nombre ASC");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function addService($conexion,$servicio){
	$nombre		= 	$servicio['nombre'];
	$imagen 	= 	$servicio['imagen'];
	$sentencia 	= 	$conexion->prepare("INSERT INTO servicios (nombre, imagen) VALUES ('$nombre', '$imagen')"); 
	$sentencia = $conexion->prepare($sql);
	$sentencia->execute();
	$resultado = $sentencia->fetchAll();
}
function modService($conexion,$servicio){
	$id 	=	$servicio['id'];
	$nombre =	$servicio['nombre'];
	$imagen = 	$servicio['imagen'];
	$sql 	= "UPDATE `servicios` SET `nombre`=$nombre,`imagen`=$imagen WHERE id= $id";
	$sentencia = $conexion->prepare($sql);
	$sentencia->execute();
	$resultado = $sentencia->fetchAll();
}
function delService($conexion,$servicio){
	$id		=	$servicio['id'];
	$sql 	= 	"DELETE FROM servicios WHERE id = $servicio";
	$sentencia = $conexion->prepare($sql);
	$sentencia->execute();
	$resultado = $sentencia->fetchAll();
}

// =========================== POSTS =========================== 
function addPost($conexion,$Post){
	$iduser			= $Post['iduser'];
	$fecha 			= $Post['fecha'];
	$titulo 		= $Post['titulo'];
	$imagen 		= $Post['imagen'];
	$descripcion 	= $Post['descripcion'];
	$estado 		= 'AC';
	$sql 			= "INSERT INTO `publicacion`(`iduser`, `fecha`, `titulo`, `imagen`, `descripcion`, `estado`) VALUES ($iduser,$fecha,$titulo,$imagen,$descripcion,$estado);";
}
function delPost($conexion,$Post){
	$iduser 	= $Post['idUser'];
	$tipoUser 	= $Post['tipoUser'];
	$id 		= $Post['id'];
	$sql		= "DELETE FROM publicacion AS pub, WHERE id = $id AND idUser = $iduser;";

}
function searchPost($conexion){
	$sql = "SELECT pub.*,user.idUsuario, user.nombre,user.apellidos FROM publicacion AS pub INNER JOIN usuarios AS user ON pub.iduser=user.idUsuario;";
	$sentencia = $conexion->prepare($sql);
	$sentencia->execute();
	$resultado = $sentencia->fetchAll();
	return $resultado;
}
function modPost($conexion,$Post){
	$id 			= $Post['id'];
	$idUser			= $Post['iduser'];
	$fecha 			= $Post['fecha'];
	$titulo 		= $Post['titulo'];
	$imagen 		= $Post['imagen'];
	$descripcion 	= $Post['descripcion'];
	$estado 		= $Post['descripcion'];
 	$sql 			= "UPDATE `publicacion` SET `iduser`=$iduser,`fecha`=$fecha,`titulo`=$titulo,`imagen`=$imagen,`descripcion`=$descripcion,`estado`=$estado WHERE id=$id AND idUser = $idUser;";
}

// =========================== Usuarios =========================== 

function searchUser($conexion,$User){
 $sql ="SELECT * FROM usuarios ";
}
function addUser($conexion,$User){
	$id 		= $User['idUsuario'];
	$nombre 	= $User['nombre'];
	$apellidos 	= $User['apellidos'];
	$correo 	= $User['correo'];
	$contraseña = $User['contraseña'];
	$tipoUser 	= $User['tipoUser'];

	$sql 		="INSERT INTO `usuarios`(`nombre`, `apellidos`, `correo`, `contraseña`, `tipoUser`) VALUES ($nombre,$apellidos,$apellidos,$correo,$contraseña,$tipoUser);";
}
function modUser($conexion,$User){
	$id 		= $User['idUsuario'];
	$nombre 	= $User['nombre'];
	$apellidos 	= $User['apellidos'];
	$correo 	= $User['correo'];
	$contraseña = $User['contraseña'];
	$tipoUser 	= $User['tipoUser'];

	$sql 		= "UPDATE `usuarios` SET `idUsuario`=$id,`nombre`=$nombre,`apellidos`=$apellidos,`correo`=$correo,`contraseña`=$contraseña,`tipoUser`=$tipoUser WHERE id = $idUser;";
}
function delUser($conexion,$User){
 	$sql 	= "DELETE FROM usuario WHERE id = $id";
}
// =========================== Usuarios Servicios que Ofrecen =========================== 
function searchUserService($conexion){
	 $sql	= "SELECT serv.id, serv.nombre AS servicio ,user.idUsuario, user.nombre AS nameU, user.apellidos , user.correo ,tb.fechaRegistro, Uinf.imagenServicio FROM servicios AS serv INNER JOIN usuarios as user INNER JOIN trabajadores AS tb INNER JOIN usersinfo AS Uinf WHERE tb.idUsuario =user.idUsuario AND tb.idServicio = serv.id;";
	 $sentencia = $conexion->prepare($sql);
	 $sentencia->execute();
	 $resultado = $sentencia->fetchAll();
	 return $resultado;
	}

function addUserService($conexion,$usuario){
 	$sql	="INSERT INTO ";
}
function modUserService($conexion,$usuario){
	$sql 	="";
}
function delUserService($conexion,$usuario){
 	$sql 	="";
}

// =========== Mostrar las fechas de las publicaciones ================
function fechaPub($fecha){
	$date = explode("-",$fecha);
	$anio = $date[0];
	$mes  = $date[1];
	$dia  = $date[2];
	$fecha = array($anio,$mes,$dia);
	return $fecha;
}

// ===========  ANUNCIOS ================

function searchADDS($conexion,$usuario){
 $sql ="";
}
function addADDS($conexion,$servicio){
 $sql ="";
}
function modADDS($conexion,$servicio){
 $sql ="";
}
function delADDS($conexion,$idservicio){
 $sql ="";
}

?>
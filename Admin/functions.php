<?php 
function fechadate(){
    ini_set('date.timezone','America/Mexico_City');
    $año = date('Y',time());
    $diaSemana = (string)date('w',time());
    $dia = date('d',time());
    $mes = date('m',time());
    $fecha = obtenerDia($diaSemana).' '.$dia .' de '. obtenerMes($mes) . ' del '. $año;
    return ($fecha);
}
function obtenerDia($dia){
    switch ($dia) {
        case 1:
            return "Lunes";
            break;
        case 2:
            return "Martes";
            break;
        case 3:
            return "Miercoles";
            break;
        case 4:
            return "Jueves";
            break;
        case 5:
            return "Viernes";
            break;
        case 6:
            return "Sabado";
            break;
        case 0:
            return "Domingo";
            break;
        
        default:
            return 0;
            break;
    }
}
function obtenerMes($mes){
    switch ($mes) {
        case 1:
            return "Enero";
            break;
        case 2:
            return "Febrero";
            break;
        case 3:
            return "Marzo";
            break;
        case 4:
            return "Abril";
            break;
        case 5:
            return "Mayo";
            break;
        case 6:
            return "Junio";
            break;
        case 7:
            return "Julio";
            break;
        case 8:
            return "Agosto";
            break;
        case 9:
            return "Septiembre";
            break;
        case 10:
            return "Octubre";
            break;
        case 11:
            return "Noviembre";
            break;
        case 12:
            return "Diciembre";
            break;
        
        default:
            return 0;
            break;
    }
}
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

// =========================== POSTS De Inicio=========================== 
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
	$sql = "SELECT pub.*,user.idUsuario, user.nombre,user.apellidos FROM publicacion AS pub INNER JOIN usuarios AS user ON pub.iduser=user.idUsuario ORDER BY pub.fecha DESC;";
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

// =========================== Mostrar datos de publicación  =========================== 
function obtenerPostId($conexion,$datos){
	$sql	= "SELECT 
	serv.id, 
	serv.nombre AS servicio ,
	user.idUsuario, 
	user.nombre AS nameU, 
	user.apellidos,
	Uinf.imagenServicio,
	pub.id AS idPub,
	pub.fecha,
	pub.titulo,
	pub.imagen,
	pub.estado,
	pub.descripcion
	FROM 	
		servicios AS serv INNER JOIN 
		usuarios AS user INNER JOIN 
		trabajadores AS tb INNER JOIN 
		usersinfo AS Uinf INNER JOIN
		publicacion AS pub
	WHERE 
		tb.idUsuario = user.idUsuario AND 
		tb.idServicio = serv.id AND 
		user.idUsuario = Uinf.idUser AND
		pub.iduser = user.idUsuario AND
		pub.id=$datos
		";

 	$sentencia = $conexion->prepare($sql);
	$sentencia->execute();
	$resultado = $sentencia->fetchAll();
	return $resultado[0];
}
function mostrarPost($conexion){
	
	$sql	= "SELECT 
	serv.id, 
	serv.nombre AS servicio ,
	user.idUsuario, 
	user.nombre AS nameU, 
	user.apellidos,
	Uinf.imagenServicio,
	pub.id AS idPub,
	pub.fecha,
	pub.titulo,
	pub.imagen,
	pub.estado,
	pub.descripcion
	FROM 	
		servicios AS serv INNER JOIN 
		usuarios AS user INNER JOIN 
		trabajadores AS tb INNER JOIN 
		usersinfo AS Uinf INNER JOIN
		publicacion AS pub
	WHERE 
		tb.idUsuario = user.idUsuario AND 
		tb.idServicio = serv.id AND 
		user.idUsuario = Uinf.idUser AND
		pub.iduser = user.idUsuario 
		ORDER BY 
		tb.fechaRegistro ASC;";

 	$sentencia = $conexion->prepare($sql);
	$sentencia->execute();
	$resultado = $sentencia->fetchAll();
	return $resultado;
}
function mostrarFechas($conexion){
	$sql = "SELECT * FROM ";
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

// =========================== Mostrar necesarios en el perfil  =========================== 
function obtenerPostPerfil($conexion,$idUser){
	
	$sql	= "SELECT 
	serv.id, 
	serv.nombre AS servicio ,
	user.idUsuario, 
	user.nombre AS nameU, 
	user.apellidos,
	Uinf.imagenServicio,
	pub.id AS idPub,
	pub.fecha,
	pub.titulo,
	pub.imagen,
	pub.estado,
	pub.descripcion
	FROM 	
		servicios AS serv INNER JOIN 
		usuarios AS user INNER JOIN 
		trabajadores AS tb INNER JOIN 
		usersinfo AS Uinf INNER JOIN
		publicacion AS pub
	WHERE 
		tb.idUsuario = user.idUsuario AND 
		tb.idServicio = serv.id AND 
		user.idUsuario = Uinf.idUser AND
		pub.iduser = user.idUsuario AND
		user.idUsuario=$idUser
		";

 	$sentencia = $conexion->prepare($sql);
	$sentencia->execute();
	$resultado = $sentencia->fetchAll();
	return $resultado;
}
//Aqui busco todos los datos que se necesitan para mostrar de el perfil
function obtenerPerfil($conexion,$idUser){
	$sql = "SELECT 
	user.idUsuario,
	user.nombre,
	user.apellidos,
	user.correo,
	user.tipoUser,
	Uinfo.telefono,
	Uinfo.celular,
	Uinfo.nombreServicio,
	Uinfo.imagenServicio,
	Uinfo.domicilio,
	Uinfo.descripcion,
	serv.id,
	serv.nombre AS servNombre,
	serv.imagen AS servImagen,
	rg.nombre AS rgNombre,
	rg.imagen AS rgImagen
	FROM
		trabajadores AS tb,
		usuarios AS user,
		servicios AS serv,
		usersinfo AS Uinfo,
		rango AS rg
	WHERE
		user.idUsuario = tb.idUsuario AND
		serv.id = tb.idServicio AND
		Uinfo.idUser = user.idUsuario AND
		user.tipoUser = rg.id AND
		user.idUsuario = $idUser
	";
	$sentencia = $conexion->prepare($sql);
	$sentencia->execute();
	$resultado = $sentencia->fetchAll();
	return $resultado[0];
}
// Aqui se obtienen las fechas de los posts
function fechaPosts($conexion, $idUser){
	$sql = "SELECT 
	pub.fecha
	FROM 	
		servicios AS serv INNER JOIN 
		usuarios AS user INNER JOIN 
		trabajadores AS tb INNER JOIN 
		usersinfo AS Uinf INNER JOIN
		publicacion AS pub
	WHERE 
		tb.idUsuario = user.idUsuario AND 
		tb.idServicio = serv.id AND 
		user.idUsuario = Uinf.idUser AND
		pub.iduser = user.idUsuario AND
		user.idUsuario=$idUser";
		$sentencia = $conexion->prepare($sql);
		$sentencia->execute();
		$resultado = $sentencia->fetchAll();
		return $resultado;
}
// =========================== Usuarios Servicios que Ofrecen ordenados por =========================== Terminado el de mostrar
//Te muestra los servicios pero solo los que se relacionan con la tabla de servicios con el id que recibe 
function servicioUnico($conexion,$id){
	$sql = "SELECT count(*) AS contador FROM trabajadores WHERE idServicio=$id";
	$sentencia = $conexion->prepare($sql);
	$sentencia->execute();
	$resultado = $sentencia->fetchAll();
	return $resultado[0];
}
function obtenerServicios($conexion,$idServicio){
	$sql	= "SELECT serv.id, serv.nombre AS servicio ,user.idUsuario, user.nombre AS nameU, user.apellidos , user.correo ,tb.fechaRegistro, Uinf.imagenServicio FROM servicios AS serv INNER JOIN usuarios as user INNER JOIN trabajadores AS tb INNER JOIN usersinfo AS Uinf WHERE tb.idUsuario = user.idUsuario AND tb.idServicio = serv.id AND user.idUsuario = Uinf.idUser AND serv.id = $idServicio ORDER BY tb.fechaRegistro DESC";

	$sentencia = $conexion->prepare($sql);
	$sentencia->execute();
	$resultado = $sentencia->fetchAll();
	return $resultado;
}
function contadorServicios($conexion){
	$sql = "SELECT * FROM servicios AS serv, trabajadores AS tb WHERE serv.id = tb.idServicio";
}
function searchUserService($conexion){
	$sql	= "SELECT serv.id, serv.nombre AS servicio ,user.idUsuario, user.nombre AS nameU, user.apellidos , user.correo ,tb.fechaRegistro, Uinf.imagenServicio FROM servicios AS serv INNER JOIN usuarios as user INNER JOIN trabajadores AS tb INNER JOIN usersinfo AS Uinf WHERE tb.idUsuario = user.idUsuario AND tb.idServicio = serv.id AND user.idUsuario = Uinf.idUser ORDER BY tb.fechaRegistro DESC";

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
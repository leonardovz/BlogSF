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
    $sentencia = $conexion->prepare("SELECT * FROM servicios");
	$sentencia->execute();
	return $sentencia->fetchAll();
}

function addService($conexion,$Servicio){

}
function modService($conexion,$Servicio){

}
function delService($conexion,$Servicio){

}

// =========================== POSTS =========================== 
function addPost($conexion,$Post){

}
function delPost($conexion,$Post){

}
function searchPost($conexion,$Post){

}
function modPost($conexion,$Post){

}

// =========================== Usuarios =========================== 

function searchUser($conexion,$user){

}
function addUser($conexion,$user){

}
function modUser($conexion,$user){

}
function delUser($conexion,$user){

}
// =========================== Usuarios Servicios que Ofrecen =========================== 
function searchUserService($conexion,$usuario){

}
function addUserService($conexion,$servicio){

}
function modUserService($conexion,$servicio){

}
function delUserService($conexion,$idservicio){

}

// =========== Mostrar las fechas de las publicaciones ================
function viewDatePub(){

}

// ===========  ANUNCIOS ================

function searchADDS($conexion,$usuario){

}
function addADDS($conexion,$servicio){

}
function modADDS($conexion,$servicio){

}
function delADDS($conexion,$idservicio){

}

?>
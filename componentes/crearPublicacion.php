<?php 
session_start();
    require_once '../config/config.php';

    $conexion = new mysqli($bd_config['host'],$bd_config['usuario'],$bd_config['pass'],$bd_config['database']);
    $conexion->set_charset("utf8");


$uploadedFile = '';
$respuesta;

date_default_timezone_set("America/Mexico_City");



if((isset($_POST['nombrePub']) && isset($_POST['descripcionPub']))&&isset($_SESSION['idUsuario'])){
    
    if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/',$_POST['nombrePub'])){
        if(isset($_FILES["file"]["type"])){
            $tipo = explode("/",$_FILES["file"]['type']);
            $tipo= $tipo[1];
            $fileName = $_SESSION['idUsuario'].'_'.time().'.'.$tipo;
            $valid_extensions = array("jpeg", "jpg", "png");
            $temporary = explode(".", $_FILES["file"]["name"]);
            $file_extension = end($temporary);
            if((($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
                $sourcePath = $_FILES['file']['tmp_name'];
                $targetPath = "../Users_images/publicacion/".$fileName;
                if(move_uploaded_file($sourcePath,$targetPath)){
                    $uploadedFile = $fileName;
                    

                    // $sql = "INSERT INTO publicacion (id, iduser, fecha, titulo, imagen, descripcion, estado) VALUES (NULL,$idUsuario,NULL,'$titulo','$fileName','$descripcion','AC')";

                    $statement = $conexion->prepare("INSERT INTO publicacion (id, iduser, fecha, titulo, imagen, descripcion, estado) VALUES (?, ?, ?, ?, ?, ?, ?)");
	
                    // Remplazamos los placeholder ? con los valores que queremos usar.
                        // Una S por placeholder que tengamos.
                        // s = string
                        // i = integer
                        // d = double

                    $statement->bind_param('iiissss', $id,$idUsuario,$fecha,$titulo,$fileName,$descripcion,$status); // Mandamos los parametros para preparar la consulta y protejer de inyeccion SQL
                    $id             = null;
                    $idUsuario      = $_SESSION['idUsuario'];
                    $fecha = NULL;
                    $titulo         = $_POST['nombrePub'];
                    $descripcion    = $_POST['descripcionPub'];
                    $status        = 1;
                    $statement->execute();//Ejecutar solo si paso todos los filtros de datos
                    if($conexion->affected_rows >= 1){
                        $respuesta = array(
                            'respuesta'=> 'exito',
                            'Texto'=> 'Publicacion realizada Satisfactoriamente. '
                        );
                    }
                }else{
                    $respuesta = array(
                        'respuesta'=> 'error',
                        'Texto'=> 'No puede generar una publicación por el momento'
                    );
                }
            }else {
                $respuesta = array(
                    'respuesta'=> 'error',
                    'Texto'=> 'El formato no es valido use (jpg, png o jpej)'
                );
            }
        }else{
            $respuesta = array(
                'respuesta'=> 'error',
                'Texto'=> 'imagen no se envio de forma correcta'
            );
        }
    }else{
        $respuesta = array(
            'respuesta'=> 'error',
			'Texto'=> 'No puede enviar caracteres especiales Revice la información'
		);
    }
}else{
    $respuesta = array(
        'respuesta'=> 'error',
        'Texto'=> 'Vefifique que todos sus datos esten correctos'
    );
}
die(json_encode($respuesta));
?>
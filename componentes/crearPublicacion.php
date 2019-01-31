<?php 
session_start();
echo $_SESSION['idUsuario'];

$uploadedFile = '';
$respuesta = '';
if(isset($_POST['nombrePub']) &&isset($_POST['descripcionPub'])){
    
    if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/',$_POST['nombrePub'])&&preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]*$/',$_POST['descripcionPub'])){
        if(!empty($_FILES["file"]["type"])){
            $fileName = time().'_'.$_FILES['file']['name'].'_'.$_SESSION['idUsuario'];
            $valid_extensions = array("jpeg", "jpg", "png");
            $temporary = explode(".", $_FILES["file"]["name"]);
            $file_extension = end($temporary);
            if((($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
                $sourcePath = $_FILES['file']['tmp_name'];
                $targetPath = "../Users_images/publicacion/".$fileName;
                if(move_uploaded_file($sourcePath,$targetPath)){
                    $uploadedFile = $fileName;
                    
                }else{
                    $respuesta = array(
                        'respuesta'=> 'error',
                        'Texto'=> 'No puede generar una publicación por el momento'
                    );
                }
            }$respuesta = array(
                'respuesta'=> 'error',
                'Texto'=> 'El formato no es valido use (jpg, png o jpej)'
            );
        }else{
            $respuesta = array(
                'respuesta'=> 'error',
                'Texto'=> 'imagen no se envio de forma correcta'
            );
        }
    }else{
        $respuesta = array(
            'respuesta'=> 'error',
			'Texto'=> 'No puede enviar Caracteres especiales Revice la información'
		);
    }
}else{
    $respuesta = array(
        'respuesta'=> 'error',
        'Texto'=> 'Vefifique que todos sus datos esten correctos'
    );
}
die(json_encode($_FILES));
?>
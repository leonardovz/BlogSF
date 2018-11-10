<?php 
session_start();
Usuario_autenticado();

function Usuario_autenticado(){
    if(revisar_usuario()){
        header('Login.php');
        exit();
    }
}
function revisar_usuario(){
    return isset($_SESSION['id']);
}
?>
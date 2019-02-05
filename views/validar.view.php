<?php 
    require_once 'views/header.php';
    require_once 'config/conexion.php';
    require_once 'Admin/functions.php';
?>

	<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?php echo $ruta?>images/bg-02.jpg');">
<h2 class="ltext-105 cl0 txt-center">
    verificación
    </h2>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <?php
                 $validar = validarCorreo($conexion,$rutas[1]);
                if($validar['Texto']=='exito'){?>
                <h1>
                    ¡Genial!</h1>
                <h2>
                    El correo fue verificado de forma exitosa</h2>
                <div class="error-details">
                   Puedes iniciar seción y continuar con tus actividades de forma tranquila <br><br>
                </div>
                <div class="error-actions">
                    <a href="<?php echo $ruta . $links_contenido['login'];?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>Iniciar Sesión </a>
                    
                </div>

                <?php }else{?>

                    <h1>
                    ¡Oops!</h1>
                    <h2>
                       <?php echo $validar['Texto'];?></h2>
                    <div class="error-details">
                        Lo sentimos, ha ocurrido un error, <br>  ¡Intenta más tarde o intenta registrar de nuevo tu correo!
                    </div>
                    <div class="error-actions">
                        <a href="<?php echo $ruta?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>Volver al inicio </a>
                    </div>

                <?php }?>
            </div>
        </div>
    </div>
</div>
	<?php require 'views/footer.php';?>
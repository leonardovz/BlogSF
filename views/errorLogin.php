<?php require 'views/header.php';?>
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?php echo $ruta?>images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			ERROR 404
		</h2>
	</section>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    El perfil que desea ingresar no esta disponible</h2>
                <div class="error-details">
                    Lo sentimos, ha ocurrido un error, ¡No se encontró la página solicitada!
                </div>
                <div class="error-actions">
                    <a href="<?php echo $ruta?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>Ir al inicio </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'views/footer.php';?>
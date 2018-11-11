<?php 
    require 'views/header.php';
    // include ('config/sesiones.php'); 
?>

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Registro
    </h2>
</section>
<!-- Content page -->
<section class="bg0 p-tb-92">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto p-tb-92">
                <form>
                    <div class="form-row " >
                        <div class="form-group col">
                            <label for="inCorreoLog">Correo Electronico</label>
                            <input type="text" class="form-control rounded-0" id="inCorreoLog" placeholder="e-mail">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inPassLog">Contraseña</label>
                            <input type="password" class="form-control" id="inPassLog" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col text-center">
                            <p>¿Aún no tienes cuenta? <a href="Registro.php"> Registrate </a></p>
                        </div>
                    </div>
                    <button   id="inLogin"  type="button" class="btn btn-secondary btn-lg btn-block rounded-0">Login</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- <script src="js/validar.js"></script> -->
<?php require 'views/footer.php'; ?>
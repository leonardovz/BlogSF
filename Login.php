<?php 
    require 'views/header.php';
    // include ('config/sesiones.php'); 
?>

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Login
    </h2>
</section>
<!-- Content page -->
<section class="bg0 p-tb-50 ltext-101">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto p-tb-92">
                <form>
                    <div class="form-row m-t-20" >
                        <div class="col-2 col-md-1 m-auto">
                            <label for="inCorreoLog" class="text-right"><i class="fas fa-user"></i></label>
                        </div>
                        <div class="col-10 col-md-11">
                            <input type="text" class="form-control btn-lg"  id="inCorreoLog" placeholder="e-mail">
                        </div>
                    </div>
                    <div class="form-row  m-t-20">
                        <div class="col-2 col-md-1">
                            <label for="inPassLog" class="text-right"><i class="fas fa-key"> </i> </label>
                        </div>
                        <div class="col-10 col-md-11">
                            <input type="password" class="form-control btn-lg" id="inPassLog" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="form-row  m-t-20">
                        <div class="form-group col text-center fs-21">
                            <p>¿Aún no tienes cuenta? <a href="Registro.php"> Registrate </a></p>
                        </div>
                    </div>
                    <button   id="inLogin"  type="button" class="btn btn-outline-dark btn-lg btn-block ">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- <script src="js/validar.js"></script> -->
<?php require 'views/footer.php'; ?>
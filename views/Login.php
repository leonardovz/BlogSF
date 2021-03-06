<?php 
    require 'templates/header.php';
?>

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Iniciar Sesión
    </h2>
</section>
<!-- Content page -->
<section class=" p-tb-50 ltext-101" style="background: #e1e1e1;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto p-tb-45"style="background: #fff;">
                <form role="form" action="componentes/registro-user.php" name= "loginUser" id="loginUser" method="POST">
                <input type="text"  name= "loginUser" placeholder="Contraseña" hidden value="1";>
                    <div class="form-group row">
                        <div class="col-sm-12">
                        <input type="email" class="form-control form-control-lg" name ="inCorreoLog" id="inCorreoLog" placeholder="Correo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                        <input type="password" class="form-control form-control-lg" name="inPassLog" id="inPassLog" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="form-row fs-20">
                        <div class="form-group col-md-6 text-center btn" id="facebook">
                            <i class="zmdi zmdi-facebook-box"> Facebook</i>
                        </div>
                        <div class="form-group col-md-6 text-center btn" id="google">
                            <i class="zmdi zmdi-google"> Google</i>
                        </div>
                    </div>
                    <div class="form-row  m-t-20" >
                        <div class="form-group col text-center fs-21" id="toRegistro">
                            <p>¿Aún no tienes cuenta? <a href="<?php echo $ruta . $links_contenido['registro']?>"> Registrate </a></p>
                        </div>
                    </div>
                    <button   id="inLogin"  type="submit" class="btn btn-outline-dark btn-lg btn-block ">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
</section>


<?php require 'templates/footer.php'; ?>
<script src="<?php echo $ruta;?>js/login.js"></script>
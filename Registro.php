<?php require 'views/header.php';?>

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Registro
    </h2>
</section>
<!-- Content page -->
<section class=" p-tb-50 ltext-101" style="background: #e1e1e1;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto p-tb-45"style="background: #fff;">
                <form name= "crearUser" id="crearUser" action="componentes/registro-user.php" method="POST">
                    <div class="form-row fs-20 " >
                        <div class="form-group col">
                            <input type="text" class="form-control" name="inCorreo" id="inCorreo" placeholder="e-mail">
                        </div>
                    </div>
                    <div class="form-row fs-20">
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control" name="inPass" id="inPass" placeholder="Contraseña">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control" name="inPassR" id="inPassR" placeholder="Repetir">
                        </div>
                    </div>
                    <div class="form-row fs-20">
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="inNombre" id="inNombre" placeholder="Nombre(s)">
                        </div>
                        <div class="form-group col-md-8">
                            <input type="text" class="form-control" name="inApellidos" id="inApellidos" placeholder="Apellidos">
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
                    <div class="form-row  m-t-20">
                        <div class="form-group col text-center fs-21">
                            <p>¿Ya tienes cuenta? <a href="Login.php"> Ingresa </a></p>
                        </div>
                    </div>
                    <div class="form-check m-l-20 fs-18 p-b-8">
                        <input type="checkbox" class="form-check-input" id="politicas">
                        <label class="form-check-label" for="exampleCheck1">Acepta nuestros <a href="#">Terminos y condiciones</a></label>
                    </div>

                    <button type="submit" class="btn btn-outline-dark btn-lg btn-block">Crear Registro</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="js/login.js"></script>
<?php require 'views/footer.php'; ?>
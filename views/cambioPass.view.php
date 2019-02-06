<?php require 'views/header.php';?>

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Restablecer Contraseña
    </h2>
</section>
<!-- Content page -->
<section class=" p-tb-50 ltext-101" style="background: #e1e1e1;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto p-tb-45"style="background: #fff;">
                <label for="sendCorreo" class="fs-18 text-center">Ingresa tu correo electronico</label> <br>   
            <form name= "restablecer" id="restablecer" action="componentes/registro-user.php" method="POST">
                    <div class="form-row fs-20 ">
                        <div class="form-group col">
                            <input type="text" class="form-control" name="sendCorreo" id="sendCorreo" placeholder="e-mail">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-dark btn-lg btn-block">Restablecer</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="js/login.js"></script>
<?php require 'views/footer.php'; ?>
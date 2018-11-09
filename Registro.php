<?php require 'views/header.php';?>

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Registro
    </h2>
</section>
<!-- Content page -->
<section class="bg0 p-t-52 p-b-20">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <form>
                    <div class="form-row " >
                        <div class="form-group col">
                            <label for="inCorreo">Correo Electronico</label>
                            <input type="text" class="form-control rounded-0" id="inCorreo" placeholder="e-mail">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inPass">Contraseña</label>
                            <input type="password" class="form-control" id="inPass" placeholder="Contraseña">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inPassR">Repetir Contraseña</label>
                            <input type="password" class="form-control" id="inPassR" placeholder="Repetir">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inNombre">Nombre</label>
                            <input type="text" class="form-control" id="inNombre" placeholder="Nombre(s)">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inPaterno">Apellido Paterno</label>
                            <input type="text" class="form-control" id="inPaterno" placeholder="Paterno">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inMaterno">Apellido Materno</label>
                            <input type="text" class="form-control" id="inMaterno" placeholder="Materno">
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary btn-lg btn-block rounded-0" onclick="registrar();">Crear Registro</button>
                </form>
                <div id="" class ="m-t-20 m-b-20"> 
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 m-t-20 m-auto" id="contenedor_alertas">
                        </div>
                    </div>
                </div></div>
            </div>
        </div>
    </div>
</section>

<!-- <script src="js/app.js"></script> -->
<?php require 'views/footer.php'; ?>
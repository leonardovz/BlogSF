<?php require 'views/header.php';?>

<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
    <h2 class="ltext-105 cl0 txt-center">
        Registro
    </h2>
</section>
<!-- Content page -->
<section class="bg0 p-t-52 p-b-20 ltext-101">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <form name= "crearUser" id="crearUser" action="componentes/registro-user.php" method="POST">
                    <div class="form-row fs-20 " >
                        <div class="form-group col">
                            <input type="email" class="form-control" name="inCorreo" id="inCorreo" placeholder="e-mail">
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
                            <input type="text" class="form-control" name="inApellidos" id="inApellidos" placeholder="Paterno">
                        </div>
                    </div>
                    <div class="form-row  m-t-20">
                        <div class="form-group col text-center fs-21">
                            <p>¿Ya tienes cuenta? <a href="Login.php"> Ingresa </a></p>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-dark btn-lg btn-block">Crear Registro</button>
                    
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

<?php require 'views/footer.php'; ?>
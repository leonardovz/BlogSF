<form  method= "post" action="../componentes/editar-user.php" enctype="multipart/form-data" id="fupForm" >
    
    <div class="form-row">
        <div class="col">
            <label for="nombreUser">Nombre</label>
            <input type="text" class="form-control" id= "nombreUser" name="nombreUser" placeholder="Nombre" value="<?php echo $_SESSION['nombre'];?>">
        </div>
    </div>
    <div class="form-row">
        <div class="col">
            <label for="apellidosUser">Apellidos</label>
            <input type="text" class="form-control" id= "apellidosUser" name="apellidosUser" placeholder="Apellidos"value ="<?php echo $_SESSION['apellidos'];?>">
        </div>
    </div> 
    <div class="form-row">
        <div class="col">
            <label for="passAc">Ingresa tu Contraseña anterior</label>
            <input type="text" class="form-control" id= "passAc" name="passAc" placeholder="*************">
        </div>
    </div> 
    <div class="form-row">
        <div class="col">
            <label for="newPass">Cambio de contraseña</label>
            <input type="text" class="form-control" id= "newPass" name="newPass" placeholder="Nueva contraseña">
        </div>
    </div> 
    <div class="form-row">
        <div class="col">
            <label for="newPassR">Repite tu contraseña</label>
            <input type="text" class="form-control" id= "newPassR" name="newPassR" placeholder="Repite tu contraseña">
        </div>
    </div> 

    <div class="form-row m-t-10">
        <div class="col-md-12 m-b-6">
            <div class="custom-file m-b-12">
                <label for="file" class="btn btn-outline-dark btn-lg btn-block" id="updateImage">
                    <i class="fs-20 fas fa-upload"></i> 
                    <span class="p-l-5 sf-16">Cambia imagen de contacto</span>
                </label>
                <input type="file" name="file" id="file" hidden>
            </div>
        </div>
    </div>
    
    <button class="bflex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04" type="submit">Guardar Cambios</button>
</form>

<br>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br>
<h4>Datos de Servicio</h4><br>
<form  method= "post" action="../componentes/crearPublicacion.php" enctype="multipart/form-data" id="datosServicio" >
    <div class="form-row m-t-10">
        <div class="col-md-12 m-b-6">
            <div class="custom-file m-b-12">
                <label for="file" class="btn btn-outline-dark btn-lg btn-block" id="updateImage">
                    <i class="fs-20 fas fa-upload"></i> 
                    <span class="p-l-5 sf-16">Cambiar imagen de portada</span>
                </label>
                <input type="file" name="file" id="file" hidden>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Selecciona tu Servicio</label>
        <select class="form-control" id="exampleFormControlSelect1">

            <?php 
                $conexion = conexion($bd_config);
                $servicios = searchService($conexion);
                echo '<option value="">Selecciona un Servicio</option>';
                for ($i=0; $i < sizeof($servicios) ; $i++) {
                    echo '<option value='.$servicios[$i]['id'].'>'.$servicios[$i]['nombre'].'</option>';  
                }
            ?>
        </select>
    <div class="form-row">
        <div class="col">
            <label for="telHome">Telefono de casa u Oficina</label>
            <input type="text" class="form-control" id= "telHome" name="telHome" placeholder="Telefono de casa u Oficina" required>
        </div>
        <div class="col">
            <label for="telCel">Movil</label>
            <input type="text" class="form-control" id= "telCel" name="telCel" placeholder="Movil" required>
        </div>
    </div> 
  </div>
    <div class="form-row">
        <div class="col">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id= "direccion" name="direccion" placeholder="" required>
        </div>
  </div>

    <div class="form-row m-t-12">
        <label for="descripcionProducto">Descripción</label>
        <textarea class="form-control m-b-12" id="descripcionPub" name = "descripcionPub" rows="5" placeholder="Ingresa el texto que describe tu producto"></textarea>
    </div>
    
    <button class="bflex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04" type="submit">Guardar Cambios</button>
</form>

<br>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<br>
<form  id="publicar" name="publicar" action="../componentes/crearPublicacion.php" enctype="multipart/form-data" method="post" >
    <div class="form-row">
        <div class="col m-t-35 text-right">
            <label for="nombreProducto"><?php echo fechadate();?></label>
        </div>
    </div>  
    <div class="form-row">
        <div class="col">
            <label for="nombreProducto">Titulo de publicación</label>
            <input type="text" class="form-control" id= "nombrePub" name="nombrePub" placeholder="Nombre" required>
        </div>
    </div> 
    
    <div class="form-row m-t-10">
        <div class="col-md-12 m-b-6">
            <div class="custom-file m-b-12">
                <label for="file" class="btn btn-outline-dark btn-lg btn-block" id="updateImage">
                    <i class="fs-20 fas fa-upload"></i> 
                    <span class="p-l-5 sf-16">Selecciona tu imagen</span>
                </label>
                <input type="file" name="file" id="file" hidden>
            </div>
        </div>
    </div>
    <div class="form-row m-t-12">
        <label for="descripcionProducto">Descripción</label>
        <textarea class="form-control m-b-12" id="descripcionPub" name = "descripcionPub" rows="5" placeholder="Ingresa el texto que describe tu producto"></textarea>
    </div>
    
    <button class="bflex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04" type="submit">Publicar</button>
</form>

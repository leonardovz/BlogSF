<form  enctype="multipart/form-data" method="post" >
    <div class="form-row">
        <div class="col m-t-35 text-right">
            <label for="nombreProducto"></label>
        </div>
    </div>  
    <div class="form-row">
        <div class="col-md-4">
            <label for="nombreProducto">Servicio</label>
            <input type="text" class="form-control" id= "nombreProducto" name="nombreProducto" placeholder="Nombre" required>
        </div>
        <div class="col-md-4 m-b-6">
            <div class="custom-file m-b-12 p-t-30">
                <label for="thumb" class="btn btn-outline-dark btn-block" id="updateImage">
                    <i class="fs-20 fas fa-upload"></i> 
                    <span class="p-l-5 sf-16">Seleccionar imagen</span>
                </label>
                <input type="file" name="thumb" id="thumb" hidden>
            </div>
        </div>
        <div class="col-md-4 p-t-20">
            <button id="sendService" class="bflex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04 btn-block" type="submit">Añadir</button>
        </div>
    </div> 
    <div class="form-row m-t-10 p-b-30 ">
        <div id="vistaPrevia">
        </div>
    </div>
</form>
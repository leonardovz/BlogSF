<form  action="php/crearProducto.php" enctype="multipart/form-data" method="post" >
<div class="form-row">
        <div class="col m-t-35 text-right">
            <label for="nombreProducto"><?php echo fechadate();?></label>
        </div>
    </div>  
    <div class="form-row">
        <div class="col">
            <label for="nombreProducto">Titulo de publicación</label>
            <input type="text" class="form-control" id= "nombreProducto" name="nombreProducto" placeholder="Nombre" required>
        </div>
    </div> 
    
    <div class="form-row m-t-10">
        <div class="col-md-12 m-b-6">
            <div class="custom-file m-b-12">
                <label for="thumb">Selecciona tu imagen</label>
                <input type="file" name="thumb" id="thumb">
            </div>
        </div>
    </div>
    <div class="form-row m-t-12">
        <label for="descripcionProducto">Descripción</label>
        <textarea class="form-control m-b-12" id="descripcionProducto" name = "descripcionProducto" rows="5" placeholder="Ingresa el texto que describe tu producto"></textarea>
    </div>
    
    <button class="bflex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04" type="submit">Publicar</button>
</form>



<?php function fechadate(){
    ini_set('date.timezone','America/Mexico_City');

    $año = date('Y',time());
    $diaSemana = (string)date('w',time());
    $dia = date('d',time());
    $mes = date('m',time());
    $fecha = obtenerDia($diaSemana).' '.$dia .' de '. obtenerMes($mes) . ' del '. $año;
    return ($fecha);
}

function obtenerDia($dia){
    switch ($dia) {
        case 1:
            return "Lunes";
            break;
        case 2:
            return "Martes";
            break;
        case 3:
            return "Miercoles";
            break;
        case 4:
            return "Jueves";
            break;
        case 5:
            return "Viernes";
            break;
        case 6:
            return "Sabado";
            break;
        case 0:
            return "Domingo";
            break;
        
        default:
            return 0;
            break;
    }
}
function obtenerMes($mes){
    switch ($mes) {
        case 1:
            return "Enero";
            break;
        case 2:
            return "Febrero";
            break;
        case 3:
            return "Marzo";
            break;
        case 4:
            return "Abril";
            break;
        case 5:
            return "Mayo";
            break;
        case 6:
            return "Junio";
            break;
        case 7:
            return "Julio";
            break;
        case 8:
            return "Agosto";
            break;
        case 9:
            return "Septiembre";
            break;
        case 10:
            return "Octubre";
            break;
        case 11:
            return "Noviembre";
            break;
        case 12:
            return "Diciembre";
            break;
        
        default:
            return 0;
            break;
    }
}
?>
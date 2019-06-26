var ruta = ruta();
$(document).ready(function(){
    $.ajax({
        type: 'POST',
        url: ruta+'componentes/ajax.php',
        data: 'opcion=PublicacionesRecientes',
        dataType: 'json',
        error : function(xhr, status) {
            alert(JSON.stringify(xhr));
        },
        success: function (data) {
            // console.log(ruta+'componentes/ajax.php');
            // console.log(data);
            if(data.respuesta == "error"){
                console.log("Hola");
            }else{

                for(i=0;i<data.length;i++){
                    // publicaciones(data[i]);
                    // console.log(data[i]);
                    $('#publicaciones').append(publicaciones(data[i]));
                }
            }
        }
    });
    $.ajax({
        type: 'POST',
        url: ruta+'componentes/ajax.php',
        data: 'opcion=ServiciosInicio',
        dataType: 'json',
        error : function(xhr, status) {
            alert(JSON.stringify(xhr));
        },
        success: function (data) {
            // console.log(ruta+'componentes/ajax.php');
            // console.log(data);
            if(data.respuesta == "error"){
                console.log("Hola");
            }else{

                for(i=0;i<data.length;i++){
                    // publicaciones(data[i]);
                    // console.log(data[i]);
                    $('#usuariosServicio').append(usuariosTargeta(data[i]));
                }
            }
        }
    });
});
function publicaciones(datos){
    // var nombre = 'hola';
    var fecha = datos['fecha'].split(' ');
    var hora = fecha[1].split(':');
        fecha = fecha[0].split('-');
    var publicacion = 
    `
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
            <div class="p-b-63">
                    <a href="${ruta+'publicaciones/'+datos['id']}" class="hov-img0 how-pos5-parent">
                        <img src="${ruta+'Users_images/publicacion/' +datos['imagen']}" alt="IMG-BLOG">

                        <div class="flex-col-c-m size-123 bg9 how-pos5">
                            <span class="ltext-107 cl2 txt-center">
                            ${fecha[2]}
                            </span>

                            <span class="stext-109 cl3 txt-center">
                            ${fecha[1] +'-'+ fecha[0]}
                            </span>
                        </div>
                    </a>
                    <div class="p-t-32">
                        <h4 class="p-b-9">
                            <a href="${ruta+'publicaciones/'+datos['id']}" class="ltext-108 cl2 hov-cl1 trans-04">
                            ${datos['titulo']}
                            </a>
                        </h4>

                        <div class="flex-w flex-sb-m p-t-18">
                            <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                                <span>
                                    <span class="cl4">By</span> ${datos['nombre']}
                                    <span class="cl12 m-l-4 m-r-6">|</span>
                                </span>

                                <span>
                                ${datos['apellidos']}
                                </span>
                            </span>

                            <a href="${ruta+'publicaciones/'+datos['id']}" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                                Continua Leyendo...
                                <i class="fas fa-book-open"></i>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
    
    `;
    return (publicacion);
}
function usuariosTargeta(datos){
    // var nombre = 'hola';
    var fecha = datos['fechaRegistro'].split(' ');
    var hora = fecha[1].split(':');
        fecha = fecha[0].split('-');
    var publicacion = 
    `
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
        <!-- Block2 -->
        <div class="p-b-63">
                <a href="${ruta+'perfil/'+datos['idUsuario']}" class="hov-img0 how-pos5-parent">
                    <img src="${ruta+'Users_images/usuarios/'+datos['imagenServicio']}" alt="IMG-BLOG">

                    <div class="flex-col-c-m size-123 bg9 how-pos5">
                        <span class="ltext-107 cl2 txt-center">
                            ${fecha[2]}
                        </span>

                        <span class="stext-109 cl3 txt-center">
                        ${fecha[1] +'-'+ fecha[0]}
                        </span>
                    </div>
                </a>

                <div class="p-t-16">
                    <h4 class="p-b-6">
                        <a href="${ruta+'perfil/'+datos['idUsuario']}" class="ltext-96 cl2 hov-cl1 trans-04">
                            ${datos['servicio']}
                        </a>
                    </h4>

                    <div class="flex-w flex-sb-m p-t-8">
                        <span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
                            <span>
                                ${datos['nameU'] + ' ' + datos['apellidos'] }
                            </span>
                        </span>
                        
                        <a href="${ruta+'perfil/'+datos['idUsuario']}" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
                            Ver Información 
                            <i class="fs-20 fas fa-user-circle"> </i>
                        </a>
                    </div>
                </div>
            </div>
    </div>
    
    `;
    return (publicacion);
}


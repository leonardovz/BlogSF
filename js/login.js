$(document).ready(function() {
    $("input").focus(function(){
        $(".alert").remove();
    });
    
    $('#crearUser').on('submit',function(e){
        e.preventDefault();
        $(".alert").remove();
        var errores = 0;
        var formulario = $(this).serializeArray();
        var politicas = $("#politicas:checked").val();
        var nombre = $("#inNombre").val();
        var apellidos = $("#inApellidos").val();
        var correo = $("#inCorreo").val();
        var pass = $("#inPass").val();
        var passR = $("#inPassR").val();
        
        if(politicas != "on"){
            errores +=1;
            $("#politicas").parent().before('<div class="alert alert-danger fs-16" role="alert"> <small class="fs-18">ERROR: </small> Acepta terminos y condiciones </div>');
        }
        // ------------------------ //
        // ---Validar Nombre ------ //
        // ------------------------ //
        if(nombre != ""){
            var expresion =/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;
            if(!expresion.test(nombre)){
                errores +=1;
                $("#politicas").parent().before('<div class="alert alert-warning fs-16" role="alert"> <small class="fs-18">ERROR: </small> Caracteres invalidos en el campo Nombre </div>');
            }
        }else{
            errores +=1;
            $("#politicas").parent().before('<div class="alert alert-warning fs-16" role="alert"> <small class="fs-18">ERROR: </small> Nombre obligatorio </div>');
        }
        // ------------------------ //
        //-----Validar Apellidos -- //
        // ------------------------ //
        if(apellidos != ""){
            var expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;
            if(!expresion.test(apellidos)){
                errores +=1;
                $("#politicas").parent().before('<div class="alert alert-warning fs-16" role="alert"> <small class="fs-18">ERROR: </small> Caracteres invalidos en el campo Apellidos </div>');
            }
        }else{
            errores +=1;
            $("#politicas").parent().before('<div class="alert alert-warning fs-16" role="alert"> <small class="fs-18">ERROR: </small> Apellidos obligatorios </div>');
        }

        // ------------------------ //
        //-----Validar contraseña-- //
        // ------------------------ //
        if(pass != ""){
            var expresion = /^[a-zA-Z0-9]*$/;
            if(!expresion.test(pass)){
                errores +=1;
                $("#politicas").parent().before('<div class="alert alert-warning fs-16" role="alert"> <small class="fs-18">ERROR: </small> No se permiten Caracteres especiales solo @ </div>');
            }
            else if(pass != passR){
                errores +=1;
                $("#politicas").parent().before('<div class="alert alert-warning fs-16" role="alert"> <small class="fs-18">ERROR: </small> Las contraseñas no coinciden </div>');
            }
        }else{
            errores +=1;
            $("#politicas").parent().before('<div class="alert alert-warning fs-16" role="alert"> <small class="fs-18">ERROR: </small> Contraseña obligatoria </div>');
        }

        // ------------------------ //
        //-----Validar correo------ //
        // ------------------------ //
        if(correo != ""){
            var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
            if(!expresion.test(correo)){
                errores +=1;
                $("#politicas").parent().before('<div class="alert alert-warning fs-16" role="alert"> <small class="fs-18">ERROR: </small> El correo no esta escrito de forma correcta</div>');
            }
        }else{
            errores +=1;
            $("#politicas").parent().before('<div class="alert alert-warning fs-16" role="alert"> <small class="fs-18">ERROR: </small> Correo obligatoria </div>');
        }
        
        if(errores == 0){ 
            console.log("click");       
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: formulario,
                dataType: 'json',
                success: function (data) {
                    if (data.respuesta == 'exito') {
                        Swal.fire({
                            type: 'success',
                            title: 'Registrado',
                            text: data.Texto
                          });
                          clearInputs();
                    } else {
                        swal({
                            type: 'error',
                            title: 'Oops...',
                            text: data.Texto
                        });
                    }
                    console.log(data);
                }
            });
        }
        console.log(errores);
    });

    $('#loginUser').on('submit',function(e){
        e.preventDefault();
        console.log("click");
        $(".alert").remove();
        var errores = 0;
        var formulario = $(this).serializeArray();
        var correo = $("#inCorreoLog").val();
        var pass = $("#inPassLog").val();
        // ------------------------ //
        //-----Validar contraseña-- //
        // ------------------------ //
        if(pass != ""){
            var expresion = /^[a-zA-Z0-9]*$/;
            if(!expresion.test(pass)){
                errores +=1;
                $("#toRegistro").parent().before('<div class="alert alert-warning fs-16" role="alert"> <small class="fs-18">ERROR: </small> No se permiten Caracteres especiales solo @ </div>');
            }
        }else{
            errores +=1;
            $("#toRegistro").parent().before('<div class="alert alert-warning fs-16" role="alert"> <small class="fs-18">ERROR: </small> Contraseña obligatoria </div>');
        }

        // ------------------------ //
        //-----Validar correo------ //
        // ------------------------ //
        if(correo != ""){
            var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
            if(!expresion.test(correo)){
                errores +=1;
                $("#toRegistro").parent().before('<div class="alert alert-warning fs-16" role="alert"> <small class="fs-18">ERROR: </small> El correo no esta escrito de forma correcta</div>');
            }
        }else{
            errores +=1;
            $("#toRegistro").parent().before('<div class="alert alert-warning fs-16" role="alert"> <small class="fs-18">ERROR: </small> Correo obligatoria </div>');
        }
        
        if(errores == 0){ 
            console.log("clickeaste");
            var formulario = $(this).serializeArray();
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: formulario,
                dataType: 'json',
                error:function(xhr,status){
                    console.log(JSON.stringify(xhr));
                },
                success: function (data) {
                    if (data.respuesta == 'exito') {
                        swal({
                            position: 'top-end',
                            type: 'success',
                            title: data.Texto,
                            showConfirmButton: false,
                            timer: 1500
                        });
                        location.reload();
                    } else {
                        swal({
                            type: 'error',
                            title: 'Oops...',
                            text: data.Texto
                        });
                    }
                    console.log(data);
                }
            
            });
        }
    });

    $('#restablecer').on('submit',function(e){
        e.preventDefault();
        console.log("click to click");
        $(".alert").remove();
        var errores = 0;
        var formulario = $(this).serializeArray();
        var correo = $("#sendCorreo").val();

        // ------------------------ //
        //-----Validar correo------ //
        // ------------------------ //
        if(correo != ""){
            var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
            if(!expresion.test(correo)){
                errores +=1;
                $("#sendCorreo").parent().parent().after('<div class="alert alert-warning fs-16" role="alert"> <small class="fs-18">ERROR: </small> El correo no esta escrito de forma correcta</div>');
            }
        }else{
            errores +=1;
            $("#sendCorreo").parent().parent().after('<div class="alert alert-warning fs-16" role="alert"> <small class="fs-18">ERROR: </small> Correo obligatoria </div>');
        }
        
        if(errores == 0){ 
            console.log("Entro a AJAX");
            var formulario = $(this).serializeArray();
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: formulario,
                dataType: 'json',
                success: function (data) {
                    if (data.respuesta == 'exito') {
                        Swal.fire({
                            position: 'top-end',
                            type: 'success',
                            title: 'Registrado',
                            text: data.Texto
                          });
                    } else {
                        swal({
                            type: 'error',
                            title: 'Oops...',
                            text: data.Texto
                        });
                    }
                    console.log(data);
                }
            
            });
        }
    });
    function clearInputs(){
        $("#loginUser")[0].reset();
    }
});
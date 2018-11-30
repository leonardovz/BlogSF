$(document).ready(function() {
    $('#crearAdmin').on('submit',function(e){
        e.preventDefault();

        var formulario = $(this).serializeArray();
        
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: formulario,
            dataType: 'json',
            success: function (data) {
                if (data.respuesta == 'exito') {
                    swal({
                        position: 'top-end',
                        type: 'success',
                        title: 'Tu registro a sido guardado con exito',
                        showConfirmButton: false,
                        timer: 1500
                      })
                } else {
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: data.Texto
                      })
                }
                console.log(data);
            }
        });
    });
   
});
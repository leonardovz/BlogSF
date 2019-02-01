$(document).ready(function(e){
    $("#fupForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
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
    });
    
    //file type validation
    $("#file").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
            Swal.fire({
                title: 'Selecciona un formato valido de archivo(JPEG/JPG/PNG)',
                animation: false,
                customClass: 'animated tada'
              });
            $("#file").val('');
            return false;
        }
    });
});

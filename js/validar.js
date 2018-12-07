document.getElementById('inLogin').addEventListener('click', function(){
    validarLogin();
});

function validarLogin(){

    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    var correo =document.getElementById('inCorreoLog').value,
        password =document.getElementById('inPassLog').value;
    if(correo ==='' || password ===''){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Exixten Campos Vacios'
          })
    }else if(!emailRegex.test(correo)){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'El correo no esta ingresado de forma Correcta'
          })
    }

}
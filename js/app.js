$(document).ready(function() {
var config = {
    apiKey: "AIzaSyAo6vrnJkbsXowfcJxAjT7YEV9B8jBQi1I",
    authDomain: "sfuserlogin.firebaseapp.com",
    databaseURL: "https://sfuserlogin.firebaseio.com",
    projectId: "sfuserlogin",
    storageBucket: "sfuserlogin.appspot.com",
    messagingSenderId: "107805010346"
};
var activo;
firebase.initializeApp(config);
observador();

// if (document.getElementById('inLogin')) {
//     document.getElementById('inLogin').addEventListener('click', function(e){
//         e.preventDefault();
        
//     });
// }


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
    }else{
        ingreso();
    }

}
function registrar() {
    console.log("diste un click");
    var correo = document.getElementById('inCorreo').value;
    var password = document.getElementById('inPass').value;
    var nombre = document.getElementById('inNombre').value;
    var apPaterno = document.getElementById('inPaterno').value;
    var apMaterno = document.getElementById('inMaterno').value;
    
    // var fnac = document.getElementById('fnac').value;
    //Logueo en firebase
    registrarUsuario(correo,password);
    firebase.auth().createUserWithEmailAndPassword(correo, password)
    .then(function(){
        verificar();
    })
    
     .catch(function(error) {
         // Handle Errors here.
         var errorCode = error.code;
         var errorMessage = error.message;
         console.log(errorCode);
         console.log(errorMessage);
         // ...
     });
}
function ingreso(){
    var correo = document.getElementById('inCorreoLog').value;
    var password = document.getElementById('inPassLog').value;
    console.log(correo);
    console.log(password);
    if (!activo) {
        firebase.auth().signInWithEmailAndPassword(correo, password).then(function(){
            return true;
        }).catch(function(error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            console.log(errorCode);
            swal({
                type: 'error',
                title: 'Oops...',
                text: 'Usuario y Contraseña Incorrectos'
                })
            });
    } else {
        swal({
            type: 'error',
            title: 'Que pedo',
            text: 'Ya existe Sesión Activa'
            });
    }
      
}
function observador(){
    var usuario = null;
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
          console.log("Existe usuario Activo");
          // User is signed in.
          var displayName = user.displayName;
          var email = user.email;
          console.log("***************");
          console.log(user.email);
          console.log("***************");
          var emailVerified = user.emailVerified;
          var photoURL = user.photoURL;
          var isAnonymous = user.isAnonymous;
          var uid = user.uid;
          var providerData = user.providerData;
         usuario = user;
         activo=true;
         
        } else {
            activo=false;
        }
      });
      return usuario;
}


function alerta(user){
    var alerta = document.getElementById("contenedor_alertas");
    if(user.emailVerified){
        alerta.innerHTML = `
        <button type="button" class="btn btn-danger btn-lg btn-block rounded-0" onclick="cerrar();">Cerrar Sesión</button>
        `;
        document.getElementById("loguearse").remove();
    }else{
        alerta.innerHTML = `
        <button type="button" class="btn btn-warning btn-lg btn-block rounded-0">Verifica tu correo Electronico</button>
        `;
    }
}
function cerrar(){
    firebase.auth().signOut()
    .then(function(){
        console.log("Sesión cerrada con exito");
        activo=false;
    }).catch(function(error){
        console.log("No se puede Cerrar la Sesión "+error);
    })
}
function verificar(){
    var user = firebase.auth().currentUser;
    user.sendEmailVerification().then(function() {
        console.log("correo Enviado...");
    }).catch(function(error) {
        console.log(error);
    });
}

    $('#loginAdmin').on('submit',function(e){
        e.preventDefault();
        validarLogin();
        if(activo){
            var formulario = $(this).serializeArray();
            $.ajax({
                type: $(this).attr('method'),
                url: 'config/sesiones.php',
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
                    }
                    console.log(data);
                }
            });
        }
    });
    $('#loginAdmin').on('click',cerrar);


});
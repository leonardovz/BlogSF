var config = {
    apiKey: "AIzaSyAo6vrnJkbsXowfcJxAjT7YEV9B8jBQi1I",
    authDomain: "sfuserlogin.firebaseapp.com",
    databaseURL: "https://sfuserlogin.firebaseio.com",
    projectId: "sfuserlogin",
    storageBucket: "sfuserlogin.appspot.com",
    messagingSenderId: "107805010346"
};
firebase.initializeApp(config);
observador();

if (document.getElementById('inLogin')) {
    document.getElementById('inLogin').addEventListener('click', function(){
        validarLogin();
    });
}


function validarLogin(e){

    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    var correo =document.getElementById('inCorreoLog').value,
        password =document.getElementById('inPassLog').value;
    if(correo ==='' || password ===''){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'Exixten Campos Vacios'
          })
          e.preventDefault();
    }else if(!emailRegex.test(correo)){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'El correo no esta ingresado de forma Correcta'
          })
    }else{
        console.log("hay");
        ingreso();
        event
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
    // firebase.auth().createUserWithEmailAndPassword(correo, password)
    // .then(function(){
        
    //     verificar();
    // })
    
    // .catch(function(error) {
    //     // Handle Errors here.
    //     var errorCode = error.code;
    //     var errorMessage = error.message;
    //     console.log(errorCode);
    //     console.log(errorMessage);
    //     // ...
    // });
}
function ingreso(){
    console.log("diste un click");
    var correo = document.getElementById('inCorreoLog').value;
    var password = document.getElementById('inPassLog').value;
    console.log(correo);
    console.log(password);
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
      
}
function observador(){
    var usuario = null;
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
          console.log("Existe usuario Activo");
          alerta(user);
          // User is signed in.
          var displayName = user.displayName;
          var email = user.email;
          console.log("***************");
          console.log(user.emailVerified);
          console.log("***************");
          var emailVerified = user.emailVerified;
          var photoURL = user.photoURL;
          var isAnonymous = user.isAnonymous;
          var uid = user.uid;
          var providerData = user.providerData;
         usuario = user;
        } else {
          console.log("no exixte usuario Activo");
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
function registrarUsuario(correo,password){
    var datos = new FormData();
    datos.append('correo',correo);
    datos.append('password',password);
    // datos.append('usuario',id);
    // datos.append('usuario',tipo);
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST','config/sesiones.php',true);
    // Retorno de datos
    xhr.onload = function(){
        if(this.status === 200){
            console.log(xhr.responseText);
        }
    }
    xhr.send(datos);
}   
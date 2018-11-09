function registrar() {
    console.log("diste un click");
    var correo = document.getElementById('inCorreo').value;
    var password = document.getElementById('inPass').value;
    var nombre = document.getElementById('inNombre').value;
    var apPaterno = document.getElementById('inPaterno').value;
    var apMaterno = document.getElementById('inMaterno').value;
    // var fnac = document.getElementById('fnac').value;




    //Logueo en firebase
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
    console.log("diste un click");
    var correo = document.getElementById('inCorreo2').value;
    var password = document.getElementById('inPass2').value;

    firebase.auth().signInWithEmailAndPassword(correo, password).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // ...
      });
}
function observador(){
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
          
        } else {
          console.log("no exixte usuario Activo");
        }
      });
}
observador();
function alerta(user){
    var alerta = document.getElementById("contenedor_alertas");
    if(user.emailVerified){
        alerta.innerHTML = `
        <button type="button" class="btn btn-danger btn-lg btn-block rounded-0" onclick="cerrar();">Cerrar Sesión</button>
        `;
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
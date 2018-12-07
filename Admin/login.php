<?php require_once 'templates/header.php';?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>SF</b>ADMIN</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar Sesión</p>

    <form role="form" name= "loginAdmin-form" id="loginAdmin" action="insertar-admin.php" method="POST">
      <div class="form-group has-feedback">
        <input type="email" name="correo" class="form-control" placeholder="Correo">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
        <input type="text" name="loginAdmin" value="1" hidden>
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
    </form>

  </div>
</div>
<?php require_once 'templates/footer.php';?>
<script src="js/admin-ajax.js"></script>
</body>
</html>

<?php require_once 'templates/header.php';?>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LV</span>
      <span class="logo-lg"><b>Admin</b>LV</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Leonardo Vázquez</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Leonardo Vazquez - Desarrollador Web
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">salir</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left info">
          <p>Leonardo Vázquez</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Herramientas del Sistema</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i> <span>Estadisticas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Clientes</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Planes Activos</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Reservado</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Tablas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> Usuarios</a></li>
            <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Servicios</a></li>
            <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Membrecias</a></li>
            <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Anuncios</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Administradores</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="crear-admin.php"><i class="fa fa-circle-o"></i> Crear Administrador</a></li>
            <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Ver Administrador</a></li>
          </ul>
        </li>
        <li>
          <a href="../mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Correos</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Servicios
        <small>Revisar el estado de los servicios</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Servicio</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" name= "crearAdmin-form" id="crearAdmin" action="insertar-admin.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="inNombre">Nombre</label>
                  <input type="text" class="form-control" name="inNombre" id="inNombre" placeholder="Ingresa tu nombre">
                </div>
                <div class="form-group">
                  <label for="inApellidos">Apellidos</label>
                  <input type="text" class="form-control" name="inApellidos" id="inApellidos" placeholder="Ingresa tu Apellidos">
                </div>
                <div class="form-group">
                  <label for="inCorreo">Correo</label>
                  <input type="email" class="form-control" name="inCorreo" id="inCorreo" placeholder="Ingresa tu Correo">
                </div>
                <div class="form-group">
                  <label for="inPassword">Contraseña</label>
                  <input type="password" class="form-control"name="inPassword"  id="inPassword" placeholder="Contraseña">
                </div>
                <div class="form-group">
                  <label>Tipo de Usuario</label>
                    <select name="tipoUser" id="tipoUser" class="form-control select2" style="width: 100%;">
                      <option value= "1" selected="selected">Administrador</option>
                      <option value= "2">Privado</option>
                      <option value= "3">Premium</option>
                      <option value= "4">Standart</option>
                      <option value= "5">Basico</option>
                    </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
               <input type="text" hidden name="crearAdmin" value="1">
                <button id="EnviarFormulario" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabla de Servicios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Imagen</th>  
                  <th>Acción</th>  
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td>Win 95+</td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
  </div>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php require_once 'templates/footer.php';?>
<!-- <script src="js/admin-ajax.js"></script> -->
</body>
</html>

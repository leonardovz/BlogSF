<?php require_once 'componentes/funciones.php';
	  require_once 'config/rutas.php';
	  $ruta = ruta();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>San Francisco de Asis</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Aquí encontraras los servicios que ofrece San Francisco se Asís, municipio de Atotonilco el alto, Jalisco. Entra y encuentra lo que necesitas">
	<meta name="keywords" content="Trabajos y Servicios, Construcción, Estilistas en San Francisco,Albañiles, Troqueros, Venta de Terrenos">
	
	<link rel="icon" type="image/png" href="<?php echo $ruta?>images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>fonts/linearicons-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>vendor/MagnificPopup/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>css/estilos.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $ruta?>vendor/sweetalert/sweetalert2.min.css">
	<script src="<?php echo $ruta?>vendor/jquery/jquery-3.2.1.min.js"></script>

</head>
<body class="animsition">
	
	<header class="header-v3">
		<!-- Header desktop -->
		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop p-l-45">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="<?php echo $ruta?>images/icons/logo-02.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="<?php echo $ruta . $links_contenido['index'];?>">Inicio</a>
							</li>
							<li>
								<a href="<?php echo $ruta . $links_contenido['blog'];?>">Blog</a>
							</li>

							<li>
								<a href="<?php echo $ruta . $links_contenido['servicios'];?>">Servicios</a>
							</li>

							<li>
								<a href="<?php echo $ruta . $links_contenido['compras'];?>">Planes</a>
							</li>

							<li>
								<a href="<?php echo $ruta . $links_contenido['acercade'];?>">¿Qué Somos?</a>
							</li>

							<li>
								<a href="<?php echo $ruta . $links_contenido['contacto'];?>">Contactanos</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m h-full">							
						<div class="flex-c-m h-full p-lr-19">
							<div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-11 js-show-sidebar">
								<i class="zmdi zmdi-menu"></i>
							</div>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="<?php echo $ruta . $links_contenido['index'];?>"><img src="<?php echo $ruta?>images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>


			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li id="loguearse">
					<a href="<?php echo $ruta . $links_contenido['login'];?>">Iniciar Sesión</a>
				</li>
				<li>
					<a href="<?php echo $ruta . $links_contenido['index'];?>">Inicio</a>
				</li>
				<li>
					<a href="<?php echo $ruta . $links_contenido['blog'];?>">Blog</a>
				</li>

				<li>
					<a href="<?php echo $ruta . $links_contenido['servicios'];?>">Servicios</a>
				</li>

				<li>
					<a href="<?php echo $ruta . $links_contenido['compras'];?>">Planes</a>
				</li>

				<li>
					<a href="<?php echo $ruta . $links_contenido['acercade'];?>">¿Qué Somos?</a>
				</li>

				<li>
					<a href="<?php echo $ruta . $links_contenido['contacto'];?>">Contactanos</a>
				</li>
				<li id="loguearse">
					<a href="<?php echo $ruta . $links_contenido['perfil'];?>">Perfil</a>
				</li>
				<li id = "contenedor_alertas">

				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<button class="flex-c-m btn-hide-modal-search trans-04">
				<i class="zmdi zmdi-close"></i>
			</button>

			<form class="container-search-header">
				<div class="wrap-search-header">
					<input class="plh0" type="text" name="search" placeholder="Search...">

					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
				</div>
			</form>
		</div>
	</header>

	<?php Sidebar($links_contenido, $ruta);?>
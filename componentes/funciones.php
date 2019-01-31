<?php 
	$links_contenido = array(
		'index' => '',
		'blog' => 'blog',
		'publicaciones' => 'Publicaciones',
		'servicios' => 'Servicios',
		'serviciosDetalles' => 'Servicio',
		'compras' => 'Compras',
		'planes' => 'planes',
		'perfil' => 'Perfil',
		'login' => 'Login',
		'registro' => 'Registro',
		'acercade' => 'Informacion',
		'contacto' => 'Contacto',
		'cerrar' => 'cerrar'
	);
?>

<?php function Sidebar($links_contenido, $ruta){ ?>
    <aside class="wrap-sidebar js-sidebar">
		<div class="s-full js-hide-sidebar"></div>

		<div class="sidebar flex-col-l p-t-22 p-b-25">
			<div class="flex-r w-full p-b-30 p-r-27">
				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
				<ul class="sidebar-link w-full">
					
					<li id="loguearse" class="ltext-105 m-b-30">
						<?php if (!isset($_SESSION['validarSesion'])) {?>
						<a href="<?php echo $ruta . $links_contenido['login'];?>"><button type="button" class="btn btn-outline-dark btn-lg btn-block" >Iniciar Sesión</button></a>
						<?php } ?>
					</li>
					<li class="p-b-13">
						<a href="<?php echo $ruta . $links_contenido['index'];?>" class="stext-102 cl2 hov-cl1 trans-04">
							Inicio
						</a>
					</li>
					<li class="p-b-13">
						<a href="<?php echo $ruta . $links_contenido['blog'];?>" class="stext-102 cl2 hov-cl1 trans-04">
							Blog
						</a>
					</li>

					<li class="p-b-13">
						<a href="<?php echo $ruta . $links_contenido['perfil'];?>/" class="stext-102 cl2 hov-cl1 trans-04">
							Mi Cuenta
						</a>
					</li>

					<li class="p-b-13">
						<a href="<?php echo $ruta . $links_contenido['compras'];?>" class="stext-102 cl2 hov-cl1 trans-04">
							Planes
						</a>
					</li>

					<li class="p-b-13">
						<a href="<?php echo $ruta . $links_contenido['acercade'];?>" class="stext-102 cl2 hov-cl1 trans-04">
							¿Qué Somos?
						</a>
					</li>

					<li class="p-b-13">
						<a href="<?php echo $ruta . $links_contenido['contacto'];?>" class="stext-102 cl2 hov-cl1 trans-04">
							Contactanos
						</a>
					</li>
					<?php if (isset($_SESSION['validarSesion'])) {?>
					<li class="p-b-13">
						<a href="<?php echo $ruta . $links_contenido['cerrar'];?>" class="stext-102 cl2 hov-cl1 trans-04 text-danger">
							Cerrar Sesión
						</a>
					</li>
					<?php } ?>
					<li id = "contenedor_alertas" class="p-b-13">
						
					</li>
				</ul>

				<div class="sidebar-gallery w-full p-tb-30">
					<span class="mtext-101 cl5">
						Patrocinadores
					</span>

					<div class="flex-w flex-sb p-t-36 gallery-lb">
						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="images/gallery-01.jpg" data-lightbox="gallery" 
							style="background-image: url('images/gallery-01.jpg');"></a>
						</div>

						<!-- item gallery sidebar -->
						<div class="wrap-item-gallery m-b-10">
							<a class="item-gallery bg-img1" href="images/gallery-02.jpg" data-lightbox="gallery" 
							style="background-image: url('images/gallery-02.jpg');"></a>
						</div>
					</div>
				</div>

				<div class="sidebar-gallery w-full">
					<span class="mtext-101 cl5">
						Información
					</span>

					<p class="stext-108 cl6 p-t-27">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur maximus vulputate hendrerit. Praesent faucibus erat vitae rutrum gravida. Vestibulum tempus mi enim, in molestie sem fermentum quis. 
					</p>
				</div>
			</div>
		</div>
	</aside>
<?php } ?>

<?php 
	require_once 'config/config.php';
	require_once 'Admin/functions.php';

	$conexion = conexion($bd_config);
	require_once 'views/header.php';
	if ($rutas[1]!='') {

		$perfil = obtenerPerfil($conexion,$rutas[1]);
	} else {
		$rutas[1]=1;
		$perfil = obtenerPerfil($conexion,$rutas[1]);	
	}

	$sesion= false;
	
	
?>

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?php echo $ruta; ?>images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			<?php echo $perfil['nombreServicio'];?>
		</h2>
	</section>
	<?php if($sesion){?>
	<section class="bg-img1 txt-center p-t-30" >
		<h2 class="ltext-105 c9 txt-center">
			<div class="p-t-2">
				<h4 class="fs-50">
						<?php echo $perfil['rgNombre']?>
					<span class="style_profile">
						<img src="<?php echo $ruta;?>images/icons/<?php echo $perfil['rgImagen'];?>" style="width:10vh;">
					</span>
				</h4>
			</div>
		</h2>
	</section>
	<?php } ?>

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="<?php echo $ruta;?>" class="stext-109 cl8 hov-cl1 trans-04">
				Inicio
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			<a href="<?php echo $ruta . $links_contenido['servicios']; ?>" class="stext-109 cl8 hov-cl1 trans-04">
				Servicios
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			<a href="<?php echo $ruta . $links_contenido['serviciosDetalles'] ."/". $perfil['id']  ;?>" class="stext-109 cl8 hov-cl1 trans-04">
				<?php echo $perfil['servNombre'];?>
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Datos del Perfil
			</span>
		</div>
	</div>
	<!-- Content page -->
	<section class="bg0 p-t-52 p-b-20">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-lg-8 p-b-80">
					<?php if ($sesion) {?>
					<div class="p-r-45 p-r-0-lg">
						<ul class="nav nav-pills mb-3  stext-115" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Publicaciones</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Publicar</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contacto</a>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active p-t-45" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><?php require_once 'Perfil/publicaciones.php';?></div>
							<div class="tab-pane fade stext-115" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><?php require_once 'Perfil/publicar.php';?></div>	
							<div class="tab-pane fade " id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><?php require_once 'Perfil/contacto.php'; ?></div>
						</div>
					</div>
					<?php } else{ ?>
						<?php require_once 'Perfil/contacto.php'; ?>
						<h4 class="m-t-15 p-b-20 text-center fs-30">Publicaciones</h4>
						<?php require_once 'Perfil/publicaciones.php'; ?>
					<?php }?>
				</div>

				<div class="col-md-5 col-lg-4 p-b-80 float-right" >
					<div class="side-menu">
                        <div class="p-t-2">
							<h4 class="mtext-112 cl2 p-b-33">
								<?php echo $perfil['nombreServicio']?>
							</h4>

							<ul>
								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Noticias
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Mejor Calificados
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Pagar membresía
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Publicar
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                        Configurar Cuenta
									</a>
								</li>
							</ul>
						</div>

						<div class="p-t-65">
							<h4 class="mtext-112 cl2 p-b-33">
								ADS
							</h4>

							<ul>
								<?php for ($i=0; $i < 4; $i++) :?>
								<li class="flex-w flex-t p-b-2">
									<div class="col p-b-30 m-lr-auto">
										<!-- Block1 -->
										<div class="block1 wrap-pic-w">
											<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?php echo $ruta;?>images/bg-02.jpg');"></section>
											<a href="<?php echo $ruta . $links_contenido['serviciosDetalles'] .'/';?>" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
												<div class="block1-txt-child1 flex-col-l">
													<span class="block1-name ltext-102 trans-04 p-b-8">
														Estilista
													</span>

													<span class="block1-info stext-102 trans-04">
														Relacionados
													</span>
												</div>

												<div class="block1-txt-child2 p-b-4 trans-05">
													<div class="block1-link stext-101 cl0 trans-09">
														Información...
													</div>
												</div>
											</a>
										</div>
									</div>
								</li>
								<?php endfor; ?>
							</ul>
						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-20">
								Publicaciones
							</h4>

							<ul>
								<?php $fechaP =fechaPosts($conexion, $perfil['idUsuario']);
								for ($i=0; $i < sizeof($fechaP); $i++) {
									$fecha =fechaPub($fechaP[$i]['fecha']);?>
								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											<?php echo $fecha[2] . " de " . obtenerMes($fecha[1]) . " de " . $fecha[0];?>
										</span>
									</a>
								</li>
                                <?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Related Products -->
	<section class="sec-relate-product bg0 p-t-45 p-b-105">
		<div class="container">
			<div class="p-b-45">
				<h3 class="ltext-106 cl5 txt-center">
					Productos Relacionados
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					<?php for ($i=0; $i < 7 ; $i++) :?>
						<div class="col-6 col-sm-6 col-md-4 col-lg-4 p-b-10 isotope-item women">
							<!-- Block2 -->
							<div class="p-b-10">
								<a href="<?php echo $ruta . $links_contenido['serviciosDetalles'].'/'.$i; ?>" class="hov-img0 how-pos5-parent">
									<img src="<?php echo $ruta;?>images/blog-04.jpg" alt="IMG-BLOG">
								</a>

								<div class="p-t-15">
									<h4 class="p-b-5">
										<a href="<?php echo $ruta . $links_contenido['serviciosDetalles'] .'/'.$i; ?>" class="ltext-95 cl2 hov-cl1 trans-04">
											Construcción
										</a>
									</h4>
								</div>
							</div>
						</div>
					<?php endfor;?>
				</div>
			</div>
		</div>
	</section>
    <div class="container-fluid m-0 p-0">
		<div class="row">
            <div class="col-md">
            <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m12!1m3!1d3734.7656194560773!2d-102.56518453087857!3d20.597627082603594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m9!3e2!4m3!3m2!1d20.597445399999998!2d-102.5641849!4m3!3m2!1d20.6009317!2d-102.56357609999999!5e0!3m2!1ses-419!2smx!4v1541434715397" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
		</div>
	</div>
	
	<?php require 'views/footer.php'; ?>
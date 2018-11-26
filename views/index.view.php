<?php require 'views/header.php';?>

	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1 rs2-slick1">
			<div class="slick1">
				<div class="item-slick1 bg-overlay1" style="background-image: url(images/slide-05.jpg);" data-thumb="images/thumb-01.jpg" data-caption="Registrate">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									Blog
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
									Noticias y Promociones
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="<?php echo $links_contenido['blog'];?>" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
									Visitar
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1 bg-overlay1" style="background-image: url(images/slide-06.jpg);" data-thumb="images/thumb-02.jpg" data-caption="Blog">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									¿Tienes Algun negocio? 
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
									¡Registrate Ahora!
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="<?php echo $links_contenido['registro'];?>" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
									Registrarme
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1 bg-overlay1" style="background-image: url(images/slide-07.jpg);" data-thumb="images/thumb-03.jpg" data-caption="Servicios">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									Buscas Algun Servicio
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
									Ven y encuentralo
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="<?php echo $links_contenido['servicios'];?>" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
									Buscar
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="wrap-slick1-dots p-lr-10"></div>
		</div>
	</section>

	
	<!-- Banner -->
	<div class="sec-banner bg0 p-t-95 p-b-55">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="images/banner-04.jpg" alt="IMG-BANNER">

						<a href="<?php echo $links_contenido['blog'];?>" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Blog
								</span>

								<span class="block1-info stext-102 trans-04">
									Nuevas Publicaciones
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Ir al Blog
								</div>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-md-6 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="images/banner-05.jpg" alt="IMG-BANNER">

						<a href="<?php echo $links_contenido['servicios'];?>" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Servicios
								</span>

								<span class="block1-info stext-102 trans-04">
									Trabajos y Servicios
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Ir al Apartado
								</div>
							</div>
						</a>
					</div>
				</div>
				<?php 
				$servicios = searchService($conexion);
				for ($i=0; $i < 3; $i++):?>
					<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img src="Users_images/servicios/<?php echo $servicios[$i]['imagen'];?>" alt="IMG-BANNER">

							<a href="<?php echo $links_contenido['serviciosDetalles'];?>?result=<?php echo $servicios[$i]['nombre'];?>" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
								<div class="block1-txt-child1 flex-col-l">
									<span class="block1-name ltext-102 trans-04 p-b-8">
										<?php echo $servicios[$i]['nombre'];?>
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
				<?php endfor?>
			</div>
		</div>
	</div>


	<!-- Articulos (BLOG) -->
	<section class="bg0 p-t-23 p-b-60">
		<div class="container">
			<div class="p-b-55">
				<h3 class="ltext-103 cl5">
					Articulos más Recientes
				</h3>
			</div>
			<div class="row isotope-grid">
				
				<?php  
				$post = searchPost($conexion);
				if (sizeof($post)>0) {
				for ($i = 0; $i < sizeof($post) ;$i++) {
				$fecha =fechaPub($post[$i]['fecha']);?>
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
						<!-- Block2 -->
						<div class="p-b-63">
								<a href="<?php echo $links_contenido['publicaciones'] . '?id='. $post[$i]['id'];?>" class="hov-img0 how-pos5-parent">
									<img src="Users_images/usuarios/<?php echo $post[$i]['imagen'];?>" alt="IMG-BLOG">

									<div class="flex-col-c-m size-123 bg9 how-pos5">
										<span class="ltext-107 cl2 txt-center">
											<?php echo $fecha[2];?>
										</span>

										<span class="stext-109 cl3 txt-center">
										<?php echo $fecha[1] .'-'. $fecha[0];?>
										</span>
									</div>
								</a>

								<div class="p-t-32">
									<h4 class="p-b-15">
										<a href="<?php echo $links_contenido['publicaciones'] . '?id='. $post[$i]['id'];?>" class="ltext-108 cl2 hov-cl1 trans-04">
											<?php echo $post[$i]['titulo'];?>
										</a>
									</h4>

									<div class="flex-w flex-sb-m p-t-18">
										<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
											<span>
												<span class="cl4">By</span> <?php echo $post[$i]['nombre'];?>
												<span class="cl12 m-l-4 m-r-6">|</span>
											</span>

											<span>
												<?php echo $post[$i]['apellidos'];?>
											</span>
										</span>

										<a href="<?php echo $links_contenido['publicaciones'] . '?id='. $post[$i]['id'];?>" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
											Continua Leyendo...
											<i class="fas fa-book-open"></i>
										</a>
									</div>
								</div>
							</div>
					</div>
				<?php }}else{ ?>
					<div class="alert alert-danger" role="alert">
						No se encuentra ningun Servicio Registrado aún
					</div>
				<?php } ?>
				
				
			</div>
		</div>
	</section>
	<!-- Perfiles -->
	<section class="bg0 p-t-23 p-b-130">
		<div class="container">
			<div class="p-b-55">
				<h3 class="ltext-103 cl5">
					Servicios Más Buscados
				</h3>
			</div>
			<div class="row isotope-grid">
				<?php 
				$servicios= searchUserService($conexion);
				if (sizeof($servicios)>0) {
				for ($i=0; $i < sizeof($servicios) && $i< 8; $i++){
					$fecha =fechaPub($servicios[$i]['fechaRegistro']);?>
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
						<!-- Block2 -->
						<div class="p-b-63">
								<a href="<?php echo $links_contenido['perfil']. "?id=".$servicios[$i]['idUsuario'];?>" class="hov-img0 how-pos5-parent">
									<img src="Users_images/usuarios/<?php echo $servicios[$i]['imagenServicio'];?>" alt="IMG-BLOG">

									<div class="flex-col-c-m size-123 bg9 how-pos5">
										<span class="ltext-107 cl2 txt-center">
											<?php echo $fecha[2];?>
										</span>

										<span class="stext-109 cl3 txt-center">
											<?php echo $fecha[1] .'-'. $fecha[0];?>
										</span>
									</div>
								</a>

								<div class="p-t-16">
									<h4 class="p-b-6">
										<a href="<?php echo $links_contenido['perfil']. "?id=".$servicios[$i]['idUsuario'];?>" class="ltext-96 cl2 hov-cl1 trans-04">
											<?php echo $servicios[$i]['servicio'];?>
										</a>
									</h4>

									<div class="flex-w flex-sb-m p-t-8">
										<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
											<span>
												<?php echo $servicios[$i]['nameU'] . " " . $servicios[$i]['apellidos'];?>
											</span>
										</span>
										
										<a href="<?php echo $links_contenido['perfil']. "?id=".$servicios[$i]['idUsuario'];?>" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
											Ver Información
											<i class="fa fa-long-arrow-right m-l-9"></i>
										</a>
									</div>
								</div>
							</div>
					</div>
				<?php }
				}else{?>
					<div class="alert alert-danger" role="alert">
						No se encuentra ningun Servicio Registrado aún
					</div>
				<?php }?>
			</div>
		</div>
	</section>
	<?php require 'views/footer.php';?>
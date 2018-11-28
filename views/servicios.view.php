<?php require 'views/header.php';?>

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Servicios
		</h2>
	</section>
	
		<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="<?php echo $links_contenido['index'];?>" class="stext-109 cl8 hov-cl1 trans-04">
				Inicio
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Servicios
			</span>
		</div>
	</div>
	<!-- Content page -->
	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="sec-banner bg0 p-t-95 p-b-55">
						<div class="container-fluid">
							<div class="row">

								<?php  foreach ($servicios as $servicio) :?>
								<div class="col-md-6 col-lg-6 p-b-30 m-lr-auto">
									<!-- Block1 -->
									<div class="block1 wrap-pic-w">
										<img src="Users_images/servicios/<?php echo $servicio['imagen'];?>" alt="IMG-BANNER">

										<a href="<?php echo $links_contenido['serviciosDetalles'];?>?search=<?php echo $servicio['id'];?>" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
											<div class="block1-txt-child1 flex-col-l">
												<span class="block1-name ltext-102 trans-04 p-b-8">
													<?php echo $servicio['nombre'];?>
												</span>

												<span class="block1-info stext-102 trans-04">
													Encontrar
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
								<?php endforeach;?>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80 float-right" >
					<div class="side-menu">
						<div class="bor17 of-hidden pos-relative">
							<input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Search">

							<button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>
						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-33">
								Más Buscados
							</h4>

							<ul>
								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Comida
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Construcción
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Estetica
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Maquinaria
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                                        Fotografía
									</a>
								</li>
							</ul>
						</div>

						<div class="p-t-65">
							<h4 class="mtext-112 cl2 p-b-33">
								ADS
							</h4>

							<ul>
								<li class="flex-w flex-t p-b-2">
                                    <div class="p-b-10">
                                        <a href="blog-detail.html" class="hov-img0 how-pos5-parent">
                                            <img src="images/blog-04.jpg" alt="IMG-BLOG">
                                        </a>
                                    </div>
								</li>
                                <li class="flex-w flex-t p-b-2">
                                    <div class="p-b-10">
                                        <a href="blog-detail.html" class="hov-img0 how-pos5-parent">
                                            <img src="images/blog-04.jpg" alt="IMG-BLOG">
                                        </a>
                                    </div>
								</li>
                                <li class="flex-w flex-t p-b-2">
                                    <div class="p-b-10">
                                        <a href="blog-detail.html" class="hov-img0 how-pos5-parent">
                                            <img src="images/blog-04.jpg" alt="IMG-BLOG">
                                        </a>
                                    </div>
								</li>
                                <li class="flex-w flex-t p-b-2">
                                    <div class="p-b-10">
                                        <a href="blog-detail.html" class="hov-img0 how-pos5-parent">
                                            <img src="images/blog-04.jpg" alt="IMG-BLOG">
                                        </a>
                                    </div>
								</li>
							</ul>
						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-20">
								Servicios
							</h4>

							<ul>
								<?php $serviciosC = servicioUnico($conexion);
								echo json_encode($serviciosC); ?>
                                <?php for ($i=0; $i < sizeof($serviciosC); $i++) {?>
								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
										
										</span>

										<span>
											(<?php echo $i + 2; ?>)
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
	
		
<?php require 'views/footer.php'; ?>
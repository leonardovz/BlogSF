<?php require 'views/header.php';?>

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Resultados
		</h2>
	</section>


	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="<?php echo $links_contenido['index'];?>" class="stext-109 cl8 hov-cl1 trans-04">
				Inicio
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="<?php echo $links_contenido['servicios'] ;?>" class="stext-109 cl8 hov-cl1 trans-04">
				Servicios
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Titulo de la Busqueda
			</span>
		</div>
	</div>


	<!-- Content page -->
	<section class="bg0 p-t-52 p-b-20">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!--  -->
						<div class="row isotope-grid">
                            <?php for ($i=0; $i < 12; $i++) { ?>
                            <div class="col-sm-12 col-md-6 col-lg-6 p-b-10 isotope-item women">
                                <!-- Block2 -->
                                <div class="p-b-10">
                                    <a href="<?php echo $links_contenido['perfil'] .'?id='.$i;?>" class="hov-img0 how-pos5-parent">
                                        <img src="images/blog-04.jpg" alt="IMG-BLOG">
                                    </a>

                                    <div class="p-t-15">
                                        <h4 class="p-b-5">
                                            <span class="flex-w flex-m stext-111 cl2 p-b-19">
												<span>
													Construcción  
													<span class="cl12 m-l-4 m-r-6">|</span>
												</span>

												<span>
													22 Jun, 2018
													<span class="cl12 m-l-4 m-r-6">|</span>
												</span>

												<span>
													Ramon Vazquez Carrillo
													<span class="cl12 m-l-4 m-r-6">|</span>
												</span>
												<span><a href="<?php echo $links_contenido['perfil'] .'?id='.$i;?>"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></span>
											</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
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
								<?php for ($i=0; $i < 3 ; $i++) :?>
								<li class="flex-w flex-t p-b-2">
                                    <div class="p-b-10">
                                        <a href="<?php echo $links_contenido['publicaciones'] .'?idPub='.$i;?>" class="hov-img0 how-pos5-parent">
                                            <img src="images/blog-04.jpg" alt="IMG-BLOG">
                                        </a>
                                    </div>
								</li>
								<?php endfor;?>
							</ul>
						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-20">
								Servicios
							</h4>

							<ul>
                                <?php for ($i=0; $i < 10; $i++) :?>
								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											Publicadores  <?php echo $i;?>
										</span>

										<span>
											(<?php echo $i + 2; ?>)
										</span>
									</a>
								</li>
                                <?php endfor; ?>
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
								<a href="<?php echo $links_contenido['serviciosDetalles'] .'?Search='.$i;?>" class="hov-img0 how-pos5-parent">
									<img src="images/blog-04.jpg" alt="IMG-BLOG">
								</a>

								<div class="p-t-15">
									<h4 class="p-b-5">
										<a href="<?php echo $links_contenido['serviciosDetalles'] .'?Search='.$i;?>" class="ltext-95 cl2 hov-cl1 trans-04">
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
	
	<?php require 'views/footer.php'; ?>
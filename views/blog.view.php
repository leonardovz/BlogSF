<?php require 'views/header.php';?>


	
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Blog
		</h2>
	</section>

	<!-- Content page -->
	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!-- item blog -->
						<?php 
							$publicacion = mostrarPost($conexion);
							for ($i=0; $i <sizeof($publicacion) ; $i++){
							$fecha =fechaPub($publicacion[$i]['fecha']);
							?>
							<div class="p-b-63">
								<a href="<?php echo $links_contenido['publicaciones'] .'?idPub='.$publicacion[$i]['idPub'];?>" class="hov-img0 how-pos5-parent">
									<img src="Users_images/usuarios/<?php echo $publicacion[$i]['imagen'];?>" alt="IMG-BLOG">

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
										<a href="<?php echo $links_contenido['publicaciones'] .'?idPub='.$publicacion[$i]['idPub'];?>" class="ltext-108 cl2 hov-cl1 trans-04">
											<?php echo $publicacion[$i]['titulo'];?>
										</a>
									</h4>

									<p class="stext-117 cl6">
										<?php $texto= $publicacion[$i]['descripcion'];
												$concatenado ="";
												for ($j=0; $j < strlen($texto) && $j<100; $j++) { 
													$concatenado .= $texto[$j];
												}
												echo $concatenado . " ... ";
											?>

									</p>

									<div class="flex-w flex-sb-m p-t-18">
										<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
											<span>
												<span class="cl4">By</span> <?php echo $publicacion[$i]['nameU'];?>  
												<span class="cl12 m-l-4 m-r-6">|</span>
											</span>

											<span>
												<?php echo $publicacion[$i]['apellidos'];?> 
												<span class="cl12 m-l-4 m-r-6">|</span>
											</span>

											<span>
												<?php echo $publicacion[$i]['servicio'];?> 
											</span>
										</span>

										<a href="<?php echo $links_contenido['publicaciones'] .'?idPub='.$publicacion[$i]['idPub'];?>" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
											Ver publicación Completa

											<i class="fa fa-long-arrow-right m-l-9"></i>
										</a>
									</div>
								</div>
							</div>
						<?php }?>

						<!-- Pagination -->
						<div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
							<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
								1
							</a>

							<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7">
								2
							</a>
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
										Estética
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
                                <?php for ($i=0; $i < 10; $i++) :?>
								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											Numero de Sercicio <?php echo $i;?>
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
	
<?php require 'views/footer.php';?>
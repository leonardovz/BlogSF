<?php 
require_once 'config/config.php';
require_once 'Admin/functions.php';

$conexion = conexion($bd_config);
require 'views/header.php';

?>

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?php echo $ruta;?>images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			<?php 
				$titulo = obtenerServicios($conexion,$rutas[1]);
				if (false) {
					echo $titulo['nombre'];
				} else {
					echo "Servicios";
				}
				
				?>
		</h2>
	</section>


	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="<?php echo $ruta . $links_contenido['index'];?>" class="stext-109 cl8 hov-cl1 trans-04">
				Inicio
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="<?php echo $ruta . $links_contenido['servicios'] ;?>" class="stext-109 cl8 hov-cl1 trans-04">
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
						<?php 
							$publicacion = obtenerServicios($conexion,$rutas[1]);
							if(sizeof($publicacion)>0){
							for ($i=0; $i <sizeof($publicacion) ; $i++){
							$fecha =fechaPub($publicacion[$i]['fechaRegistro']);
							?>
                            <div class="col-sm-12 col-md-6 col-lg-6 p-b-10 isotope-item women">
                                <!-- Block2 -->
                                <div class="p-b-10">
                                    <a href="<?php echo $ruta .$links_contenido['perfil'] .'/'.$publicacion[$i]['idUsuario'];?>" class="hov-img0 how-pos5-parent">
                                        <img src="<?php echo $ruta . 'Users_images/usuarios/'.$publicacion[$i]['imagenServicio'];?>" alt="IMG-BLOG">
                                    </a>

                                    <div class="p-t-15">
                                        <h4 class="p-b-5">
                                            <span class="flex-w flex-m stext-111 cl2 p-b-19">
												<span>
													<?php echo $publicacion[$i]['servicio'];?>
													<span class="cl12 m-l-4 m-r-6">|</span>
												</span>

												<span>
													<?php echo $fecha[2] . " de " . obtenerMes($fecha[1]) . " de " . $fecha[0];?>
													<span class="cl12 m-l-4 m-r-6">|</span>
												</span>

												<span>
													<?php echo $publicacion[$i]['nameU'] . ", " .$publicacion[$i]['apellidos'];?>
													<span class="cl12 m-l-4 m-r-6">|</span>
												</span>
												<span><a href="<?php echo $ruta .$links_contenido['perfil'] .'/' .$publicacion[$i]['idUsuario'];?>"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></span>
											</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <?php } }else{?>
								<div class="alert alert-success m-auto" role="alert">
									Aún no se encuentran servicios registrados. <br> </a> Si te gustaria registrar tu servicio por favor contactanos
								</div>
							<?php }?>
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
                                        <a href="<?php echo $ruta .$links_contenido['publicaciones'] .'/'.$i;?>" class="hov-img0 how-pos5-parent">
                                            <img src="<?php echo $ruta;?>images/blog-04.jpg" alt="IMG-BLOG">
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
								<?php $serviciosC = searchService($conexion);?>
                                <?php for ($i=0; $i < sizeof($serviciosC); $i++) {
									$contador=servicioUnico($conexion,$serviciosC[$i]['id']); ?>
								<li class="p-b-7">
									<a href="<?php echo $ruta .$links_contenido['serviciosDetalles'] .'/'.$serviciosC[$i]['id'];?>" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											<?php echo $serviciosC[$i]['nombre'];?>
										</span>

										<span>
											( <?php echo  ' ' .$contador[0] . ' '; ?> )
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
								<a href="<?php echo $ruta .$links_contenido['serviciosDetalles'] .'/'.$i;?>" class="hov-img0 how-pos5-parent">
									<img src="<?php echo $ruta;?>images/blog-04.jpg" alt="IMG-BLOG">
								</a>

								<div class="p-t-15">
									<h4 class="p-b-5">
										<a href="<?php echo $ruta .$links_contenido['serviciosDetalles'] .'/'.$i;?>" class="ltext-95 cl2 hov-cl1 trans-04">
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
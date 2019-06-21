<?php 
require_once 'config/config.php';
require_once 'config/functions.php';

$conexion = conexion($bd_config);

require 'templates/header.php';
if (isset($rutas[1])) {
	if($rutas[1]!="" && $rutas[1]>0){
		$publicacion = obtenerPostId($conexion,$rutas[1]);
	}else{
		$publicacion="";
	}
}else{
	$publicacion="";
}
?>

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?php echo $ruta;?>images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Detalles
		</h2>
	</section>

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="<?php echo $ruta . $links_contenido['index'];?>" class="stext-109 cl8 hov-cl1 trans-04">
				Inicio
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="<?php echo $ruta . $links_contenido['blog'];?>" class="stext-109 cl8 hov-cl1 trans-04">
				Blog
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			<?php if ($publicacion!='') {?>
				<a href="<?php echo $ruta . $links_contenido['perfil'] .'/'. $publicacion['idUsuario'];?>" class="stext-109 cl8 hov-cl1 trans-04">
					Perfil
					<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
				</a>
				<span class="stext-109 cl4">
					Titulo de la publicación
				</span>
			<?php } ?>
			
		</div>
	</div>

	<?php if ($publicacion!='') {$fecha =fechaPub($publicacion['fecha']);} ?>
	<!-- Content page -->
	<section class="bg0 p-t-52 p-b-20">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<?php if ($publicacion!='') {?>
						<div class="p-r-45 p-r-0-lg">
							<!--  -->
							<div class="wrap-pic-w how-pos5-parent">
								<img src="<?php echo $ruta;?>Users_images/publicacion/<?php echo $publicacion['imagen'];?>" alt="IMG-BLOG">

								<div class="flex-col-c-m size-123 bg9 how-pos5">
									<span class="ltext-107 cl2 txt-center">
										<?php echo $fecha[2];?>
									</span>

									<span class="stext-109 cl3 txt-center">
										<?php echo $fecha[1] .'-'. $fecha[0];?>
									</span>
								</div>
							</div>

							<div class="p-t-32">
								<span class="flex-w flex-m stext-111 cl2 p-b-19">
									<span>
										<span class="cl4">By</span> <?php echo $publicacion['nameU'] .' '. $publicacion['apellidos'] ;?>  
										<span class="cl12 m-l-4 m-r-6">|</span>
									</span>

									<span>
										<?php echo $fecha[2] . " de " .obtenerMes($fecha[1]) . " de ". $fecha[0];?>
										<span class="cl12 m-l-4 m-r-6">|</span>
									</span>

									<span>
										<?php echo $publicacion['servicio'];?>
										<span class="cl12 m-l-4 m-r-6">|</span>
									</span>
								</span>

								<h4 class="ltext-109 cl2 p-b-28">
									<?php echo $publicacion['titulo'];?>
								</h4>

								<p class="stext-117 cl6 p-b-26">
									<?php echo $publicacion['descripcion'];?>
								</p>
							</div>

						</div>
					<?php }else{?>
						<div class="alert alert-danger" role="alert">
							Revisa la publicacíon puede estar bloqueada o te estas direccionando mal
						</div>
					<?php }?>
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
                                            <img src="<?php echo $ruta;?>images/blog-04.jpg" alt="IMG-BLOG">
                                        </a>
                                    </div>
								</li>
                                <li class="flex-w flex-t p-b-2">
                                    <div class="p-b-10">
                                        <a href="blog-detail.html" class="hov-img0 how-pos5-parent">
                                            <img src="<?php echo $ruta;?>images/blog-04.jpg" alt="IMG-BLOG">
                                        </a>
                                    </div>
								</li>
                                <li class="flex-w flex-t p-b-2">
                                    <div class="p-b-10">
                                        <a href="blog-detail.html" class="hov-img0 how-pos5-parent">
                                            <img src="<?php echo $ruta;?>images/blog-04.jpg" alt="IMG-BLOG">
                                        </a>
                                    </div>
								</li>
                                <li class="flex-w flex-t p-b-2">
                                    <div class="p-b-10">
                                        <a href="blog-detail.html" class="hov-img0 how-pos5-parent">
                                            <img src="<?php echo $ruta;?>images/blog-04.jpg" alt="IMG-BLOG">
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
								<?php $serviciosC = searchService($conexion); ?>
                                <?php for ($i=0; $i < sizeof($serviciosC); $i++) {
									$contador=servicioUnico($conexion,$serviciosC[$i]['id']); ?>
								<li class="p-b-7">
									<a href="<?php echo $ruta . $links_contenido['serviciosDetalles'] .'/'.$serviciosC[$i]['id'];?>" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
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
	
		
<?php require 'templates/footer.php';?> 
<?php require 'templates/header.php';?>

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			¡Encuentra tu plan Perfecto!
		</h2>
	</section>

	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
				Inicio
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			<span class="stext-109 cl4">
				Comprar Plan
			</span>
		</div>
	</div>
		
	<section class="main">
		<section class="caracteristicas m-b-20">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="titulo">Caracteristicas</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-4 caracteristica">
						<img src="images/icons/icono1.png" alt="" class="icono">
						<h4 class="primera_linea">Posiciona tu Negocio</h4>
						<p class="parrafo">Al estar registrado tienes mayor oportunidad de que las personas opinen sobre tu negocio y lo recomienden.</p>
					</div>
					<div class="col-sm-4 caracteristica">
						<img src="images/icons/icono2.png" alt="" class="icono">
						<h4 class="primera_linea">Consigue más Clientes</h4>
						<p class="parrafo">Curabitur nisi enim, placerat ac convallis id, posuere vehicula ligula.</p>
					</div>
					<div class="col-sm-4 caracteristica">
						<img src="images/icons/icono3.png" alt="" class="icono">
						<h4 class="primera_linea">Se más Eficiente	</h4>
						<p class="parrafo">Nulla diam mi, pharetra eget mattis sed, mollis non ligula.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="precios">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="titulo">Elige tu plan Mensual</h3>
					</div>
				</div>

				<div class="row">
					<div class="precio col-sm-6 col-md-6 col-lg-3 m-t-55">
						<div class="plan">
							<p class="nombre">Gratis</p>
							<p class="precio">$0 <span>MXN</span></p>
							<ul class="caracteristicas">
								<li>Registro de Servicio</li>
								
							</ul>
							<a href="#" class="btn btn-outline-dark">Registrar Ahora</a>
						</div>
					</div>
					<div class="precio col-sm-6 col-md-6 col-lg-3 m-t-55">
						<div class="plan verde">
							<p class="nombre">Básico</p>
							<p class="precio">$125 <span>MXN</span></p>
							<ul class="caracteristicas">
								<li>3 Publicaciones/mes</li>
								<li>Registra tu Servicio</li>
								<li>Datos de Contacto</li>
							</ul>
							<img class="card-img-top mx-auto d-block" src="images/icons/Basico.svg" alt="Card image cap" style="width:50%;">
							<a href="#" class="btn m-t-25">Contratar Ahora</a>
						</div>
					</div>

					<div class="precio col-sm-6 col-md-6 col-lg-3 m-t-55">
						<div class="plan active">
							<p class="nombre">Standard</p>
							<p class="precio">$179 <span>MXN</span></p>
							<ul class="caracteristicas">
								<li>5 Publicaciones/mes</li>
								<li>Registra tu Servicio</li>
								<li>Datos de Contacto</li>
								<li>Anunciate en el Sitio</li>
							</ul>
							<img class="card-img-top mx-auto d-block" src="images/icons/standart.svg" alt="Card image cap" style="width:50%;">
							<a href="#" class="btn m-t-25">Contratar Ahora</a>
						</div>
					</div>
					<div class="precio col-sm-6 col-md-6 col-lg-3 m-t-55">
						<div class="plan naranja">
							<p class="nombre">Premium</p>
							<p class="precio">$	249 <span>MXN</span></p>
							<ul class="caracteristicas">
								<li>10 Publicaciones/mes</li>
								<li>Registra tu Servicio</li>
								<li>Datos de Contacto</li>
								<li>Anunciate en el Sitio</li>
								<li>Agregar Video</li>
								<li>Google Maps</li>
								<li>Galeria de Imagenes</li>
							</ul>
							<img class="card-img-top mx-auto d-block" src="images/icons/Diamante.svg" alt="Card image cap" style="width:50%;">
							<a href="#" class="btn m-t-6">Contratar Ahora</a>
						</div>
					</div>

				</div>
			</div>
		</section>
	</section>
		
<?php require 'templates/footer.php'; ?>
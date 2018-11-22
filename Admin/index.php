<?php require_once 'views/header.php';?>

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Administrador
		</h2>
	</section>

	<!-- Content page -->
	<section class="bg0 p-t-52 p-b-20">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<ul class="nav nav-pills mb-3  stext-115" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Publicaciones</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Usuarios</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Servicios</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-planes-tab" data-toggle="pill" href="#pills-planes" role="tab" aria-controls="pills-planes" aria-selected="false">Planes</a>
							</li>
						</ul>
						<div class="tab-content stext-115" id="pills-tabContent">
							<div class="tab-pane fade show active p-t-45" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><?php require_once 'Admin/tablePublicaciones.php';?></div>
							<div class="tab-pane fade p-t-45" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><?php require_once 'Admin/tableUsuarios.php';?>	</div>	
							<div class="tab-pane fade p-t-45" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><?php require_once 'Admin/tableServicios.php';?>	</div>
							<div class="tab-pane fade p-t-45" id="pills-planes"  role="tabpanel" aria-labelledby="pills-planes-tab"> <?php require_once 'Admin/tablePlanes.php';?>		</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>





<?require_once 'views/footer.php';?>
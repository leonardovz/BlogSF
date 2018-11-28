<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('Users_images/servicios/<?php echo $perfil['servImagen'];?>');">
	<h2 class="ltext-105 cl0 txt-center">
		<?php echo $perfil['nombreServicio'];?>
	</h2>
</section>

<section class="main">
	<section class="acerca-de">
		<div class="contenedor">
			<div class="foto">
				<img src="Users_images/usuarios/<?php echo $perfil['imagenServicio'];?>" width="115" height="115" alt="Carlos Arturo">
			</div>
	</section>
	<section class="container-fluid p-t-20 stext-115">
		<form>
			<div class="form-row">
				<div class="col-12 text-center fs-40">
					<?php echo $perfil['nombre'] ." ".$perfil['apellidos'];?>
				</div>
				<div class="col-12 text-center fs-25">
					<?php echo $perfil['servNombre'];?>
				</div>
			</div>
			<div class="form-row p-t-30">
				<div class="col-12 text-center fs-37">
					Acerca de
				</div>
				<div class="col-12 text-center fs-18 p-b-20">
					<?php echo $perfil['descripcion'];?>
				</div>
			</div>
			<div class="form-row bor18">
				<div class="col-md-2 fs-37">
					<i class="fas fa-envelope-square"></i>
				</div>
				<div class="col-md-9 text-right fs-16 m-auto">
					<?php echo $perfil['correo'];?>
				</div>
			</div>
			<?php if($perfil['celular']!=''){?>
				<div class="form-row bor18">
					<div class="col-md-2 fs-37">
						<i class="fas fa-phone-volume"></i>
					</div>
					<div class="col-md-9 text-right fs-18 m-auto">
						<?php echo $perfil['celular'];?>
					</div>
				</div>
			<?php } ?>
			<?php if($perfil['telefono']!=''){?>
				<div class="form-row bor18">
					<div class="col-md-2 fs-37">
						<i class="fas fa-home"></i>
					</div>
					<div class="col-md-9 text-right fs-18 m-auto">
						<?php echo $perfil['telefono'];?>
					</div>
				</div>
			<?php } ?>
			
			<div class="form-row bor18">
				<div class="col-12 text-center fs-26 font-weight-bold">
				
					Dirección
				</div>
				<div class="col-12 text-center fs-18">
					<?php echo $perfil['domicilio'];?>
				</div>
			</div>
			<!-- <div class="form-row bor18">
				<div class="col-12 text-center fs-26 font-weight-bold">
					Horarios de atención
				</div>
				<div class="col-12 text-center fs-18">
					Lunes a Viernes de 9:00 am a 6:00pm <br>
					Sabados de 8:00 am a 2:00pm
				</div>
			</div> -->
		</form>
	</section>
</section>
<div class="row isotope-grid">
    <?php 
        $publicaciones = obtenerPostPerfil($conexion,$perfil['idUsuario']);
        for ($i=0; $i < sizeof($publicaciones); $i++) { 
            $fecha =fechaPub($publicaciones[$i]['fecha']);?>
    <div class="col-sm-6 col-md-6 col-lg-6 p-b-10 isotope-item women">
        <!-- Block2 -->
        <div class="p-b-10">
            <a href="<?php echo $ruta . $links_contenido['publicaciones'] .'/'.$publicaciones[$i]['idPub'];?>" class="hov-img0 how-pos5-parent">
                <img src="<?php echo $ruta; ?>Users_images/usuarios/<?php echo $publicaciones[$i]['imagen'];?>" alt="IMG-BLOG">
            </a>

            <div class="p-t-15">
                <h4 class="p-b-5">
                    <span class="flex-w flex-m stext-111 cl2 p-b-19">
                        <span>
                            <?php echo $publicaciones[$i]['titulo'];?>  
                            <span class="cl12 m-l-4 m-r-6">|</span>
                        </span>

                        <span>
                            <?php echo $fecha[2] . " de " . obtenerMes($fecha[1]) . " de " . $fecha[0];?>
                            <span class="cl12 m-l-4 m-r-6">|</span>
                        </span>

                        <span>
                            <?php echo $publicaciones[$i]['nameU'] . ", " .$publicaciones[$i]['apellidos'];?>
                            <span class="cl12 m-l-4 m-r-6">|</span>
                        </span>
                        <span><a href="<?php echo $ruta . $links_contenido['publicaciones'] .'/'.$publicaciones[$i]['idPub'];?>"><i class="fs-23 fab fa-readme"></i></a></span>
                    </span>
                </h4>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
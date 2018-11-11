<!--  -->
<div class="row isotope-grid">
    <?php for ($i=0; $i < 12; $i++) { ?>
    <div class="col-sm-6 col-md-6 col-lg-6 p-b-10 isotope-item women">
        <!-- Block2 -->
        <div class="p-b-10">
            <a href="<?php echo $links_contenido['publicaciones'] .'?idPub='.$i;?>" class="hov-img0 how-pos5-parent">
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
                        <span><a href="<?php echo $links_contenido['publicaciones'] .'?idPub='.$i;?>"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></span>
                    </span>
                </h4>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
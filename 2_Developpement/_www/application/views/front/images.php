

<main class="container bn_content">
        <div class="row no-gutters bn_galerie">
            <!--- Faudra faire un foreach ici -->
            <?php 

            

            foreach($arrImage as $objImage) { 
                ?>       
            
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <a href="<?php base_url() ?>assets/img/album/photos-1.jpg" data-lightbox="roadtrip">
                    <div class="bn_galerie-img">
                        <img src="<?php base_url() ?>assets/img/album/photos-1_thumb.jpg" alt="Belle Photo">
                    </div>
                </a>
            </div>


            <!-- fin du foreach -->
        </div>
</main>

<div class="bn_gap-100"></div>


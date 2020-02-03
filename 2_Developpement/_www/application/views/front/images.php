

<main class="container bn_content">
        <div class="row no-gutters bn_galerie">
            
            <?php 

    

            foreach($arrImages as $objImage) { ?>                   
            
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    
                    <a src="<?php echo base_url("assets/img/album/").$objImage->getSrc() ?>" data-lightbox="roadtrip">
                    <div class="bn_galerie-img">
                        <img src="<?php echo base_url("assets/img/album/").$objImage->getSrc() ?>" alt="Belle Photo">
                           <p><?php echo $objImage->getAuthor() ?></p>
                    </div>

                </a>
            </div>
            
            <!-- fin du foreach -->
            <?php } ?>
        </div>
</main>

<div class="bn_gap-100"></div>


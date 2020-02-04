

<main class="container bn_content">
        <div class="row no-gutters bn_galerie">

            {foreach from=$arrImages item=$objImage}                   
            
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    
                    <a src="{base_url("assets/img/album/")}{$objImage->getSrc()}" data-lightbox="roadtrip">
                    <div class="bn_galerie-img">
                        <img src="{base_url("assets/img/album/")}{$objImage->getSrc()}" alt="Belle Photo">
                           <p>{$objImage->getAuthor()}</p>
                    </div>

                </a>
            </div>
            
            <!-- fin du foreach -->
            {/foreach}
        </div>
</main>

<div class="bn_gap-100"></div>


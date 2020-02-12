<main class="container bn_content">
    {if $objUser->getId() >= 0}
        <a href="{site_url('user_images/user_addImg.tpl')}" type="button" name="name" class="form-control col-2 mb-4" id="inputName" >Ajouter une image</a>
    {/if}

        <div class="row no-gutters bn_galerie">

            {foreach from=$arrImages item=$objImage}                   

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    
                    <a src="{base_url("uploads/album/")}{$objImage->getSrc()}" data-lightbox="roadtrip">
                    <div class="bn_galerie-img">
                        <img src="{base_url("uploads/album/")}{$objImage->getSrc()}" alt="Belle Photo">
                    </div>

                </a>
            </div>
            
            <!-- Fin du foreach -->
            {/foreach}
        </div>
</main>

<div class="bn_gap-100"></div>


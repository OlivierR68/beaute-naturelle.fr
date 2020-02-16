<main class="container bn_content">
    <!-- Si utilisateur connecté alors on affiche le button d'upload d'image -->
    {if isset($smarty.session.login)}
    <div class="bn_bg-color-1 p-2 d-flex justify-content-end">
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
            Ajouter une image
        </button>
    </div>
    {/if}

        <div class="row no-gutters bn_galerie">

            {foreach from=$arrImages item=$objImage}                   

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    
                    <a href="{base_url("uploads/album/")}{$objImage->getSrc()}" data-lightbox="roadtrip">
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nom de l'image :</label>
                        <input type="text" class="form-control" name="libelle" required>
                    </div>
                    <div class="form-group">
                        <label>Description :</label>
                        <input type="text" class="form-control" name="description" required>
                    </div>
                    <div class="form-group">
                        <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                        <small>Taille maximum : 2mo</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-secondary text-light" data-dismiss="modal">Annuler</a>
                    <input type="submit" class="btn btn-success text-light" value="Valider">
                </div>
            </form>
        </div>
    </div>
</div>

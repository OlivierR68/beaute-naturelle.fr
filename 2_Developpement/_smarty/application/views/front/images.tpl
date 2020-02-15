<main class="container bn_content">
    <!-- Si utilisateur connecté alors on affiche le button d'upload d'image -->

    {if isset($smarty.session.login)}
        <button type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ajouter une image</button>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une image dans la galerie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post" action="controllers/images.php">
            
            <div class="modal-body">
                <label for="exampleFormControlInput1">Nom de l'image :</label>
                <input type="text" class="form-control" name="libelle" value="{$objImage_user->getLibelle()}" required>
            </div>

            <div class="modal-body mt-n3">
                
                <div class="form-group">

				<label for="inputImg">Uploader une image :</label>

			<input type="file" class="form-control-file" id="inputImg" name="img" accept=".jpg, .jpeg, .png, .gif" value="{$objImage_user->getSrc()}" required>
			<small id="fileHelp" class="form-text text-muted">Taille maximum : 2 mo</small>

		    </div>
                
            </div>
            <div class="modal-footer mt-n2">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-success">Envoyer</button><a href="{base_url('images/user_addEdit')}" class="btn btn-dark">{$buttonCancel}</a>
                <p>Cette image sera en attente de validation par les moderateurs</p>
            </div>
            </div>
        </div>
        </div>
        </form>
    {/if}

        <div class="row no-gutters bn_galerie">

            <!-- Affiche les images de la bdd -->

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


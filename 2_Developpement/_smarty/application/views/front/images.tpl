<main class="container bn_content">
    <!-- Si utilisateur connecté alors on affiche le button d'upload d'image -->
    {if isset($smarty.session.login)}
<!--    <button href="{site_url('user_images/user_addImg.tpl')}" type="button" name="name" class="form-control col-2 mb-4" id="inputName" >Ajouter une image</a> -->
        <button href="{site_url('user_images/user_addImg.tpl')}" type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ajouter une image</button>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une image dans la galerie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <label for="exampleFormControlInput1">Nom de l'image :</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="modal-body mt-n3">
                <form>
                <div class="form-group">

				<label for="inputImg">Uploader une image :</label>

			<input type="file" class="form-control-file" id="inputImg" name="img" accept=".jpg, .jpeg, .png, .gif" required>
			<small id="fileHelp" class="form-text text-muted">Taille maximum : 2 mo</small>

		    </div>

                </form>
            </div>
            <div class="modal-footer mt-n2">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-success">Envoyer</button>
                <p>Cette image sera en attente de validation par les moderateurs</p>
            </div>
            </div>
        </div>
        </div>

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


<form enctype="multipart/form-data" method="post">

    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="title" class="form-control" value="{$subcat_obj->getTitle()}" required>
    </div>

    <div class="form-group">
        <label >Catégorie Parent :</label>
        <select class="form-control" name="parent">
            {foreach from=$cat_list item=cat}
                <option value="{$cat['cat_id']}" {if $subcat_obj->getParent() eq $cat['cat_id']}selected{/if}>{$cat['cat_title']}</option>
            {/foreach}
        </select>
    </div>

    <div class="form-group">
        <div>
            <label for="inputVisible">Visible au public :</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="visible" id="inputVisible1" value="1" {if $subcat_obj->getVisible() eq 1}checked{/if} required >
            <label class="form-check-label" for="inputVisible1">Oui</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="visible" id="inputVisible2" value="0" {if $subcat_obj->getVisible() eq 0}checked{/if} required >
            <label class="form-check-label" for="inputVisible2">Non</label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">{$buttonSubmit}</button> <a href="{base_url('prestations/listPage_cat')}" class="btn btn-dark">{$buttonCancel}</a>
    {if isset($next)}
        <a href="{base_url('prestations/delete_subcat/')}{$subcat_obj->getId()}" class="btn btn-danger"
           data-href="{base_url('prestations/delete_subcat/')}{$subcat_obj->getId()}"
           data-toggle="modal" data-target="#confirm-delete">
            Supprimer
        </a>
        <a href="{base_url('prestations/addEdit_subcat?cat=')}{$subcat_obj->getParent()}" class="btn btn-secondary">Ajouter une nouvelle sous-catégorie</a>
    {/if}

</form>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Confirmer la suppression
            </div>
            <div class="modal-body font-weight-bold">
                <p>Voulez-vous vraiment supprimer la sous-catégorie ?</p>
                <div class="bg-danger rounded p-2 text-white ">
                    <i class="fas fa-exclamation-triangle mr-1"></i> Supprimer la sous-catégorie entrainera la suppression de
                    toutes les prestations enfants.
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                <a class="btn btn-danger btn-ok text-white">Supprimer</a>
            </div>
        </div>
    </div>
</div>



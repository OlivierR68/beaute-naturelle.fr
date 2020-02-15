



{form_open()}

<div class="form-group">
    {form_label('Catégorie | Sous-catégorie :', 'inputSubcat')}
    <select  class="form-control "  name="sub_cat" id="inputSubcat">
        {foreach from=$sub_cat_list item=sub_cat }
            <option {if $presta_obj->getSub_cat() eq $sub_cat['sub_cat_id']}selected{/if} value="{$sub_cat['sub_cat_id']}">{$sub_cat['cat_title']} | {$sub_cat['sub_cat_title']}</option>
        {/foreach}
    </select>
</div>

<div class="form-group">
    {form_label('Titre :', 'inputTitle')}
    {form_input('title', $presta_obj->getTitle(), 'class="form-control" required id="inputTitle"')}
</div>

<div class="form-group">
    <div>
        <label for="inputVisible">Visible au public :</label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="visible" id="inputVisible1" value="1" {if $presta_obj->getVisible() eq 1}checked{/if} required >
        <label class="form-check-label" for="inputVisible1">Oui</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="visible" id="inputVisible2" value="0" {if $presta_obj->getVisible() eq 0}checked{/if} required >
        <label class="form-check-label" for="inputVisible2">Non</label>
    </div>
</div>

<div class="form-group">
    {form_label('Ordre :', 'inputOrder')}
    <input type="number" name="order" max="100" min="0" class="form-control" id="inputOrder" value="{$presta_obj->getOrder()}">
</div>

<div class="form-group">
    {form_label('Description :', 'inputSubtext')}
    {form_textarea('subtext', $presta_obj->getSubtext(), 'class="form-control" id="inputSubtext"')}
</div>

<div class="form-group">
    {form_label('Durée :', 'inputDuration')}
    {form_input('duration', $presta_obj->getDuration(), 'class="form-control" required id="inputDuration"')}
</div>

<div class="form-group">
    {form_label('Prix :', 'inputPrice')}
    {form_input('price', $presta_obj->getPrice(), 'class="form-control" required id="inputPrice"')}
</div>


<div class="d-flex flex-wrap">
    <button type="submit" class="btn btn-primary d-block mr-1 mb-1">{$buttonSubmit}</button>
    <a href="{base_url('prestations/listPage')}" class="btn btn-dark d-block mr-1 mb-1">{$buttonCancel}</a>

    {if isset($next)}
        <a href="{base_url('prestations/delete/')}{$presta_obj->getId()}" class="btn btn-danger d-block mr-1 mb-1"
           data-href="{base_url('prestations/delete/')}{$presta_obj->getId()}"
           data-toggle="modal" data-target="#confirm-delete">
            Supprimer
        </a>
        <a href="{base_url('prestations/addEdit')}?subcat={$presta_obj->getSub_cat()}" class="btn btn-secondary d-block mr-1 mb-1">Ajouter une nouvelle prestation</a>
        <a href="{base_url('prestations/addEdit')}?copy={$presta_obj->getId()}" class="btn btn-secondary d-block mr-1 mb-1">Copier vers une nouvelle prestation</a>
    {/if}
</div>


{form_close()}


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Confirmer la suppression
            </div>
            <div class="modal-body">
                Vous voulez vraiment supprimer la prestation <b class="bn_user"></b>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                <a class="btn btn-danger btn-ok">Supprimer</a>
            </div>
        </div>
    </div>
</div>
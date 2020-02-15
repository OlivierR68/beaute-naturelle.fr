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

        <a href="{base_url('prestations/addEdit_subcat/-1')}" class="btn btn-secondary mt-1">Ajouter une nouvelle sous-catégorie</a>
        {* <a href="{base_url('prestations/newCopy')}" class="btn btn-primary d-block mr-1 mb-1">Copier vers une nouvelle prestation</a> *}

    {/if}
</form>


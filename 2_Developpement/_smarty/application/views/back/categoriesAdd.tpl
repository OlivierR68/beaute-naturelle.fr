<form enctype="multipart/form-data" method="post">

    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="title" class="form-control" value="{$cat_obj->getTitle()}" required>
    </div>

    <div class="form-group">
        <div>
            <label for="inputVisible">Visible au public :</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="visible" id="inputVisible1" value="1" {if $cat_obj->getVisible() eq 1}checked{/if} required >
            <label class="form-check-label" for="inputVisible1">Oui</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="visible" id="inputVisible2" value="0" {if $cat_obj->getVisible() eq 0}checked{/if} required >
            <label class="form-check-label" for="inputVisible2">Non</label>
        </div>
    </div>

    <div class="form-group">
        {if (!empty($cat_obj->getHeader()))}
            <div>
                <img src="{$cat_obj->getHeaderUrl()}" alt="" class="w-50 py-4 border-light">
            </div>


            <label for="inputImg">Changer le Header :</label>
        {else}

            <label for="inputImg">Uploader un Header :</label>

        {/if}

        <input type="file" class="form-control-file" name="header" accept=".jpg, .jpeg, .png, .gif">
        <small class="form-text text-muted">Poids maximum : 2 mo <br>Dimensions conseillées : 1920x500 px</small>
    </div>


    <div class="form-group">
        {if (!empty($cat_obj->getImg()))}
            <div>
                <img src="{$cat_obj->getImgUrl()}" alt="" class="w-25 py-4 border-light">
            </div>


            <label for="inputImg">Changer l'image :</label>
        {else}

            <label for="inputImg">Uploader une image :</label>

        {/if}

        <input type="file" class="form-control-file" name="img" accept=".jpg, .jpeg, .png, .gif">
        <small class="form-text text-muted">Poids maximum : 2 mo <br>Dimensions conseillées : 500x400 px</small>
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description" rows="3">{$cat_obj->getDescription()}</textarea>
    </div>



    <button type="submit" class="btn btn-primary">{$buttonSubmit}</button> <a href="{base_url('prestations/listPage_cat')}" class="btn btn-dark">{$buttonCancel}</a>
</form>
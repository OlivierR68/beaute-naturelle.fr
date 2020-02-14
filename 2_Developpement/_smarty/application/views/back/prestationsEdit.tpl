{form_open()}

<div class="form-group">
    {form_label('Catégorie | Sous-catégorie :', 'inputSubcat')}
    <select  class="form-control"  name="sub_cat" id="inputSubcat">
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
    {form_label('Sous-Titre :', 'inputSubtext')}
    {form_textarea('subtext', $presta_obj->getSubtext(), 'class="form-control" required id="inputSubtext"')}
</div>

<div class="form-group">
    {form_label('Prix :', 'inputPrice')}
    {form_input('price', $presta_obj->getPrice(), 'class="form-control" required id="inputPrice"')}
</div>

<div class="form-group">
    {form_label('Durée :', 'inputDuration')}
    {form_input('duration', $presta_obj->getDuration(), 'class="form-control" required id="inputDuration"')}
</div>

<div class="d-flex flex-wrap">
    <button type="submit" class="btn btn-primary d-block mr-1 mb-1">{$buttonSubmit}</button>
    <button href="{base_url('prestations/listPage')}" class="btn btn-dark d-block mr-1 mb-1">{$buttonCancel}</button>
    {if isset($next)}
        <button href="{base_url('prestations/listPage')}" class="btn btn-secondary d-block mr-1 mb-1">Ajouter une nouvelle prestation</button>
        <button href="{base_url('prestations/newCopy')}" class="btn btn-secondary d-block mr-1 mb-1">Copier vers une nouvelle prestation</button>
    {/if}

</div>


{form_close()}


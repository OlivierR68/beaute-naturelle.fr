{form_open()}


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

<div class="form-group">
    {form_label('Sous-catégorie :', 'inputSubcat')}
    <select  class="form-control"  name="sub_cat" id="inputSubcat">
        <option
        {foreach from=$sub_cat_list item=sub_cat }
            <option {if $presta_obj->getSub_cat() eq $sub_cat['sub_cat_id']}selected{/if} value="{$sub_cat['sub_cat_id']}">{$sub_cat['sub_cat_title']}</option>
        {/foreach}
    </select>
</div>

<button type="submit" class="btn btn-primary">{$buttonSubmit}</button>
<a href="{base_url('prestations/listPage')}" class="btn btn-dark">{$buttonCancel}</a>

{form_close()}


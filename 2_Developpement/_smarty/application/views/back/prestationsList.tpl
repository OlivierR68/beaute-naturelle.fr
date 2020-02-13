

<div>

    <form class="mb-3" method="post">
        <div class="form-row align-items-center">

            <div class="col-auto my-1">
                <a class="btn btn-primary" href="{site_url('prestations/addEdit')}" role="button">Ajouter une prestation</a>
            </div>

            <div class="col-auto my-1">
                <label class="mr-sm-2 sr-only" for="inputCat">Catégorie</label>
                <select class="custom-select mr-sm-2"  name="cat" id="inputCat">
                    <option class="text-muted" value="">Catégorie</option>
                    {foreach from=$cat_list item=cat }
                        <option {if isset($smarty.post.cat) and $smarty.post.cat eq $cat['cat_id']}selected{/if} value="{$cat['cat_id']}">{$cat['cat_title']}</option>
                    {/foreach}
                </select>
            </div>

            <div class="col-auto my-1">
                <label class="mr-sm-2 sr-only" for="inputSubCat">Sub-Catégorie</label>
                <select class="custom-select mr-sm-2"  name="subcat" id="inputSubCat">
                    <option  class="text-muted" value="">Sub-Catégorie</option>
                    {foreach from=$sub_cat_list item=sub_cat }
                        <option {if isset($smarty.post.subcat) and $smarty.post.subcat eq $sub_cat['sub_cat_id']}selected{/if} value="{$sub_cat['sub_cat_id']}">{$sub_cat['sub_cat_title']}</option>
                    {/foreach}
                </select>
            </div>


            <div class="col-auto my-1">
                <button type="submit" class="btn btn-primary">Filtrer</button>
            </div>

        </div>
    </form>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>id</th>
            <th>Actions</th>
            <th>Titre</th>
            <th>Sous-titre</th>
            <th>Prix</th>
            <th>Durée</th>
            <th>Sub-Catégorie </th>
            <th>Catégorie </th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>id</th>
            <th>Actions</th>
            <th>Titre</th>
            <th>Sous-titre</th>
            <th>Prix</th>
            <th>Durée</th>
            <th>Sub-Catégorie </th>
            <th>Catégorie </th>
        </tr>
        </tfoot>
        <tbody>
        {foreach from=$display_list item=$presa_obj}
            <tr>
                <td>{$presa_obj->getId()}</td>
                <td class="bn_action nowrap">
                    <a href="{base_url('prestations/addEdit/')}{$presa_obj->getId()}" title="Modifier"><i
                                class="far fa-edit"></i></a>
                    <a href="{base_url('prestations/delete/')}{$presa_obj->getId()}"  data-href="{base_url('prestations/delete/')}{$presa_obj->getId()}" data-toggle="modal" data-target="#confirm-delete" title="Supprimer"><i
                                class="fas fa-trash-alt text-danger"></i></a>
                </td>
                <td>{$presa_obj->getTitle()}</td>
                <td>{$presa_obj->getSubtext()}</td>
                <td>{$presa_obj->getPrice()}</td>
                <td>{$presa_obj->getDuration()}</td>
                <td>{$presa_obj->getSub_cat_title()}</td>
                <td>{$presa_obj->getCat_title()}</td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>



<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Confirmer la suppression
            </div>
            <div class="modal-body">
                Vous voulez vraiment supprimer l'utilisateur <b class="bn_user"></b>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>
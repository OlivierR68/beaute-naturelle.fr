

<div>

    <form class="mb-3" method="post">
        <div class="form-row align-items-center">

            <div class="col-auto my-1">
                <a class="btn btn-primary" href="{site_url('prestations/addEdit_cat')}" role="button">Ajouter une Catégorie</a>
            </div>

        </div>
    </form>
</div>
<div class="row">
    <div class="col-6">


    </div>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>id</th>
            <th>Action</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Image</th>
            <th>Header img</th>
            <th>Description</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>id</th>
            <th>Action</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Image</th>
            <th>Header img</th>
            <th>Description</th>
        </tr>
        </tfoot>
        <tbody>
        {foreach from=$display_list_1 item=$cat_obj}
            <tr>
                <td>{$cat_obj->getId()}</td>
                <td class="bn_action nowrap">
                    <a href="{base_url('prestations/addEdit_cat/')}{$cat_obj->getId()}" title="Modifier"><i
                                class="far fa-edit"></i></a>
                    <a href="{base_url('prestations/delete_cat/')}{$cat_obj->getId()}"  data-href="{base_url('prestations/delete_cat/')}{$cat_obj->getId()}" data-toggle="modal" data-target="#confirm-delete" title="Supprimer"><i
                                class="fas fa-trash-alt text-danger"></i></a>
                </td>
                <td>{$cat_obj->getTitle()}</td>
                <td>{$cat_obj->getSlug()}</td>
                <td><a target="_blank" href="{$cat_obj->getImgUrl()}">{$cat_obj->getImg()}</a></td>
                <td><a target="_blank" href="{$cat_obj->getHeaderUrl()}">{$cat_obj->getHeader()}</a></td>
                <td>{$cat_obj->getDescription()}</td>
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
                Vous voulez vraiment supprimer la catégorie <b class="bn_user"></b>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

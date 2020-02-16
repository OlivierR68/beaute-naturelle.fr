<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Ajouter un abonné
</button>

<a href="{site_url('newsletter/export_csv')}" type="button" class="btn btn-primary">
    Exporter la liste en .csv
</a>



<div class="table-responsive mt-3">
    <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Id</th>
            <th>Actions</th>
            <th>Email</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Actions</th>
            <th>Email</th>
        </tr>
        </tfoot>
        <tbody>
        {foreach from=$display_list item=$item}
            <tr>
                <td>{$item['subscriber_id']}</td>
                <td class="bn_action nowrap" style="width: 175px">

                    <a href="{base_url('newsletter/delete/')}{$item['subscriber_id']}"
                       data-href="{base_url('newsletter/delete/')}{$item['subscriber_id']}"
                       data-toggle="modal" data-target="#confirm-delete" title="Supprimer">
                        <i class="fas fa-trash-alt text-danger"></i>
                    </a>

                </td>
                <td>{$item['subscriber_email']}</td>

            </tr>
        {/foreach}
        </tbody>
    </table>
</div>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Confirmer la suppression
            </div>
            <div class="modal-body">
                Vous voulez vraiment supprimer cette abonné <b class="bn_user"></b>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                <a class="btn btn-danger btn-ok">Supprimer</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ajouter un nouvel abonné</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Courriel</label>
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <input type="submit" class="btn btn-primary" value="Ajouter">
            </div>
        </form>
    </div>
</div>
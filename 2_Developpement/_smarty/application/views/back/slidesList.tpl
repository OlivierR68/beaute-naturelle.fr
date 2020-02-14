<a class="btn btn-primary mb-3" href="{site_url('slides/addEdit')}" role="button">Ajouter un slide</a>

<div class="table-responsive">
    <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Ordre</th>
            <th>Actions</th>
            <th>Libelle</th>
            <th>Image</th>
            <th>Taille</th>
            <th>Titre</th>
            <th>Sous-titre</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Ordre</th>
            <th>Actions</th>
            <th>Libelle</th>
            <th>Image</th>
            <th>Taille</th>
            <th>Titre</th>
            <th>Sous-titre</th>
        </tr>
        </tfoot>
        <tbody>
        {foreach from=$arrSlides item=$objSlide}
            <tr>
                <td>{$objSlide->getOrder()}</td>
                <td class="bn_action nowrap">

                    <a href="{base_url('slides/visible/')}{$objSlide->getId()}" title="Visibilité">
                        <i class="far fa-eye {if $objSlide->getVisible() eq false}text-muted{else}text-success{/if}"></i>
                    </a>

                    <a href="{base_url('slides/orderUp/')}{$objSlide->getId()}" title="Ordre +1">
                        <i class="fas fa-arrow-up"></i>
                    </a>

                    <a href="{base_url('slides/orderDown/')}{$objSlide->getId()}" title="Ordre -1">
                        <i class="fas fa-arrow-down"></i>
                    </a> |

                    <a href="{base_url('slides/copy/')}{$objSlide->getId()}" title="Copier">
                        <i class="far fa-copy"></i>
                    </a>
                    <a href="{base_url('slides/addEdit/')}{$objSlide->getId()}" title="Modifier">
                        <i class="far fa-edit"></i>
                    </a>
                    <a href="{base_url('slides/delete/')}{$objSlide->getId()}"
                       data-href="{base_url('slides/delete/')}{$objSlide->getId()}"
                       data-toggle="modal" data-id="#{$objSlide->getId()}" data-target="#confirm-delete" title="Supprimer">
                        <i class="fas fa-trash-alt text-danger"></i>
                    </a>

                </td>
                <td>{$objSlide->getLibelle()}</td>
                <td><a target="_blank" href="{base_url('uploads/slider/')}{$objSlide->getImg()}">{$objSlide->getImg()}</a></td>
                <td>{$objSlide->getTaille()}</td>
                <td>{$objSlide->getShortTitle(60)}</td>
                <td>{$objSlide->getText()}</td>

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
                Vous voulez vraiment supprimer le slide <b class="bn_user"></b>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>
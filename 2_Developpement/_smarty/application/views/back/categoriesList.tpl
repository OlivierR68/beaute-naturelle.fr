<div>

    <form class="mb-3" method="post">
        <div class="form-row align-items-center">

            <div class="col-auto my-1">
                <a class="btn btn-primary" href="{site_url('prestations/addEdit_cat')}" role="button">Ajouter une
                    Catégorie</a>
                <a class="btn btn-primary" href="{site_url('prestations/addEdit_subcat')}" role="button">Ajouter une
                    Sous-catégorie</a>
            </div>

        </div>
    </form>
</div>
<div class="row">
    <div class="col-6">


    </div>
</div>

<div class="row">

    {foreach from=$display_list_1 item=$cat_obj}
        <div class="col-12 col-md-6 col-lg-5 col-xl-3 mb-4">
            <div class="card shadow-sm">
                <img class="card-img-top img-fluid" src="{$cat_obj->getHeaderUrl()}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">#{$cat_obj->getId()} - {$cat_obj->getTitle()} </h5>
                    <p class="card-text">{$cat_obj->getDescription()} </p>
                    <ul>
                        <li><b>Slug : </b> <a target="_blank" href="{$cat_obj->getUrl()}">{$cat_obj->getSlug()} </a>
                        </li>
                        <li><b>Header : </b> <a target="_blank"
                                                href="{$cat_obj->getHeaderUrl()}">{$cat_obj->getHeader()}</a></li>
                        <li><b>Thumb : </b> <a target="_blank" href="{$cat_obj->getImgUrl()}">{$cat_obj->getImg()}</a>
                        </li>
                    </ul>

                </div>

                <div class="d-flex justify-content-center p-1">
                    <a href="{site_url('prestations/visible_cat/')}{$cat_obj->getId()}"
                       class="mr-1 mb-1 btn {if $cat_obj->getVisible() eq 1}btn-success{else}btn-secondary{/if}"
                       title="Publier la catégorie">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="{site_url('prestations/addEdit_cat/')}{$cat_obj->getId()}"
                       class="mr-1 mb-1 btn btn-primary" title="Modifier la catégorie"><i class="fas fa-edit"></i></a>
                    <a href="{site_url('prestations/delete_cat/')}{$cat_obj->getId()}"
                       data-href="{base_url('prestations/delete_cat/')}{$cat_obj->getId()}"
                       data-toggle="modal" data-target="#confirm-delete"
                       class="mr-1 mb-1 btn btn-danger" title="Supprimer la catégorie"><i class="fas fa-trash-alt"></i></a>
                </div>
                <hr>
                <ul class="list-group list-group-flush">
                    {if !empty($display_list_2[$cat_obj->getId()])}

                        {foreach from=$display_list_2[$cat_obj->getId()] item=subcat_obj}
                            <li class="list-group-item d-flex justify-content-between">
                                <span>{$subcat_obj->getTitle()}</span>
                                <span>
                            <a href="{site_url('prestations/visible_subcat/')}{$subcat_obj->getId()}" class="btn {if $subcat_obj->getVisible() eq 1}btn-success{else}btn-secondary{/if} btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="{site_url('prestations/addEdit_subcat/')}{$subcat_obj->getId()}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="{site_url('prestations/delete_subcat/')}{$subcat_obj->getId()}"
                               data-href="{base_url('prestations/delete_subcat/')}{$subcat_obj->getId()}"
                               data-toggle="modal" data-target="#confirm-delete"
                               class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </span>
                            </li>
                        {/foreach}
                    {/if}
                    <li class="list-group-item d-flex justify-content-between small text-muted">
                        {if !empty($display_list_2[$cat_obj->getId()])}
                            {count($display_list_2[$cat_obj->getId()])} Sous-catégories
                        {else}Catégorie vide{/if}
                        <br>
                            <a href="{site_url('prestations/addEdit_subcat')}?cat={$cat_obj->getId()}">Ajouter une sous-catégorie</a>
                        </li>

                </ul>

            </div>
        </div>
    {/foreach}

</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Confirmer la suppression
            </div>
            <div class="modal-body font-weight-bold">
                <p>Voulez-vous vraiment supprimer la catégorie ?</p>
                <div class="bg-danger rounded p-2 text-white ">
                    <i class="fas fa-exclamation-triangle mr-1"></i> Supprimer la catégorie entrainera la suppression de
                    toutes les sous-catégories et prestations enfants.
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
                <a class="btn btn-danger btn-ok text-white">Supprimer</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-delete-subcat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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

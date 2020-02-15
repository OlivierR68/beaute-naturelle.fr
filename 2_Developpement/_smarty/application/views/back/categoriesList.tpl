<div>

    <form class="mb-3" method="post">
        <div class="form-row align-items-center">

            <div class="col-auto my-1">
                <a class="btn btn-primary" href="{site_url('prestations/addEdit_cat')}" role="button">Ajouter une
                    Catégorie</a>
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
        <div class="col-12 col-md-6 col-lg-5 col-xl-3">
            <div class="card">
                <img class="card-img-top img-fluid" src="{$cat_obj->getHeaderUrl()}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">#{$cat_obj->getId()} - {$cat_obj->getTitle()} </h5>
                    <p class="card-text">{$cat_obj->getDescription()} </p>
                    <ul>
                        <li><b>Slug : </b> <a target="_blank" href="{$cat_obj->getUrl()}">{$cat_obj->getSlug()} </a></li>
                        <li><b>Header : </b> <a target="_blank" href="{$cat_obj->getHeaderUrl()}">{$cat_obj->getHeader()}</a></li>
                        <li><b>Thumb : </b> <a target="_blank" href="{$cat_obj->getImgUrl()}">{$cat_obj->getImg()}</a></li>
                    </ul>

                </div>

                <div class="d-flex justify-content-center p-1">
                    <a href="#" class="mr-1 mb-1 btn btn-outline-primary"
                       title="Publier la catégorie" type="button"
                       class="btn btn-primary" data-toggle="modal"
                       data-target="#publish{$cat_obj->getId()}"><i class="fas fa-eye"></i></a>

                    <a href="#" class="mr-1 mb-1 btn btn-primary" title="Ajouter une sous catégorie"><i class="fas fa-plus"></i></a>
                    <a href="#" class="mr-1 mb-1 btn btn-primary" title="Modifier la catégorie"><i class="fas fa-edit"></i></a>
                    <a href="#" class="mr-1 mb-1 btn btn-danger" title="Supprimer la catégorie"><i class="fas fa-trash-alt"></i></a>
                </div>
                <hr>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Cras justo odio</span>
                        <span>
                            <a href="#" class="btn btn-outline-dark btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </span>
                    </li>
                </ul>

            </div>
        </div>

        <!-- Button trigger modal -->


        <!-- Publier -->
        <div class="modal fade" id="publish{$cat_obj->getId()}" tabindex="-1" role="dialog" aria-labelledby="publish{$cat_obj->getId()}Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="publish{$cat_obj->getId()}Label">Publier la catégorie</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Rendre la Catégorie <b>#{$cat_obj->getId()} - {$cat_obj->getTitle()}</b> visible au public ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                        <button type="button" class="btn btn-primary">Publier</button>
                    </div>
                </div>
            </div>
        </div>


    {/foreach}

</div>

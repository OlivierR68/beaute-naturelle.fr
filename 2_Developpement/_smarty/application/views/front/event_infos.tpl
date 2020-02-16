<main class="container bn_content">
    <div class="bn_gap-25"></div>

    <p>{$obj_event->getContent()}</p>

    <div class=" bn_gap-25"></div>
    <p>Fermeture des inscriptions dans : <b>{$obj_event->daysBeforeExpired()} jours</b></p>
    <div class="d-flex justify-content-between flex-wrap mb-1">
        <div class="d-flex flex-wrap">
            {$smart_block}
        </div>

        <div class="d-flex">
            <div class="bn_bg-color-1 py-2 px-4 mb-1">
                <span class="text-light"><i class="fas fa-users"></i> Places disponibles : {count($participants_list)} / {$obj_event->getCapacity()}</span>
            </div>
            <a class="d-block bg-dark py-2 px-4 ml-1 mb-1" href="{site_url('events')}">
                <span class="text-light">RETOUR</span>
            </a>

        </div>

    </div>

    <div class="bn_gap-10"></div>
    <hr>
    <h2>Participants : {count($participants_list)}</h2>
    <div class="d-flex flex-wrap">
        {foreach from=$participants_list item=$obj_user}

            <div class="card shadow-sm m-2" style="width: 15rem;">
                <img class="card-img-top border" src="{$obj_user->getAvatarUrl()}" alt="Avatar de {$obj_user->getPseudo()}">
                <div class="card-body d-flex justify-content-between">
                    <h5 class="card-title">{$obj_user->getPseudo()}</h5><span>{$obj_user->getShortInfos()}</span>
                </div>
            </div>

        {/foreach}

    </div>

    <div class="bn_gap-25"></div>

</main>
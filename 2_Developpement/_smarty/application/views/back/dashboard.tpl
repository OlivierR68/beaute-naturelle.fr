<hr>
<div class="row">
    <div class="col-12 col-lg-6">
        <h4 class="mb-4">Demande d'inscription à un événement:</h4>

        <div>
            {if !empty($requests_data)}
            {foreach from=$requests_data item=$request}
                <div class="m-2 bg-light border">
                    <div class="bg-dark text-light p-2 d-flex justify-content-between">
                        <span><b>Date de demande : </b>{$request['event_user_date']|date_format:"%d/%m/%Y"}</span><span class="font-weight-bold">#{$request['event_user_id']}</span>
                    </div>
                    <div class="d-flex">
                        <div class="p-2 w-100">
                            <ul class="list-unstyled small">
                                <li><b>Utilisateur : </b>{$request['user_pseudo']}</li>
                                <li><b>Nom : </b>{$request['user_last_name']}</li>
                                <li><b>Prénom : </b>{$request['user_first_name']}</li>
                                <li><b>Email : </nr></b>{$request['user_email']}</li>
                            </ul>
                        </div>
                        <div class="p-2 w-100">
                            <ul class="list-unstyled small">
                                <li><b>Événement : <br></b><a target="_blank" href="{site_url('events/ev/')}{$request['event_id']}">{$request['event_name']}</a></li>
                                <li><b>Date : </b>{$request['event_start_date']|date_format:"%d/%m/%Y"}</li>
                                <li class="{if $request['event_filling'] eq $request['event_capacity']}text-danger{/if}"><b>Capacité : </b>{$request['event_filling']} / {$request['event_capacity']}</li>
                            </ul>
                        </div>
                        <div class="d-flex flex-column align-items-end ml-auto">
                            {if $request['event_filling'] < $request['event_capacity']}
                                <div class="w-100">
                                    <a class="d-block bg-primary py-2 px-4 text-light mt-1"
                                       href="{site_url('events/accept_user')}/{$request['event_id']}/{$request['user_id']}">
                                       Accepter
                                    </a>
                                </div>
                            {/if}
                            <div class="w-100">
                                <a class="d-block bg-danger py-2 px-4 text-light mt-1"
                                   href="{site_url('events/refuse_user')}/{$request['event_id']}/{$request['user_id']}">
                                    Refuser
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            {/foreach}
            {else}
                <div class="bg-light text-muted p-2 text-center">Aucune demande pour l'instant</div>
            {/if}
        </div>

    </div>
    <div class="col-12 col-lg-6">
        <h4 class="mb-4">Demande d'ajout d'image :</h4>
        <div>
            {if !empty($requests_img)}
                {foreach from=$requests_img item=$request}
                    <div class="m-2 bg-light border">
                        <div class="bg-dark text-light p-2 d-flex justify-content-between">
                            <span><b>Date de publication : </b>{$request['img_publi_date']|date_format:"%d/%m/%Y"}</span><span class="font-weight-bold">#{$request['img_id']}</span>
                        </div>
                        <div class="d-flex">
                            <div class="p-2 w-100">
                                <ul class="list-unstyled small">
                                    <li><b>Utilisateur : </b>{$request['user_pseudo']}</li>
                                    <li><b>Nom : </b>{$request['user_last_name']}</li>
                                    <li><b>Prénom : </b>{$request['user_first_name']}</li>
                                    <li><b>Email : </nr></b>{$request['user_email']}</li>
                                </ul>
                            </div>
                            <div class="p-2 w-100">
                                <ul class="list-unstyled small">
                                    <li><b>Événement : </b>{$request['img_libelle']}</a></li>
                                    <li><b>Source : </b><a href="{site_url('uploads/album/')}{$request['img_src']}" target="_blank">{$request['img_src']}</a></li>
                                    <li><b>Description : </b>{$request['img_description']}</li>
                                </ul>
                            </div>
                            <div class="d-flex flex-column align-items-end ml-auto">
                                    <div class="w-100">
                                        <a class="d-block bg-primary py-2 px-4 text-light mt-1"
                                           href="{site_url('images/accept')}/{$request['img_id']}">
                                            Autoriser
                                        </a>
                                    </div>

                                <div class="w-100">
                                    <a class="d-block bg-danger py-2 px-4 text-light mt-1"
                                       href="{site_url('images/delete')}/{$request['img_id']}">
                                        Supprimer
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                {/foreach}
            {else}
                <div class="bg-light text-muted p-2 text-center">Aucune demande pour l'instant</div>
            {/if}
        </div>
    </div>

</div>

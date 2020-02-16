<hr>
<div class="row">
    <div class="col-12 col-lg-4">
        <h3>Événements en cours :</h3>
    </div>
    <div class="col-12 col-lg-8">
        <h3>Demande d'inscription :</h3>

        <div>
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
                                <li><b>Événement : <br></b>{$request['event_name']}</li>
                                <li><b>Date : </b>{$request['event_start_date']|date_format:"%d/%m/%Y"}</li>
                                <li><b>Capacité : </b>{$request['event_capacity']}</li>
                            </ul>
                        </div>
                        <div class="d-flex flex-column align-items-end ml-auto">
                            <div class="w-100">
                                <a class="d-block bg-primary py-2 px-4 text-light mt-1" href="#">Accepter</a>
                            </div>
                            <div class="w-100">
                                <a class="d-block bg-danger py-2 px-4 text-light mt-1" href="#">Refuser</a>
                            </div>
                        </div>

                    </div>




                </div>
            {/foreach}
        </div>

    </div>


</div>

<form class="form-signin" method="post">

    <div class="text-center my-4">
        <img class="mb-4" src="{base_url('./assets/img/logo.svg')}" alt="logo beauté-naturelle" width="140" height="140">
        <h1 class="h3 mb-3 font-weight-normal">{$TITLE}</h1>
    </div>

    {if empty($smarty.session.login)}
    <div class="form-label-group">
        <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputEmail">Email</label>
    </div>
    <div class="form-label-group">
        <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Mot de Passe" required>
        <label for="inputPassword">Mot de Passe</label>
    </div>

    <input type="hidden" id="token" name="token">

    <button class="btn btn-lg btn-primary btn-block" type="submit">Se Connecter</button>
    {else}
        <p class="text-center">Vous êtes déjà connecter. <br><a href="{site_url('users/disconnect')}">Cliquez ici pour vous déconnecter</a>.</p>
    {/if}

    <div class="text-center mt-3">
        <p>Vous n'avez pas de compte ? <a href="{site_url('users/register')}">Inscrivez-vous !</a></p>
        <p><a href="{site_url()}">Page d'accueil</a>{if isset($smarty.server.HTTP_REFERER)} | <a href="{$smarty.server.HTTP_REFERER}">Page précédente</a>{/if}</p>
    </div>

    <p class="mt-5 mb-3 text-muted text-center small">Tous droits réservés 2010-2020 - Beauté Naturelle<br>Site réalisé par
        <a href="http://webolive.fr" target="_blank">Studio 241</a></p>
</form>

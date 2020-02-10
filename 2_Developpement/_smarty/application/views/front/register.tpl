
{form_open('users/register', 'class="form-signin"')}
<div class="text-center my-4">
	<a href="{site_url()}"><img class="mb-4" src="{base_url('./assets/img/logo.svg')}" alt="logo beauté-naturelle" width="140" height="140"></a>
	<h1 class="h3 mb-3 font-weight-normal">{$TITLE}</h1>
</div>
{if empty($smarty.session.login)}
{foreach from=$inputArray item=arrGroup}
<div class="form-label-group">
	{foreach from=$arrGroup item=item}
		{$item}
	{/foreach}
</div>
{/foreach}

<input type="hidden" id="token" name="token">

<div class="form-group small">
	<div class="form-check">
		<input class="form-check-input" type="checkbox" name="rgpd" {if isset($smarty.post.rgpd)}checked{/if} id="rgpdCheck" required>
		<label class="form-check-label" for="rgpdCheck">
			En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de l'utilisation des services du site,
			<a target="_blank" href="{site_url('pages/politique')}">Politique de confidentialités.</a>
		</label>
	</div>
</div>


<button class="btn btn-lg btn-primary btn-block" type="submit">S'Inscrire</button>
{else}
	<p class="text-center">Si vous souhaitez créer un nouveau compte, <a href="{site_url('users/disconnect')}">déconnecter vous d'abords</a>.</p>
{/if}
<div class="text-center mt-3">
	<p>Vous avez déjà un compte ? <a href="{site_url('users/login')}">Connectez-vous !</a></p>
	<p><a href="{site_url()}">Page d'accueil</a>{if isset($smarty.server.HTTP_REFERER)} | <a href="{$smarty.server.HTTP_REFERER}">Page précédente</a>{/if}</p>

</div>
<p class="mt-5 mb-3 text-muted text-center small">Tous droits réservés 2010-2020 - Beauté Naturelle<br>Site réalisé par
	<a href="http://webolive.fr" target="_blank">Studio 241</a></p>

{form_close()}







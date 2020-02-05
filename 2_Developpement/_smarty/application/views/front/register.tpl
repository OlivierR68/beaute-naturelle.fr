{form_open('users/register2', 'class="form-signin"')}
<div class="text-center my-4">
	<img class="mb-4" src="{base_url('./assets/img/logo.svg')}" alt="logo beauté-naturelle" width="140" height="140">
	<h1 class="h3 mb-3 font-weight-normal">{$TITLE}</h1>
</div>
{foreach from=$inputArray item=arrGroup}
<div class="form-label-group">
	{foreach from=$arrGroup item=item}
		{$item}
	{/foreach}
</div>
{/foreach}

<div class="form-label-group">

</div>

<div class="form-group small">
	<div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
		<label class="form-check-label" for="invalidCheck">
			Agree to terms and conditions
		</label>
	</div>
</div>
<button class="btn btn-lg btn-primary btn-block" type="submit">S'Inscrire</button>

<p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
{form_close()}


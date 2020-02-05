{form_open('users/register2', 'class="form-signin"')}
<div class="text-center my-4">
	<img class="mb-4" src="{base_url('./assets/img/logo.svg')}" alt="logo beauté-naturelle" width="140" height="140">
	<h1 class="h3 mb-3 font-weight-normal">{$TITLE}</h1>
</div>

<div class="form-label-group">
	{form_input('pseudo', set_value('pseudo'), 'id="inputPseudo" class="form-control" placeholder="Pseudo"')}
	{form_error('pseudo', '<div class="invalid-feedback d-block">', '</div>')}
	{form_label('Pseudo', 'inputPseudo')}
</div>

<div class="form-label-group">
	{form_input('last_name', set_value('last_name'), 'id="inputNom"  class="form-control" placeholder="Nom"')}
	{form_error('last_name', '<div class="invalid-feedback  d-block">', '</div>')}
	{form_label('Nom', 'inputNom')}
</div>

<div class="form-label-group">
	{form_input('first_name',set_value('first_name'),'id="inputPrenom"  class="form-control" placeholder="Prénom"')}
	{form_error('first_name', '<div class="invalid-feedback">', '</div>')}
	{form_label('Prénom', 'inputPrenom')}
</div>

<div class="form-label-group">
	{form_input('email',set_value('email'),'id="inputEmail" class="form-control" placeholder="Adresse Email"')}
	{form_error('email', '<div class="invalid-feedback">', '</div>')}
	{form_label('Adresse Email', 'inputEmail')}
</div>

<div class="form-label-group">
	{form_password('pwd',set_value('pwd'), 'id="inputPassword" class="form-control" placeholder="Mot de Passe" ')}
	{form_error('pwd', '<div class="invalid-feedback">', '</div>')}
	{form_label('Mot de Passe', 'inputPassword')}
</div>

<div class="form-label-group">
	{form_password('pconf',set_value('pconf'),'id="inputPassconf" class="form-control" placeholder="Mot de Passe" ')}
	{form_error('pconf', '<div class="invalid-feedback">', '</div>')}
	{form_label('Confirmation Mot de Passe', 'inputPassconf')}
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


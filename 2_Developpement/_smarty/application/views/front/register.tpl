{form_open('users/register', 'class="form-signin"')}
	<div class="text-center my-4">
		<img class="mb-4" src="{base_url('./assets/img/logo.svg')}" alt="logo beauté-naturelle" width="140" height="140">
		<h1 class="h3 mb-3 font-weight-normal">{$TITLE}</h1>
	</div>

	<div class="form-label-group">
		{form_input('name="pseudo" id="inputPseudo" class="form-control" placeholder="Pseudo" required autofocus',set_value('pseudo'))}
		{form_error('pseudo', '<div class="invalid-feedback">', '</div>')}
		{form_label('Pseudo', 'inputPseudo')}
	</div>

	<div class="form-label-group">
		{form_input('name="last_name" id="inputNom"  class="form-control" placeholder="Nom" required',set_value('last_name'))}
		{form_error('last_name', '<div class="invalid-feedback">', '</div>')}
		{form_label('Nom', 'inputNom')}
	</div>

	<div class="form-label-group">
		{form_input('name="first_name" id="inputPrenom"  class="form-control" placeholder="Prénom" required',set_value('first_name'))}
		{form_error('first_name', '<div class="invalid-feedback">', '</div>')}
		{form_label('Prénom', 'inputPrenom')}
	</div>

	<div class="form-label-group">
		{form_input('name="email" id="inputEmail" class="form-control" placeholder="Adresse Email" required autocomplete="off"',set_value('email'))}
		{form_error('email', '<div class="invalid-feedback">', '</div>')}
		{form_label('Adresse Email', 'inputEmail')}
	</div>

	<div class="form-label-group">
		{form_password('name="pwd" id="inputPassword" class="form-control" placeholder="Mot de Passe" required autocomplete="off"',set_value('pwd'))}
		{form_error('pwd', '<div class="invalid-feedback">', '</div>')}
		{form_label('Mot de Passe', 'inputPassword')}
	</div>

	<div class="form-label-group">
		{form_password('name="pconf" id="inputPassconf" class="form-control" placeholder="Mot de Passe" required autocomplete="off"',set_value('pconf'))}
		{form_error('pconf', '<div class="invalid-feedback">', '</div>')}
		{form_label('Confirmation Mot de Passe', 'inputPassconf')}
	</div>

	<div class="checkbox mb-3 small">
		<label>
			{form_checkbox('required',true)}
			En vous inscrivant, vous acceptez ces conditions telles qu'elles figurent dans les <a href="{base_url('pages/mentions')}"> mentions légales</a>.
		</label>
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">S'Inscrire</button>

	<p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
{form_close()}
{literal}
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
			'use strict';
			window.addEventListener('load', function() {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>
{/literal}

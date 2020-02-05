<form method="post">
	{form_open('users/register2', "")}
	<div class="text-center my-4">
		<img class="mb-4" src="{base_url('./assets/img/logo.svg')}" alt="logo beauté-naturelle" width="140" height="140">
		<h1 class="h3 mb-3 font-weight-normal">{$TITLE}</h1>
</div>

	<div class="form-label-group">

		<input type="text" name="pseudo" id="inputPseudo" value="{$objUser->getPseudo()}" class="form-control" placeholder="Pseudo" required autofocus>
		<label for="inputPseudo">Pseudo</label>
	</div>

	<div class="form-label-group">
		<input type="text" name="last_name" id="inputNom" value="{$objUser->getLast_name()}" class="form-control" placeholder="Pseudo" required >
		<label for="inputNom">Nom</label>
	</div>

	<div class="form-label-group">
		<input type="text" name="first_name" id="inputPrenom"  value="{$objUser->getFirst_name()}" class="form-control" placeholder="Pseudo" required >
		<label for="inputPrenom">Prénom</label>
	</div>

	<div class="form-label-group">
		<input type="email" name="email" id="inputEmail" value="{$objUser->getEmail()}"  class="form-control" placeholder="Adresse Email" required>
		<label for="inputEmail">Adresse Email</label>
	</div>



	<div class="form-label-group">
		<input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Mot de Passe" required>
		<label for="inputPassword">Mot de Passe</label>
	</div>

	<div class="checkbox mb-3 small">
		<label>
			<input type="checkbox" value='true' required>
			En vous inscrivant, vous acceptez que vos données personnelles soient utilisées. Pour plus d'information consultez notre
			<a href="{base_url('pages/politique')}">Politique de Confidentialité</a>.
		</label>
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">S'Inscrire</button>

	<p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
</form>

<form class="form-signin" method="post">
	<div class="text-center mb-4">
		<img class="mb-4" src="{base_url('./assets/img/logo.svg')}" alt="logo beauté-naturelle" width="72" height="72">
		<h1 class="h3 mb-3 font-weight-normal">Inscrivez-vous</h1>
</div>

	<div class="form-label-group">
		<input type="text" name="pseudo" id="inputPseudo" class="form-control" placeholder="Pseudo" required autofocus>
		<label for="inputPseudo">Pseudo</label>
	</div>

	<div class="form-label-group">
		<input type="text" name="last_name" id="inputNom" class="form-control" placeholder="Pseudo" required autofocus>
		<label for="inputNom">Nom</label>
	</div>

	<div class="form-label-group">
		<input type="text" name="first_name" id="inputPrenom" class="form-control" placeholder="Pseudo" required autofocus>
		<label for="inputPrenom">Prénom</label>
	</div>

	<div class="form-label-group">
		<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Adresse Email" required>
		<label for="inputEmail">Adresse Email</label>
	</div>



	<div class="form-label-group">
		<input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Mot de Passe" required>
		<label for="inputPassword">Mot de Passe</label>
	</div>

	<div class="checkbox mb-3">
		<label>
			<input type="checkbox" value="remember-me"> Remember me
		</label>
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	<p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
</form>

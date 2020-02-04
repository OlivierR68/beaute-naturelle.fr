
<form method="post">

	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="inputPseudo">Pseudo :</label>
				<input type="text" name="pseudo" class="form-control" id="inputPseudo" value="{$objUser->getPseudo()}">
			</div>

			<div class="form-group">
				<label for="inputLast_name">Nom :</label>
				<input type="text" name="last_name" class="form-control" id="inputLast_name" value="{$objUser->getLast_name()}">
			</div>

			<div class="form-group">
				<label for="inputFirst_name">Prénom :</label>
				<input type="text" name="first_name" class="form-control" id="inputFirst_name" value="{$objUser->getFirst_name()}">
			</div>

			<div class="form-group">
				<label for="inputPseudo">Age  :</label>
				<input type="number" name="age" max="100" min="18" class="form-control" id="inputAge" value="{$objUser->getAge()}">
			</div>

			<div class="form-group">
				<label for="inputGender">Sexe : </label>
				<select class="form-control" id="inputGender">
					<option value="1" {if $objUser->getGender() eq 1}selected{/if}>Homme</option>
					<option value="2" {if $objUser->getGender() eq 2}selected{/if}>Femme</option>
					<option value="3" {if $objUser->getGender() eq 3}selected{/if}>Autre</option>
				</select>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="inputTel">Téléphone  :</label>
				<input type="tel" name="tel" class="form-control" id="inputTel" value="{$objUser->getAge()}">
			</div>

			<div class="form-group">
				<label for="inputEmail">Email :</label>
				<input type="email" name="email" class="form-control" id="inputEmail" value="{$objUser->getEmail()}" autocomplete="off">
			</div>

			<div class="form-group">
				<label for="inputPwd">Nouveau mot de passe :</label>
				<input type="password" name="pwd" class="form-control" id="inputPwd" autocomplete="off">
			</div>

			<div class="form-group">
				<label for="inputEmail">Confirmation nouveau mot de passe :</label>
				<input type="password" name="pconf" class="form-control" id="inputPconf" autocomplete="off">
			</div>
		</div>



	</div>

	<button type="submit" class="btn btn-primary">{$buttonSubmit}</button> <a href="{base_url('users/listPage')}" class="btn btn-dark">{$buttonCancel}</a>
</form>

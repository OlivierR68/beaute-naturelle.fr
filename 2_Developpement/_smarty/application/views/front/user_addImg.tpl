<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="inputName">Nom de l'image :</label>
		<input type="text" name="libelle" class="form-control" id="inputName">
	</div>

	<div class="form-group">
		<label for="inputName">desc</label>
		<input type="text" name="description" class="form-control" id="inputName" >
	</div>

    <input type="hidden" name="author" value="{$smarty.session.id}"
	<input type="hidden" name="publication" value="false"

				<input type="file" class="form-control-file" id="inputImg" name="img" accept=".jpg, .jpeg, .png, .gif" required>
			<small id="fileHelp" class="form-text text-muted">Taille maximum : 2 mo</small>



	<button type="submit" class="btn btn-primary">Ajouter</button> <a href="" class="btn btn-dark">Annuler</a>
</form>
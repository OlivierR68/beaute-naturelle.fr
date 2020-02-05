<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="inputName">Nom de l'image :</label>
		<input type="text" name="name" class="form-control" id="inputName" value="{$objImage->getLibelle()}">
	</div>

	<div class="form-group">

		<div class="form-group">
			{if (!empty($objImage->getId()))}
				<div>
					<img src="{base_url('assets/img/album/')}{$objImage->getSrc()}" alt="{$objImage->getDescription()}" class="w-25 py-4 border-light">
				</div>


				<label for="inputImg">Changer l'image :</label>
			{else}

				<label for="inputImg">Uploader une image :</label>

			{/if}

			<input type="file" class="form-control-file" id="inputImg" name="img" accept=".jpg, .jpeg, .png, .gif" required>
			<small id="fileHelp" class="form-text text-muted">Taille maximum : 2 mo</small>
		</div>

	</div>

	<div class="form-group">
		<label for="inputContent">Description :</label>
		<input type="textarea" name="content" class="form-control" id="inputContent" value="{$objImage->getDescription()}" required>
	</div>

	<button type="submit" class="btn btn-primary">{$buttonSubmit}</button> <a href="{base_url('images/listPage')}" class="btn btn-dark">{$buttonCancel}</a>
</form>
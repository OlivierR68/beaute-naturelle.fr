
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="inputLibelle">Libelle :</label>
		<input type="text" name="libelle" class="form-control" id="inputLibelle" value="{$objSlide->getLibelle()}">
	</div>

	<div class="form-group">

		<div class="form-group">
			{if (!empty($objSlide->getImg()))}
				<div>
					<img src="{base_url('uploads/slider/')}{$objSlide->getImg()}" alt="" class="w-25 py-4 border-light">
				</div>


				<label for="inputImg">Changer l'image :</label>
			{else}

				<label for="inputImg">Uploader une image :</label>

			{/if}

			<input type="file" class="form-control-file" id="inputImg" name="img" accept=".jpg, .jpeg, .png, .gif">
			<small id="fileHelp" class="form-text text-muted">Taille maximum : 2 mo</small>
		</div>

		
	</div>

	<div class="form-group">
		<div>
			<label for="inputType">Taille :</label>
		</div>

		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="type" id="inputType" value="h1" {if $objSlide->getType() eq 'h1'}checked{/if} required >
			<label class="form-check-label" for="inlineRadio1">Grand</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="type" id="inputType" value="h2" {if $objSlide->getType() eq 'h2'}checked{/if} required >
			<label class="form-check-label" for="inlineRadio2">Moyen</label>
		</div>
	</div>

	<div class="form-group">
		<label for="inputTitle">Titre :</label>
		<input type="text" name="title" class="form-control" id="inputTitle" value="{$objSlide->getTitle()}">
	</div>

	<div class="form-group">
		<label for="inputText">Texte :</label>
		<input type="text" name="text" class="form-control" id="inputText" value="{$objSlide->getText()}">
	</div>


	<button type="submit" class="btn btn-primary">{$buttonSubmit}</button> <a href="{base_url('slides/listPage')}" class="btn btn-dark">{$buttonCancel}</a>
</form>

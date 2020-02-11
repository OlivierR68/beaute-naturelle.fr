
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="inputLibelle">Libelle :</label>
		<input type="text" name="libelle" class="form-control" id="inputLibelle" value="<?php echo $objSlide->getLibelle() ?>">
	</div>

	<div class="form-group">

		<div class="form-group">
			<?php if (!empty($objSlide->getImg())) { ?>
				<div>
					<img src="<?php echo base_url('assets/img').'/'.$objSlide->getImg();  ?>" alt="" class="w-25 py-4 border-light">
				</div>


				<label for="inputImg">Changer l'image :</label>
			<?php } else { ?>

				<label for="inputImg">Uploader une image :</label>

			<?php } ?>

			<input type="file" class="form-control-file" id="inputImg" name="img" accept=".jpg, .jpeg, .png, .gif">
			<small id="fileHelp" class="form-text text-muted">Taille maximum : 2 mo</small>
		</div>

		
	</div>

	<div class="form-group">
		<div>
			<label for="inputType">Taille :</label>
		</div>

		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="type" id="inputType" value="h1" <?php if($objSlide->getType() == 'h1') echo 'checked' ?> required >
			<label class="form-check-label" for="inlineRadio1">Grand</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="type" id="inputType" value="h2" <?php if($objSlide->getType() == 'h2') echo 'checked' ?> required >
			<label class="form-check-label" for="inlineRadio2">Moyen</label>
		</div>
	</div>

	<div class="form-group">
		<label for="inputTitle">Titre :</label>
		<input type="text" name="title" class="form-control" id="inputTitle" value="<?php echo $objSlide->getTitle() ?>">
	</div>

	<div class="form-group">
		<label for="inputText">Texte :</label>
		<input type="text" name="text" class="form-control" id="inputText" value="<?php echo $objSlide->getText() ?>">
	</div>


	<button type="submit" class="btn btn-primary"><?php echo $buttonSubmit ?></button> <a href="<?php echo base_url('slides/listPage')?>" class="btn btn-dark"><?php echo $buttonCancel ?></a>
</form>

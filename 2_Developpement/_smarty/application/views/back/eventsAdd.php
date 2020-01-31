<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="inputName">Nom de l'événement :</label>
		<input type="text" name="name" class="form-control" id="inputName" value="<?php echo $objEvent->getName() ?>">
	</div>

	<div class="form-group">
		<label for="inputSlug">Mot clé de l'événement :</label>
		<input type="text" name="slug" class="form-control" id="inputSlug" value="<?php echo $objEvent->getSlug() ?>">
	</div>

	<div class="form-group">

		<div class="form-group">
			<?php if (!empty($objEvent->getImg())) { ?>
				<div>
					<img src="<?php echo base_url('assets/img').'/'.$objEvent->getImg();  ?>" alt="" class="w-25 py-4 border-light">
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
		<label for="inputContent">Contenu :</label>
		<input type="textarea" name="content" class="form-control" id="inputContent" value="<?php echo $objEvent->getContent() ?>">
	</div>

	<div class="form-group">
		<label for="inputCreateDate">Date de création :</label>
		<input type="date" name="create_date" class="form-control" id="inputCreateDate" value="<?php echo $objEvent->getCreate_date() ?>">
	</div>

	<div class="form-group">
		<label for="inputStartDate">Date de début :</label>
		<input type="date" name="start_date" class="form-control" id="inputStartDate" value="<?php echo $objEvent->getStart_date() ?>">
	</div>

    <div class="form-group">
		<label for="inputEndDate">Date de fin :</label>
		<input type="date" name="end_date" class="form-control" id="inputEndDate" value="<?php echo $objEvent->getEnd_date() ?>">
	</div>

    <div class="form-group">
		<label for="inputCapacity">Nombre de personnes possibles :</label>
		<input type="number" name="capacity" class="form-control" id="inputEndDate" value="<?php echo $objEvent->getCapacity() ?>">
	</div>


	<button type="submit" class="btn btn-primary"><?php echo $buttonSubmit ?></button> <a href="<?php echo base_url('slides/listPage')?>" class="btn btn-dark"><?php echo $buttonCancel ?></a>
</form>
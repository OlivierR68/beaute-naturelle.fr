<?php 
/*
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="inputName">Nom de l'événement :</label>
		<input type="text" name="name" class="form-control" id="inputName" value="<?php echo $objEvent->getName() ?>">
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
		<label for="inputTitle">Contenu :</label>
		<input type="textarea" name="content" class="form-control" id="inputContent" value="<?php echo $objEvent->getContent() ?>">
	</div>

	<div class="form-group">
		<label for="inputText">Date de début :</label>
		<input type="date" name="start_date" class="form-control" id="inputStartDate" value="<?php echo $objEvent->getStartDate() ?>">
	</div>

    <div class="form-group">
		<label for="inputText">Date de fin :</label>
		<input type="date" name="end_date" class="form-control" id="inputEndDate" value="<?php echo $objEvent->getEndDate() ?>">
	</div>

    <div class="form-group">
		<label for="inputText">Nombre de personnes possibles :</label>
		<input type="number" name="capacity" class="form-control" id="inputEndDate" value="<?php echo $objEvent->getCapacity() ?>">
	</div>


	<button type="submit" class="btn btn-primary"><?php echo $buttonSubmit ?></button> <a href="<?php echo base_url('slides/listPage')?>" class="btn btn-dark"><?php echo $buttonCancel ?></a>
</form>
*/
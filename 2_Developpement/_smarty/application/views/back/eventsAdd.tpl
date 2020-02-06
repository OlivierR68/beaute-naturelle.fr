<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="inputName">Nom de l'événement :</label>
		<input type="text" name="name" class="form-control" id="inputName" value="{$objEvent->getName()}" required>
	</div>
	

	<div class="form-group">
		<label for="inputStartDate">Date de début :</label>
		<input type="date" name="start_date" class="form-control" id="inputStartDate" value="{$objEvent->getStart_date()}" required>
	</div>

    <div class="form-group">
		<label for="inputEndDate">Date de fin :</label>
		<input type="date" name="end_date" class="form-control" id="inputEndDate" value="{$objEvent->getEnd_date()}" required>
	</div>

    <div class="form-group">
		<label for="inputCapacity">Nombre de personnes possibles :</label>
		<input type="number" name="capacity" class="form-control" id="inputEndDate" value="{$objEvent->getCapacity()}" required>
	</div>

	<div class="form-group">

		<div class="form-group">
			{if (!empty($objEvent->getImg()))}
				<div>
					<img src="{base_url('uploads/events/')}{$objEvent->getImg()}" alt="" class="w-25 py-4 border-light">
				</div>


				<label for="inputImg">Changer l'image :</label>
			{ else }

				<label for="inputImg">Uploader une image :</label>

			{/if }

			<input type="file" class="form-control-file" id="inputImg" name="img" accept=".jpg, .jpeg, .png, .gif">
			<small id="fileHelp" class="form-text text-muted">Taille maximum : 2 mo</small>
		</div>

		
	</div>

	<div class="form-group">
		<label for="inputContent">Contenu :</label>
		<textarea name="content" class="form-control" id="inputContent"  required>{$objEvent->getContent()}</textarea>
	</div>

	<button type="submit" class="btn btn-primary">{$buttonSubmit}</button> <a href="{base_url('events/listPage')}" class="btn btn-dark">{$buttonCancel}</a>
</form>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="inputLibelle">Libelle :</label>
		<input type="text" name="libelle" class="form-control" id="inputLibelle">
	</div>

	<div class="form-group">

		<div class="form-group">
			<label for="inputImg">Uploader une image :</label>
			<input type="file" class="form-control-file" id="inputImg" name="img">
		</div>

		
	</div>

	<div class="form-group">
		<label for="inputTitle">Titre :</label>
		<input type="text" name="title" class="form-control" id="inputTitle">
	</div>

	<div class="form-group">
		<label for="inputText">Description :</label>
		<input type="text" name="text" class="form-control" id="inputText" >
	</div>


	<button type="submit" class="btn btn-primary">Ajouter l'image</button> <a href="<?php echo base_url('images/listPage')?>" class="btn btn-dark">Annuler</a>
</form>

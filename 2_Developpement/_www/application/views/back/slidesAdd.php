<?php
/**
?>

<form>
	
<div class="form-row">
	<div class="col-md-12">
		<div class="form-group">
			<label for="inputLibelle" >Libelle :</label>
			<input class="form-control py-4" id="inputLibelle" type="text"  name="libelle" placeholder="Entrer le libelle" required/>
		</div>
	</div>

	<div class="col-md-12">
		<div class="form-group">
			<label for="inputImg" >Liens vers l'images ( à améliorer...) :</label>
			<input class="form-control py-4" id="inputImg" type="text" name="img" placeholder="Entrer le lien http de l'image" required />
		</div>

		<!--
		<div class="form-group">
			<label for="inputImg">Example file input</label>
			<input type="file" class="form-control-file" id="inputImg">
		</div>
		-->
	</div>

	<form action="" method="post">

		<div class="col-md-12">
			<div>
				<label for="inputLibelle" >Taille du texte :</label>
			</div>

			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="h1" required>
				<label class="form-check-label" for="inlineRadio1">Grand</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="h2" required>
				<label class="form-check-label" for="inlineRadio2">Moyen</label>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<label for="intputTitle">Titre :</label>
				<input class="form-control py-4" name="title" id="intputTitle" type="text" placeholder="Entrer le titre" required />
			</div>
		</div>

		<div class="form-group">
			<label for="intputSubTitle">Sous-titre :</label>
			<div class="w-100">
				<textarea class="form-control py-4" cols="300" name="text" id="intputSubTitle" ></textarea>
			</div>

		</div>
		<div>
			<input type="submit" class="btn btn-primary" value="Ajouter le slide">
			<a href="<?php echo site_url('slides/listPage') ?>" class="btn btn-dark">Annuler</a>
		</div>

	</form>

</form>

*/

?>

<form method="post">
	<div class="form-group">
		<label for="inputLibelle">Libelle :</label>
		<input type="text" name="libelle" class="form-control" id="inputLibelle">
	</div>

	<div class="form-group">
		<label for="inputImg">Image :</label>
		<input type="text" name="img" class="form-control" id="inputImg">
		
	</div>

	<div class="form-group">
		<div>
			<label for="inputType">Taille :</label>
		</div>

		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inputType" value="h1" required >
			<label class="form-check-label" for="inlineRadio1">Grand</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inputType" value="h2" required >
			<label class="form-check-label" for="inlineRadio2">Moyen</label>
		</div>
	</div>

	<div class="form-group">
		<label for="inputTitle">Titre :</label>
		<input type="text" name="title" class="form-control" id="inputTitle">
	</div>

	<div class="form-group">
		<label for="inputText">Texte :</label>
		<input type="text" name="text" class="form-control" id="inputText" >
	</div>


	<button type="submit" class="btn btn-primary">Submit</button>
</form>

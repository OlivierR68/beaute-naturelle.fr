<?php

?>

<form>
	
<div class="form-row">
	<div class="col-md-12">
		<div class="form-group">
			<label for="inputLibelle" >Libelle :</label>
			<input class="form-control py-4" id="inputLibelle" type="text" placeholder="Entrer le libelle" />
		</div>
	</div>

	<div class="col-md-12">
		<div class="form-group">
			<label for="inputImg" >Liens vers l'images ( à améliorer...) :</label>
			<input class="form-control py-4" id="inputImg" type="text" placeholder="Entrer le lien http de l'image" />
		</div>

		<!--
		<div class="form-group">
			<label for="inputImg">Example file input</label>
			<input type="file" class="form-control-file" id="inputImg">
		</div>
		-->
	</div>

	<form action="<?php echo site_url('slides/addSlide')?>" method="post">

		<div class="col-md-12">
			<div>
				<label for="inputLibelle" >Taille du texte :</label>
			</div>

			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="h1" required>
				<label class="form-check-label" for="inlineRadio1">Grand</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="h2" required>
				<label class="form-check-label" for="inlineRadio2">Moyen</label>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<label for="intputTitle">Titre :</label>
				<input class="form-control py-4" id="intputTitle" type="text" placeholder="Entrer le titre" required />
			</div>
		</div>

		<div class="form-group">
			<label for="intputSubTitle">Sous-titre :</label>
			<div class="w-100">
				<textarea class="form-control py-4" cols="300" id="intputSubTitle" ></textarea>
			</div>

		</div>
		<div>
			<button type="submit" class="btn btn-primary">Ajouter le slide</button>
			<a href="<?php echo site_url('slides/list') ?>" class="btn btn-dark">Annuler</a>
		</div>

	</form>

</form>

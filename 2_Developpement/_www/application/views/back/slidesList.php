<?php
// var_dump($arrSlides);
?>
<a class="btn btn-primary mb-3" href="<?php echo site_url('slides/add')?>" role="button">Ajouter un slide</a>

		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>#</th>
						<th>Actions</th>
						<th>Libelle</th>
						<th>Image</th>
						<th>Taille</th>
						<th>Titre</th>
						<th>Sous-titre</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>#</th>
						<th>Actions</th>
						<th>Libelle</th>
						<th>Image</th>
						<th>Taille</th>
						<th>Titre</th>
						<th>Sous-titre</th>
					</tr>
				</tfoot>
				<tbody>
				<?php
				foreach($arrSlides as $objSlide) { ?>
					<tr>
						<td><?php echo $objSlide->getPosition() ?></td>
						<td class="bn_action">

							<?php if($objSlide->getPosition() == 1) { ?>
								<i class="fas fa-arrow-up text-muted"></i> |
							<?php } else { ?>
								<a href="#" title="+ Position"><i class="fas fa-arrow-up"></i></a> |
							<?php } ?>

							<?php if($objSlide->getPosition() == count($arrSlides)) { ?>
								<i class="fas fa-arrow-down text-muted"></i> |
							<?php } else { ?>
								<a href="#" title="- Position"><i class="fas fa-arrow-down"></i></a> |
							<?php } ?>


							<a href="#" title="Modifier"><i class="far fa-edit"></i></a> |
							<a href="#" title="Copier"><i class="far fa-copy"></i></a> |

							<?php if($objSlide->getDefault() == true) { ?>
								<i title="slide" class="fas fa-trash-alt text-muted"></i>
							<?php } else { ?>
								<a href="#" title="Supprimer"><i class="fas fa-trash-alt text-danger"></i></a>
							<?php } ?>

						</td>

						<td><?php echo $objSlide->getLibelle() ?></td>
						<td><a target="_blank" href="<?php echo base_url("assets/img")."/".$objSlide->getImg() ?>"><?php echo $objSlide->getImg() ?></a></td>
						<td><?php echo $objSlide->getTaille() ?></td>
						<td><?php echo $objSlide->getShortTitle() ?></td>
						<td><?php echo $objSlide->getText() ?></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>

<?php
// var_dump($arrImages);
?>
<a class="btn btn-primary mb-3" href="<?php echo site_url('images/addEdit')?>" role="button">Ajouter une image</a>

		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>id</th>
						<th>Libelle</th>
						<th>Slug</th>
						<th>Source</th>
						<th>Description</th>
						<th>Auteur</th>
						<th>Date de publication</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>id</th>
						<th>Libelle</th>
						<th>Slug</th>
						<th>Source</th>
						<th>Description</th>
						<th>Auteur</th>
						<th>Date de publication</th>
					</tr>
				</tfoot>
				<tbody>
				<?php 
				foreach($arrImages as $objImage) { ?>
					<tr>
						<td><?php echo $objImage->getId() ?></td>
						<td class="bn_action">


							<a href="<?php echo base_url('images/addEdit/'.$objImage->getId())?>" title="Modifier"><i class="far fa-edit"></i></a> |
							<a href="<?php echo base_url('images/copy/'.$objImage->getId())?>" title="Copier"><i class="far fa-copy"></i></a> |

							<?php if($objImage->getId() == true) { ?>
								<i title="slide" class="fas fa-trash-alt text-muted"></i>
							<?php } else { ?>
								<a href="<?php echo base_url('images/delete/'.$objImages>getId())?>" title="Supprimer"><i class="fas fa-trash-alt text-danger"></i></a>
								<?php } ?>

						</td>
						<td><?php echo $objImage->getSlug() ?></td>
						<td><?php echo $objImage->getSrc() ?></td>
						<td><?php echo $objImage->getDescription() ?></td>
						<td><?php echo $objImage->getAuthor() ?></td>
						<td><?php echo $objImage->getPubli_date() ?></td>
					</tr>
					<?php }  ?>
				</tbody>
			</table>
		</div>

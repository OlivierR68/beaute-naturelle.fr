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
						<th>src</th>
						<th>Description</th>
						<th>Author</th>
						<th>Publi_date</th>
                        <th>Validation</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
                    <th>id</th>
						<th>Libelle</th>
						<th>Slug</th>
						<th>src</th>
						<th>Description</th>
						<th>Author</th>
						<th>Publi_date</th>
                        <th>Validation</th>
					</tr>
				</tfoot>
				<tbody>
				<?php
				foreach($arrImages as $objImage) { ?>
					<tr>
						<td><?php echo $objImage->getId() ?></td>
						<td class="bn_action">

							<?php /* à implémenter si j'ai le temps...

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
							*/ ?>

							<a href="#" title="Modifier"><i class="far fa-edit"></i></a> |
							<a href="#" title="Copier"><i class="far fa-copy"></i></a> |

							<?php if($objImage->getDefault() == true) { ?>
								<i title="image" class="fas fa-trash-alt text-muted"></i>
							<?php } else { ?>
								<a href="<?php echo base_url('images/delete/'.$objImage->getId()  ?>" title="Supprimer"><i class="fas fa-trash-alt text-danger"></i></a>
							<?php } ?>

						</td>

						<td><?php echo $objImage->getLibelle() ?></td>
						<td><a target="_blank" href="<?php echo base_url("assets/img")."/".$objImage->getImg() ?>"><?php echo $objImage->getImg() ?></a></td>
						<td><?php echo $objImage->getDescription() ?></td>
						<td><?php echo $objImage->getAuthor()) ?></td>
						<td><?php echo $objImage->getPubli_Date() ?></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>

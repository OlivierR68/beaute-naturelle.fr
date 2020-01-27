<?php

?>

		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Actions</th>
						<th>Id</th>
						<th>Libelle</th>
						<th>Image</th>
						<th>Type</th>
						<th>Titre</th>
						<th>Sous-titre</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Actions</th>
						<th>Id</th>
						<th>Libelle</th>
						<th>Image</th>
						<th>Type</th>
						<th>Titre</th>
						<th>Sous-titre</th>
					</tr>
				</tfoot>
				<tbody>
				<?php
				foreach($arrSlides as $objSlide) { ?>
					<tr>
						<td class="bn_action">
							<a href="#"><i class="fas fa-window-close text-danger"></i></a>
							<a href="#"><i class="fas fa-pen-square "></i></a>
						</td>
						<td><?php echo $objSlide->getId() ?></td>
						<td><?php echo $objSlide->getLibelle() ?></td>
						<td><a target="_blank" href="<?php echo base_url("assets/img")."/".$objSlide->getImg() ?>"><?php echo $objSlide->getImg() ?></a></td>
						<td><?php echo $objSlide->getType() ?></td>
						<td><?php echo $objSlide->getShortTitle() ?></td>
						<td><?php echo $objSlide->getText() ?></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>

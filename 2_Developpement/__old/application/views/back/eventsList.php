<a class="btn btn-primary mb-3" href="<?php echo site_url('events/addEdit')?>" role="button">Ajouter un événement</a>

		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>id</th>
						<th>Actions</th>
						<th>Nom</th>
                        <th>Image</th>
						<th>Contenu</th>
                        <th>Date de création</th>
						<th>Date de début</th>
						<th>Date de fin</th>
						<th>Capacité</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
                        <th>id</th>
						<th>Actions</th>
						<th>Nom</th>
                        <th>Image</th>
						<th>Contenu</th>
                        <th>Date de création</th>
						<th>Date de début</th>
						<th>Date de fin</th>
						<th>Capacité</th>
					</tr>
				</tfoot>
				<tbody>
				<?php
				foreach($arrEvents as $objEvent) { ?>
					<tr>
						<td><?php echo $objEvent->getId() ?></td>
						<td class="bn_action">
							<a href="<?php echo base_url('events/addEdit/'.$objEvent->getId())  ?>" title="Modifier"><i class="far fa-edit"></i></a> |
							<a href="<?php echo base_url('events/copy/'.$objEvent->getId())  ?>" title="Copier"><i class="far fa-copy"></i></a> |
							<a href="<?php echo base_url('events/delete/'.$objEvent->getId())  ?>" title="Supprimer"><i class="fas fa-trash-alt text-danger"></i></a>
						</td>

						<td><?php echo $objEvent->getName() ?></td>
						<td><a target="_blank" href="<?php echo base_url("assets/img/events")."/".$objEvent->getImg() ?>"><?php echo $objEvent->getImg() ?></a></td>
						<td><?php echo $objEvent->getShortContent(30) ?></td>
                        <td><?php echo $objEvent->getCreate_date_form() ?></td>
						<td><?php echo $objEvent->getStart_date_form() ?></td>
						<td><?php echo $objEvent->getEnd_date_form() ?></td>
                        <td><?php echo $objEvent->getCapacity() ?></td>
					</tr>
				<?php
					} ?>
				</tbody>
			</table>
		</div>

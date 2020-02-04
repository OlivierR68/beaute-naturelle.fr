<a class="btn btn-primary mb-3" href="{site_url('events/addEdit')}" role="button">Ajouter un événement</a>

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
				{foreach from=$arrEvents  item=$objEvent}
					<tr>
						<td>{$objEvent->getId()}</td>
						<td class="bn_action">
							<a href="{base_url('events/addEdit/')}{$objEvent->getId()}" title="Modifier"><i class="far fa-edit"></i></a>
							<a href="{base_url('events/copy/')}{$objEvent->getId()}" title="Copier"><i class="far fa-copy"></i></a>
							<a href="{base_url('events/delete/')}{$objEvent->getId()}" title="Supprimer"><i class="fas fa-trash-alt text-danger"></i></a>
						</td>

						<td>{$objEvent->getName()}</td>
						<td><a target="_blank" href="{base_url("assets/img/events")}{$objEvent->getImg()}">{$objEvent->getImg()}</a></td>
						<td>{$objEvent->getShortContent(30)}</td>
                        <td>{$objEvent->getCreate_date_form()}</td>
						<td>{$objEvent->getStart_date_form()}</td>
						<td>{$objEvent->getEnd_date_form()}</td>
                        <td>{$objEvent->getCapacity()}</td>
					</tr>
				{/foreach} 
				</tbody>
			</table>
		</div>

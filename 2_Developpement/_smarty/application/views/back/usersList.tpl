<a class="btn btn-primary mb-3" href="{site_url('users/addEdit')}" role="button">Ajouter un Utilisateur</a>

		<div class="table-responsive">
			<table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>id</th>
						<th>Actions</th>
						<th>Pseudo</th>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Email</th>
						<th>Profil</th>
						<th>Date D'inscription</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>id</th>
						<th>Actions</th>
						<th>Pseudo</th>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Email</th>
						<th>Profil</th>
						<th>Date D'inscription</th>
					</tr>
				</tfoot>
				<tbody>
                {foreach from=$arrUsers item=$objUser}

					<tr>
						<td>{$objUser->getId()}</td>
						<td class="bn_action nowrap">
							<a href="{base_url('users/addEdit/')}{$objUser->getId()}" title="Modifier"><i class="far fa-edit"></i></a>
							<a href="{base_url('users/delete/')}{$objUser->getId()}" title="Supprimer"><i class="fas fa-trash-alt text-danger"></i></a>
						</td>
						<td>{$objUser->getPseudo()}</td>
						<td>{$objUser->getLast_name()}</td>
						<td>{$objUser->getFirst_name()}</td>
						<td>{$objUser->getEmail()}</td>
						<td>{$objUser->getProfil_libelle()}</td>
						<td>{$objUser->getInscription_date()|date_format:"%D"}</td>
					</tr>
				{/foreach}
				</tbody>
			</table>
		</div>

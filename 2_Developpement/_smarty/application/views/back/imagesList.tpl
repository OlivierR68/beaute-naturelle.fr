<?php
// var_dump($arrImages);
?>
<a class="btn btn-primary mb-3" href="{site_url('images/addEdit')}" role="button">Ajouter une image</a>

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
				{foreach from=$arrImages item=$objImage}
					<tr>
						<td>{$objImage->getId()}</td>
						<td class="bn_action">


							<a href="{base_url('images/addEdit/'.$objImage->getId())}" title="Modifier"><i class="far fa-edit"></i></a> |
							<a href="{base_url('images/copy/'.$objImage->getId())}" title="Copier"><i class="far fa-copy"></i></a> |

							{if $objImage->getId() eq true}
								<i title="slide" class="fas fa-trash-alt text-muted"></i>
							{else}
								<a href="{base_url('images/delete/'.$objImages>getId())}  ?>" title="Supprimer"><i class="fas fa-trash-alt text-danger"></i></a>
							{/if}

						</td>
						<td>{$objImage->getSlug()}</td>
						<td>{$objImage->getSrc()}</td>
						<td>{$objImage->getDescription()}</td>
						<td>{$objImage->getAuthor()}</td>
						<td>{$objImage->getPubli_date()}</td>
					</tr>
				{/foreach}
				</tbody>
			</table>
		</div>
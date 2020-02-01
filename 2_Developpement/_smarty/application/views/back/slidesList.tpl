<a class="btn btn-primary mb-3" href="{site_url('slides/addEdit')}" role="button">Ajouter un slide</a>

		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>id</th>
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
						<th>id</th>
						<th>Actions</th>
						<th>Libelle</th>
						<th>Image</th>
						<th>Taille</th>
						<th>Titre</th>
						<th>Sous-titre</th>
					</tr>
				</tfoot>
				<tbody>
                {foreach from=$arrSlides item=$objSlide}

					<tr>
						<td>{$objSlide->getId()}</td>
						<td class="bn_action">

							{* à implémenter si j'ai le temps...

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

							*}

							<a href="{base_url('slides/addEdit/')}{$objSlide->getId()}" title="Modifier"><i class="far fa-edit"></i></a> |
							<a href="{base_url('slides/copy/')}{$objSlide->getId()}" title="Copier"><i class="far fa-copy"></i></a> |

							{if $objSlide->getDefault() eq true}
								<i title="slide" class="fas fa-trash-alt text-muted"></i>
							{else}
								<a href="{base_url('slides/delete/')}{$objSlide->getId()}" title="Supprimer"><i class="fas fa-trash-alt text-danger"></i></a>
							{/if}

						</td>

						<td>{$objSlide->getLibelle()}</td>
						<td><a target="_blank" href="{base_url('assets/img')}{$objSlide->getImg()}">{$objSlide->getImg()}</a></td>
						<td>{$objSlide->getTaille()}</td>
						<td>{$objSlide->getShortTitle(30)}</td>
						<td>{$objSlide->getText()}</td>
					</tr>
				{/foreach}
				</tbody>
			</table>
		</div>

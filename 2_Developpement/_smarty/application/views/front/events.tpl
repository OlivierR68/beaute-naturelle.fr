
<main class="container bn_content">

<!-- Foreach ici -->
	{foreach from=$arrEvents item=$objEvent}
		<article>
			<div class="row">
				<div class="col-4">

					<img class="img-fluid" src="{base_url("uploads/events/")}{$objEvent->getImg()}" alt="flacon d'huile" srcset="">

				</div>

				
				<div class="col-8">
					<span class="bn_h2-pre">Du {$objEvent->getStart_date_form()} au {$objEvent->getEnd_date_form()}</span>
					<h2>{$objEvent->getName()}</h2>
					<p>{$objEvent->getContent()}</p>
					<div>
						<span class="bn_h2-pre"><i class="fas fa-users"></i> Places disponibles : 1/{$objEvent->getCapacity()}</span>
					</div>
					<div class="bn_gap-10"></div>
					<div>
						<a  href="#" class="btn bn_btn-green text-uppercase">S'INSCRIRE</a>
					</div>
				</div>
			</div>
		</article>
		<div class="bn_gap-25"></div>
	{/foreach}
<!-- fin du foreach -->

</main>

<div class="bn_gap-100"></div>


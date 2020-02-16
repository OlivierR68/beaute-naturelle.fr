
<main class="container bn_content">

<!-- Foreach ici -->
	{foreach from=$arrEvents item=$objEvent}
		<article>
			<div class="row">
				<div class="col-4">

					<div class="border" style="width: 350px; height: 270px; background-image: url('{$objEvent->getImgUrl()}'); background-size: cover; background-position: center;">
					</div>

				</div>

				
				<div class="col-8">
					<span class="bn_h2-pre">Le {$objEvent->getStart_date_form()}</span>
					<h2>{$objEvent->getName()}</h2>
					<p>{$objEvent->getContent()}</p>
					<div>
						<span class="bn_h2-pre"><i class="fas fa-users"></i> Places disponibles : {$objEvent->getFilling()} / {$objEvent->getCapacity()}</span>
					</div>
					<div class="bn_gap-10"></div>
					<div>
						<a  href="{$objEvent->getUrl()}" class="btn bn_btn-green text-uppercase">EN SAVOIR PLUS</a>
					</div>
				</div>
			</div>
		</article>
		<div class="bn_gap-25"></div>
	{/foreach}
<!-- fin du foreach -->

</main>

<div class="bn_gap-100"></div>


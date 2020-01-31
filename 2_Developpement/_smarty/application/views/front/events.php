
<main class="container bn_content">

<!-- Foreach ici -->
	<?php foreach($arrEvents as $objEvent){ ?>
		<article>
			<div class="row">
				<div class="col-4">

					<img class="img-fluid" src="<?php echo base_url()."assets/img/".$objEvent->getImg() ?>" alt="flacon d'huile" srcset="">

				</div>

				
				<div class="col-8">
					<span class="bn_h2-pre">Du <?php echo $objEvent->getStart_date() ?> au <?php echo $objEvent->getEnd_date() ?></span>
					<h2><?php echo $objEvent->getName() ?></h2>
					<p><?php echo $objEvent->getContent() ?></p>
					<div>
						<span class="bn_h2-pre"><i class="fas fa-users"></i> Places disponibles : 1/<?php echo $objEvent->getCapacity() ?></span>
					</div>
					<div class="bn_gap-10"></div>
					<div>
						<a  href="#" class="btn bn_btn-green text-uppercase">S'INSCRIRE</a>
					</div>
				</div>
			</div>
		</article>
		<div class="bn_gap-25"></div>
	<?php } ?>
<!-- fin du foreach -->

</main>

<div class="bn_gap-100"></div>


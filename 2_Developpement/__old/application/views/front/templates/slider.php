<!-- SLIDER -->

<div class="container-fluid bn_bg-color-1 px-0 bn_decal-slider">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<?php for ($i = 0; $i < count($arrSlides);$i++){ ?>
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="<?php if($i === 0) echo 'active' ?>"></li>
				<?php } ?>
			</ol>
			<div class="carousel-inner justify-content-center">

			<!-- foreach ici -->

				<?php

				$slideCounter = 0;

				foreach($arrSlides as $objSlide) { ?>

					<div class="carousel-item <?php  if($slideCounter === 0) echo 'active'; ?>">

						<div class="bn_slide-bg" style="background-image: url(<?php echo base_url()."assets/img/".$objSlide->getImg() ?>)">
							<div class="bn_slide-banner">
								<div class="bn_slider-border">
									<span class="bn_<?php echo $objSlide->getType()?>"><?php echo $objSlide->getTitle() ?></span>
									<span class="bn_<?php echo $objSlide->getType()?>-pre"><?php echo $objSlide->getText() ?></span>
								</div>
							</div>
						</div>

					</div>
					$slideCounter++
					<!-- fin du foreach -->

					<?php
					$slideCounter++; } ?>



			</div>
		</div>
		<a class="carousel-control-prev bn_decal-slide-indic" href="#carouselExampleIndicators" role="button"
		   data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next bn_decal-slide-indic" href="#carouselExampleIndicators" role="button"
		   data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

</div>



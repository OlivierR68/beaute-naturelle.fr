<!-- SLIDER -->

<div class="container-fluid bn_bg-color-1 px-0 bn_decal-slider">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner justify-content-center">

			<!-- foreach ici -->

				<?php var_dump($arrSlides); ?>

				<div class="carousel-item active">

					<div class="bn_slide-bg bn_side-bg-1">
						<div class="bn_slide-banner">
							<div class="bn_slider-border">
								<span class="bn_h1">Le Choix</span>
								<span class="bn_h1-pre">Plus de 50 références bio</span>
							</div>
						</div>
					</div>

				</div>
			<!-- fin du foreach -->

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



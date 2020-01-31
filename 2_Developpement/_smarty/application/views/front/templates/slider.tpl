<!-- SLIDER -->

<div class="container-fluid bn_bg-color-1 px-0 bn_decal-slider">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				{for $i = 1 to count($arrSlides)}
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="{if $i eq 0}active{/if}"></li>
				{/for}
			</ol>
			<div class="carousel-inner justify-content-center">

			<!-- foreach ici -->



				{$slideCounter = 0}
				{foreach $arrSlides as $objSlide}

					<div class="carousel-item {if $slideCounter eq 0}active{/if}">

						<div class="bn_slide-bg" style="background-image: url({base_url("assets/img/")}{$objSlide->getImg()}">
							<div class="bn_slide-banner">
								<div class="bn_slider-border">
									<span class="bn_{$objSlide->getType()}">{$objSlide->getTitle()}</span>
									<span class="bn_{$objSlide->getType()}-pre">{$objSlide->getText()}</span>
								</div>
							</div>
						</div>

					</div>
					{$slideCounter++}
				{/foreach}



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



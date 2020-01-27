<main class="container bn_content">
	<section>

		<div class="row no-gutters">
			<div class="col-12 col-lg-6 d-flex align-items-center">
				<img src="<?php base_url() ?>assets/img/massage-huiles-essentielles.jpg" class="img-fluid w-100"
					 alt="massage au huiles essentielles">
			</div>
			<div class="col-12 col-lg-6 p-4">

				<span class="bn_h2-pre">Institut bio</span>
				<h2>Notre Concept</h2>

				<p>
					Idéal pour se ressourcer à l’abri de la ville. Notre institut de 300 m2 dédié à la beauté, au
					bien-être, propice au calme et à la sérénité. Notre institut vous permet de prendre soin de vous
					le
					temps d’une parenthèse beauté. Une pause bien-être durant laquelle vous profiterez des soins
					visages et corps prodigués par nos 5 esthéticiennes professionnelles. Choisissez, parmi toutes
					les prestations dont vous souhaitez profiter ou faire profiter.</p>


			</div>
		</div>
	</section>


</main>
<div class="bn_gap-50"></div>



<div class="container">

	<div class="row">
		<!-- Foreach de catégorie ici -->
		<?php 
            var_dump($arrCategorie);
            foreach($arrPrestations as $objPrestations) { ?>
       <a href="<?php base_url() ?>assets/img/prestations/presta-top-1.jpg" class="col-6 col-lg-3 p-0 bn_presta-block bn_presta-bg-1 d-flex">
        
			<div>
			        
			</div>
			<span>
                    épilations
                </span>

		</a>
		<?php } ?>
		<!-- fin du foreach -->

	</div>

</div>

<div class="bn_gap-100"></div>

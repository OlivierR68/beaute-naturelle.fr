<!-- BLOCK NEWSLETTER -->

<div class="bn_bg-color-2">
	<div class="container bn_block-newsletter text-center">
		<div class="bn_gap-25"></div>
		<label for="inputNewsletter" class="bn_h1" style="font-size: 1.4rem;">Abonnez-vous à notre Newsletter</label>
		<div class="form-inline justify-content-center align-items-center mt-2">
			<div class="form-group mt-3 mt-sm-0">
				<input type="email" class="form-control bn_newsletter-input" id="input-subscriber"
					   placeholder="Entrez votre adresse mail">
			</div>
			<button type="submit" type="button" class="bn_btn-green ml-2" id="subscribe-btn" data-toggle="modal" data-target="#newsletter-subscribe" class="btn bn_btn-green ml-2">VALIDER</button>
			<input type="hidden" id="hidden-is-in-base" value="{site_url('newsletter/isInBase')}">
			<input type="hidden" id="hidden-subscribe" value="{site_url('newsletter/subscribe')}">
		</div>
		<div class="bn_gap-30"></div>

	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="newsletter-subscribe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Inscription / Désinscription Newsletter</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Adresse mail : <span class="font-weight-bold" id="mail-modal"></span></p>
				<p>Status actuel : <span class="font-weight-bold" id="status-modal">-</span></p>
				<p id="ask-modal"></p>
				<p id="#infos-subscribre-modal"></p>
				<p class="small">Pour vous inscrire/désinscrire de la newsletter, entrez votre adresse mail dans la section "Abonnez-vous à notre Newsletter" du pied de page et cliquez sur "VALIDER". Ou contacter nous par mail à
					<a href="mailto:contact@beaute-naturelle.fr">contact@beaute-naturelle.fr</a>.</p>
				<p class="small">En validant cette fenêtre, vous acceptez de recevoir quotidiennement des mails d'information de notre part via courrier électronique,
				et vous prenez connaissance de notre <a href="{site_url('pages/politique')}">Politique de confidentialité</a>.</p>
			</div>
			<div class="modal-footer d-flex justify-content-center">
				<button type="button" class="bn_btn-green" data-dismiss="modal">ANNULER</button>
				<button type="button" id="confirm-modal" class="bn_btn-green d-none" data-dismiss="modal"></button>
			</div>
		</div>
	</div>
</div>

<!-- BLOCK FOOTER -->

<footer class="bn_bg-color-1">
	<div class="container">
		<div class="bn_gap-50"></div>
		<div class="row bn_footer-block">

			<div class="col-12 col-sm-6 col-lg-4 bn_infos">
				<div class="bn_h2-pre bn_color-white text-center text-sm-left">
					<a href="{site_url('pages/about')}">l'Établissement</a>
				</div>
				<div class="bn_h2 bn_color-white text-center text-sm-left">
					<a href="{site_url()}">Beauté Naturelle</a>
				</div>
				<div class="d-flex justify-content-center justify-content-sm-start">
					<ul class="list-unstyled">
						<li>
							<a href="{site_url('pages/contact')}">
                                    <span><i class="fas fa-map-marker-alt mr-1"></i> 328 rue des clefs, 68 000 Colmar</span>
							</a>
						</li>
						<li>
							<a href="{site_url('pages/contact')}">
                                    <span><i class="fas fa-phone-alt mr-1"></i> 03 89 54 56 46</span>
							</a>
						</li>
						<li>
							<a href="mailto:contact@beaute-naturelle.fr">
                                    <span><i class="far fa-envelope mr-1"></i> contact@beaute-naturelle.fr</span>
							</a>
						</li>
						<li>
                        	<span>
								<a href="{site_url('pages/contact')}"><i class="far fa-clock mr-1"></i> Ouvert tous les jours,<br>
									<span class="ml-3">(sauf le dimanche) de 9H00 à 18H00</span>
								</a>
							</span>
						</li>

					</ul>
				</div>



				<div class="d-lg-none bn_gap-50"></div>
			</div>

			<div class="col-12 col-sm-6 col-lg-3  text-center">
				<span>Suivez-Nous :</span>
				<div class="d-flex justify-content-center mt-2">
					<a href="https://fr-fr.facebook.com/" target="_blank" class=" bn_social-bottom"><i
							class="fab fa-facebook-square mx-1"></i></a>
					<a href="https://twitter.com/" target="_blank" class=" bn_social-bottom"><i
							class="fab fa-twitter-square mx-1"></i></a>
					<a href="https://www.instagram.com/" target="_blank" class=" bn_social-bottom"><i
							class="fab fa-instagram mx-1"></i></a>
				</div>
				<div class="d-lg-none bn_gap-50"></div>
			</div>

			<div class="col-12 col-lg-5 text-center text-lg-right">
				<div>
					<div class="bn_nav-bottom" class="bn_nav-bottom">
						<a class="bn_{active_page('pages/mentions')}" href="{site_url("pages/mentions")}">Mentions Légales</a> |
						<a class="bn_{active_page('pages/politique')}" href="{site_url("pages/politique")}">Politique de confidentialité</a> |
						<a class="bn_{active_page('pages/sitemap')}" href="{site_url("pages/sitemap")}">Plan du Site</a>
					</div>

					<div class="bn_nav-bottom">
						<a class="bn_{active_page('slides/home')}"	href="{site_url()}">Accueil</a> |
						<a class="bn_{active_page('events','active',1)}" href="{site_url("events")}">Événements</a> |
						<a class="bn_{active_page('prestations','active',1)}" href="{site_url("prestations")}">Prestations</a> |
						<a class="bn_{active_page('pages/about')}" href="{site_url("pages/about")}">L'Établissement</a> |
						<a class="bn_{active_page('images','active',1)}" href="{site_url("images")}">Galerie</a> |
						<a class="bn_{active_page('pages/contact')}" href="{site_url("pages/contact")}">Contact</a>
					</div>
				</div>

				<div class="d-flex justify-content-center justify-content-lg-end bn_payment mt-2">
					<img src="{base_url("assets/img/pay-cash.svg")}" class="mx-2" alt="Logo paiement liquide">
					<img src="{base_url("assets/img/pay-cb.svg")}" class="mx-2" alt="Logo paiement Carte bleu">
					<i class="fab fa-cc-visa mx-2"></i>
					<i class="fab fa-cc-mastercard mx-2"></i>
					<i class="fab fa-cc-apple-pay ml-2"></i>

				</div>
			</div>
			<div class="d-lg-none bn_gap-50"></div>
		</div>

	</div>

	</div>

	<!--- Copyright -->

	<div class="bn_gap-25"></div>
	<div class="container text-center">
            <span class="bn_copyright ">Tous droits réservés 2010-2020 - Beauté Naturelle - Site réalisé par <a
					href="http://webolive.fr" target="_blank">Studio 241</a></span>
	</div>


</footer>


<!-- Bootstrap js -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<!-- SCRIPTS -->
<script src="{base_url("assets/js/main.js")}"></script>
<script src="{base_url('assets/vendor/lightbox/js/lightbox.min.js')}"></script>
<script src="https://kit.fontawesome.com/defbc714c8.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>

</body>
</html>

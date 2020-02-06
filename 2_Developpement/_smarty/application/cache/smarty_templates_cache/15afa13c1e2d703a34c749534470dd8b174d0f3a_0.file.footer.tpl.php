<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-01 17:11:49
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\front\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e35b155a46d37_74916140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15afa13c1e2d703a34c749534470dd8b174d0f3a' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\front\\templates\\footer.tpl',
      1 => 1580577108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e35b155a46d37_74916140 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- BLOCK NEWSLETTER -->

<div class="bn_bg-color-2">
	<div class="container bn_block-newsletter text-center">
		<div class="bn_gap-25"></div>
		<label for="inputNewsletter" class="bn_h1" style="font-size: 1.4rem;">Abonnez-vous à notre Newsletter</label>
		<form class="form-inline justify-content-center align-items-center mt-2">
			<div class="form-group mt-3 mt-sm-0">
				<input type="email" class="form-control bn_newsletter-input" id="inputNewsletter"
					   placeholder="Entrez votre adresse mail">
			</div>
			<button type="submit" class="btn bn_btn-green ml-2">VALIDER</button>
		</form>
		<div class="bn_gap-30"></div>

	</div>
</div>

<!-- BLOCK FOOTER -->

<footer class="bn_bg-color-1">
	<div class="container">
		<div class="bn_gap-50"></div>
		<div class="row bn_footer-block">

			<div class="col-12 col-sm-6 col-lg-4 bn_infos">
				<div class="bn_h2-pre bn_color-white text-center text-sm-left">
					<a href="<?php echo site_url('pages/about');?>
">l'Établissement</a>
				</div>
				<div class="bn_h2 bn_color-white text-center text-sm-left">
					<a href="<?php echo site_url();?>
">Beauté Naturelle</a>
				</div>
				<div class="d-flex justify-content-center justify-content-sm-start">
					<ul class="list-unstyled">
						<li>
							<a href="<?php echo site_url('pages/contact');?>
">
                                    <span><i class="fas fa-map-marker-alt mr-1"></i> 328 rue des clefs, 68 000 Colmar</span>
							</a>
						</li>
						<li>
							<a href="<?php echo site_url('pages/contact');?>
">
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
								<a href="<?php echo site_url('pages/contact');?>
"><i class="far fa-clock mr-1"></i> Ouvert tous les jours,<br>
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
						<a class="bn_<?php echo active_page('pages/mentions');?>
" href="<?php echo site_url("pages/mentions");?>
">Mentions Légales</a> |
						<a class="bn_<?php echo active_page('pages/politique');?>
" href="<?php echo site_url("pages/politique");?>
">Politique de confidentialité</a> |
						<a class="bn_<?php echo active_page('pages/sitemap');?>
" href="<?php echo site_url("pages/sitemap");?>
">Plan du Site</a>
					</div>

					<div class="bn_nav-bottom">
						<a class="bn_<?php echo active_page('slides/home');?>
"	href="<?php echo site_url();?>
">Accueil</a> |
						<a class="bn_<?php echo active_page('events');?>
" href="<?php echo site_url("events");?>
">Événements</a> |
						<a class="bn_<?php echo active_page('prestations');?>
" href="<?php echo site_url("prestations");?>
">Prestations</a> |
						<a class="bn_<?php echo active_page('pages/about');?>
" href="<?php echo site_url("pages/about");?>
">L'Établissement</a> |
						<a class="bn_<?php echo active_page('images');?>
" href="<?php echo site_url("images");?>
">Galerie</a> |
						<a class="bn_<?php echo active_page('pages/contact');?>
" href="<?php echo site_url("pages/contact");?>
">Contact</a>
					</div>
				</div>

				<div class="d-flex justify-content-center justify-content-lg-end bn_payment mt-2">
					<img src="<?php echo base_url("assets/img/pay-cash.svg");?>
" class="mx-2" alt="Logo paiement liquide">
					<img src="<?php echo base_url("assets/img/pay-cb.svg");?>
" class="mx-2" alt="Logo paiement Carte bleu">
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
            <span class="bn_copyright ">Tous droits réservés 2010-2019 - Beauté Naturelle - Site réalisé par <a
					href="http://webolive.fr" target="_blank">Studio 241</a></span>
	</div>


</footer>


<!-- Bootstrap js -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
<?php echo '</script'; ?>
>
<!-- SCRIPTS -->
<?php echo '<script'; ?>
 src="<?php echo base_url("assets/js/main.js");?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/defbc714c8.js" crossorigin="anonymous"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
}

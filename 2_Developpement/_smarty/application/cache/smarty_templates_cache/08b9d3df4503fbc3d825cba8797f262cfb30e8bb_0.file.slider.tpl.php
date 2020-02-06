<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-31 21:29:25
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\front\templates\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e349c3597c113_21149027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08b9d3df4503fbc3d825cba8797f262cfb30e8bb' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\front\\templates\\slider.tpl',
      1 => 1580506164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e349c3597c113_21149027 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- SLIDER -->

<div class="container-fluid bn_bg-color-1 px-0 bn_decal-slider">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['arrSlides']->value)+1 - (1) : 1-(count($_smarty_tpl->tpl_vars['arrSlides']->value))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>active<?php }?>"></li>
				<?php }
}
?>
			</ol>
			<div class="carousel-inner justify-content-center">

			<!-- foreach ici -->



				<?php $_smarty_tpl->_assignInScope('slideCounter', 0);?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrSlides']->value, 'objSlide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['objSlide']->value) {
?>

					<div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['slideCounter']->value == 0) {?>active<?php }?>">

						<div class="bn_slide-bg" style="background-image: url(<?php echo base_url("assets/img/");
echo $_smarty_tpl->tpl_vars['objSlide']->value->getImg();?>
">
							<div class="bn_slide-banner">
								<div class="bn_slider-border">
									<span class="bn_<?php echo $_smarty_tpl->tpl_vars['objSlide']->value->getType();?>
"><?php echo $_smarty_tpl->tpl_vars['objSlide']->value->getTitle();?>
</span>
									<span class="bn_<?php echo $_smarty_tpl->tpl_vars['objSlide']->value->getType();?>
-pre"><?php echo $_smarty_tpl->tpl_vars['objSlide']->value->getText();?>
</span>
								</div>
							</div>
						</div>

					</div>
					<?php echo $_smarty_tpl->tpl_vars['slideCounter']->value++;?>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



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


<?php }
}

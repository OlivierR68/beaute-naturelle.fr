<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-05 20:02:20
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\front\events.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3b1f4cd66546_42226389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf0fd70626094209459f5cacc0daf9cee32151ba' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\front\\events.tpl',
      1 => 1580836369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3b1f4cd66546_42226389 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="container bn_content">

<!-- Foreach ici -->
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrEvents']->value, 'objEvent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['objEvent']->value) {
?>
		<article>
			<div class="row">
				<div class="col-4">

					<img class="img-fluid" src="<?php echo base_url("assets/img/");
echo $_smarty_tpl->tpl_vars['objEvent']->value->getImg();?>
" alt="flacon d'huile" srcset="">

				</div>

				
				<div class="col-8">
					<span class="bn_h2-pre">Du <?php echo $_smarty_tpl->tpl_vars['objEvent']->value->getStart_date_form();?>
 au <?php echo $_smarty_tpl->tpl_vars['objEvent']->value->getEnd_date_form();?>
</span>
					<h2><?php echo $_smarty_tpl->tpl_vars['objEvent']->value->getName();?>
</h2>
					<p><?php echo $_smarty_tpl->tpl_vars['objEvent']->value->getContent();?>
</p>
					<div>
						<span class="bn_h2-pre"><i class="fas fa-users"></i> Places disponibles : 1/<?php echo $_smarty_tpl->tpl_vars['objEvent']->value->getCapacity();?>
</span>
					</div>
					<div class="bn_gap-10"></div>
					<div>
						<a  href="#" class="btn bn_btn-green text-uppercase">S'INSCRIRE</a>
					</div>
				</div>
			</div>
		</article>
		<div class="bn_gap-25"></div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- fin du foreach -->

</main>

<div class="bn_gap-100"></div>

<?php }
}

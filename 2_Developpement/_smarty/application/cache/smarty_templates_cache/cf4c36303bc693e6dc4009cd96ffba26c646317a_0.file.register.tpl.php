<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-05 19:55:04
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\front\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3b1d98d34608_30253458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf4c36303bc693e6dc4009cd96ffba26c646317a' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\front\\register.tpl',
      1 => 1580932491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3b1d98d34608_30253458 (Smarty_Internal_Template $_smarty_tpl) {
echo form_open('users/register2','class="form-signin"');?>

<div class="text-center my-4">
	<img class="mb-4" src="<?php echo base_url('./assets/img/logo.svg');?>
" alt="logo beauté-naturelle" width="140" height="140">
	<h1 class="h3 mb-3 font-weight-normal"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</h1>
</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inputArray']->value, 'arrGroup');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['arrGroup']->value) {
?>
<div class="form-label-group">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrGroup']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['item']->value;?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<div class="form-group small">
	<div class="form-check">
		<input class="form-check-input" type="checkbox" name="rgpd" <?php if (isset($_POST['rgpd'])) {?>checked<?php }?> id="rgpdCheck" required>
		<label class="form-check-label" for="rgpdCheck">
			En soumettant cce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de l'utilisation des services du site,
			<a href="<?php echo site_url('pages/politique');?>
">Politique de confidentialités.</a>
		</label>
	</div>
</div>
<button class="btn btn-lg btn-primary btn-block" type="submit">S'Inscrire</button>

<p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
<?php echo form_close();?>



<?php }
}

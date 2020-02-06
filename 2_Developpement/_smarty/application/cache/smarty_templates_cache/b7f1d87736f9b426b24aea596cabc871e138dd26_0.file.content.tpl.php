<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 22:42:02
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\back\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e39f33ae6caf1_41057223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7f1d87736f9b426b24aea596cabc871e138dd26' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\back\\content.tpl',
      1 => 1580856121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./templates/header.tpl' => 1,
    'file:./templates/footer.tpl' => 1,
  ),
),false)) {
function content_5e39f33ae6caf1_41057223 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:./templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">

	<h1 class="mt-4"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</h1>
    <?php if (ctrl_name() != 'dashboard') {?>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
            <li><a href="<?php echo site_url('dashboard');?>
">Tableau de bord</a> / <a href="<?php echo base_url();
echo ctrl_name();?>
/ListPage"><?php echo ctrl_slug();?>
</a> / <?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</li>
        </ol>
    <?php }?>

	<?php if (!empty($_smarty_tpl->tpl_vars['ERROR']->value)) {?>
		<div class="alert alert-danger" role="alert">
			<?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

		</div>
    <?php }?>

    <?php if (!empty(flash_data('error'))) {?>
    <div class="alert alert-danger" role="alert">
        <?php echo flash_data('error');?>

    </div>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['SUCCESS']->value)) {?>
    <div class="alert alert-success" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

    </div>
    <?php }?>

    <?php if (!empty(flash_data('success'))) {?>
		<div class="alert alert-success" role="alert">
            <?php echo flash_data('success');?>

		</div>
    <?php }?>


<?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>


</div>

<?php $_smarty_tpl->_subTemplateRender("file:./templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 17:27:49
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\front\min-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e39a995494095_01848684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ad320b96ee78076e6a4088ccc1dbfc6e667c6de' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\front\\min-content.tpl',
      1 => 1580836369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./templates/min-header.tpl' => 1,
    'file:./templates/min-footer.tpl' => 1,
  ),
),false)) {
function content_5e39a995494095_01848684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./templates/min-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['SUCCESS']->value)) {?>
    <div class="text-center" >
        <div class="alert alert-success d-inline" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

        </div>
    </div>
<?php }?>

<?php if (((flash_data('success') !== null ))) {?>
    <div class="alert alert-success text-center d-inline" role="alert">
        <?php echo flash_data('success');?>

    </div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['ERRORS']->value)) {?>
    <div class="text-center" >
        <div class="alert alert-danger d-inline" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['ERRORS']->value;?>

        </div>
    </div>
<?php }?>

<?php if (((flash_data('errors') !== null ))) {?>
    <div class="alert alert-danger text-center" role="alert">
        <?php echo flash_data('errors');?>

    </div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

<?php $_smarty_tpl->_subTemplateRender("file:./templates/min-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

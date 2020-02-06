<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-05 20:02:30
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\front\images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3b1f56d3afa8_77256419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac6740783040fc2a632f208581484941cc4a67b9' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\front\\images.tpl',
      1 => 1580836369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3b1f56d3afa8_77256419 (Smarty_Internal_Template $_smarty_tpl) {
?>

<main class="container bn_content">
        <div class="row no-gutters bn_galerie">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrImages']->value, 'objImage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['objImage']->value) {
?>                   
            
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    
                    <a src="<?php echo base_url("assets/img/album/");
echo $_smarty_tpl->tpl_vars['objImage']->value->getSrc();?>
" data-lightbox="roadtrip">
                    <div class="bn_galerie-img">
                        <img src="<?php echo base_url("assets/img/album/");
echo $_smarty_tpl->tpl_vars['objImage']->value->getSrc();?>
" alt="Belle Photo">
                           <p><?php echo $_smarty_tpl->tpl_vars['objImage']->value->getAuthor();?>
</p>
                    </div>

                </a>
            </div>
            
            <!-- fin du foreach -->
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
</main>

<div class="bn_gap-100"></div>

<?php }
}

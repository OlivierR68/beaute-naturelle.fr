<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 20:13:20
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\front\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e39d060318193_87398182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4801d70f17db0015f0b85a40d1185d3ae828ff09' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\front\\login.tpl',
      1 => 1580847192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e39d060318193_87398182 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form-signin" method="post">
    <div class="text-center my-4">
        <img class="mb-4" src="<?php echo base_url('./assets/img/logo.svg');?>
" alt="logo beauté-naturelle" width="140" height="140">
        <h1 class="h3 mb-3 font-weight-normal"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</h1>
    </div>


    <div class="form-label-group">
        <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputEmail">Email</label>
    </div>
    <div class="form-label-group">
        <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Mot de Passe" required>
        <label for="inputPassword">Mot de Passe</label>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Se Connecter</button>

    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
</form>
<?php }
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 23:07:39
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\back\usersAdd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e39f93b076cc6_20400911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94d7006e2d1d0ceb9934079ef0ba1db01e95f2bb' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\back\\usersAdd.tpl',
      1 => 1580857657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e39f93b076cc6_20400911 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="post">

	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="inputPseudo">Pseudo :</label>
				<input type="text" name="pseudo" class="form-control" id="inputPseudo" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getPseudo();?>
">
			</div>

			<div class="form-group">
				<label for="inputLast_name">Nom :</label>
				<input type="text" name="last_name" class="form-control" id="inputLast_name" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getLast_name();?>
">
			</div>

			<div class="form-group">
				<label for="inputFirst_name">Prénom :</label>
				<input type="text" name="first_name" class="form-control" id="inputFirst_name" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getFirst_name();?>
">
			</div>

			<div class="form-group">
				<label for="inputPseudo">Age  :</label>
				<input type="number" name="age" max="100" min="18" class="form-control" id="inputAge" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getAge();?>
">
			</div>

			<div class="form-group">
				<label for="inputGender">Sexe : </label>
				<select class="form-control" id="inputGender" name="gender">
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['objUser']->value->getGender() == 1) {?>selected<?php }?>>Homme</option>
					<option value="2" <?php if ($_smarty_tpl->tpl_vars['objUser']->value->getGender() == 2) {?>selected<?php }?>>Femme</option>
					<option value="3" <?php if ($_smarty_tpl->tpl_vars['objUser']->value->getGender() == 3) {?>selected<?php }?>>Autre</option>
				</select>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="inputTel">Téléphone  :</label>
				<input type="tel" name="tel" class="form-control" id="inputTel" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getTel();?>
">
			</div>

			<div class="form-group">
				<label for="inputEmail">Email :</label>
				<input type="email" name="email" class="form-control" id="inputEmail" value="<?php echo $_smarty_tpl->tpl_vars['objUser']->value->getEmail();?>
" autocomplete="off">
			</div>

			<div class="form-group">
				<label for="inputPwd">Nouveau mot de passe :</label>
				<input type="password" name="pwd" class="form-control" id="inputPwd" autocomplete="off">
			</div>

			<div class="form-group">
				<label for="inputEmail">Confirmation nouveau mot de passe :</label>
				<input type="password" name="pconf" class="form-control" id="inputPconf" autocomplete="off">
			</div>

			<div class="form-group">
				<label for="inputProfil">Profil id (à refaire...)</label>
				<select class="form-control" id="inputProfil" name="profil_id">
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['objUser']->value->getGender() == 1) {?>selected<?php }?>>Membre</option>
					<option value="2" <?php if ($_smarty_tpl->tpl_vars['objUser']->value->getGender() == 2) {?>selected<?php }?>>Modérateur</option>
					<option value="3" <?php if ($_smarty_tpl->tpl_vars['objUser']->value->getGender() == 3) {?>selected<?php }?>>Administrateur</option>
				</select>
			</div>
		</div>



	</div>

	<button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['buttonSubmit']->value;?>
</button> <a href="<?php echo base_url('users/listPage');?>
" class="btn btn-dark"><?php echo $_smarty_tpl->tpl_vars['buttonCancel']->value;?>
</a>
</form>
<?php }
}

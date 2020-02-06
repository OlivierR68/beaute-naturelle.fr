<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-01 18:08:48
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\back\slidesAdd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e35beb0943074_17609088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f1f71d8e2272a0e2e9ec89ad7672a95c22e4267' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\back\\slidesAdd.tpl',
      1 => 1580580526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e35beb0943074_17609088 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="inputLibelle">Libelle :</label>
		<input type="text" name="libelle" class="form-control" id="inputLibelle" value="<?php echo $_smarty_tpl->tpl_vars['objSlide']->value->getLibelle();?>
">
	</div>

	<div class="form-group">

		<div class="form-group">
			<?php if ((!empty($_smarty_tpl->tpl_vars['objSlide']->value->getImg()))) {?>
				<div>
					<img src="<?php echo base_url('assets/img/');
echo $_smarty_tpl->tpl_vars['objSlide']->value->getImg();?>
" alt="" class="w-25 py-4 border-light">
				</div>


				<label for="inputImg">Changer l'image :</label>
			<?php } else { ?>

				<label for="inputImg">Uploader une image :</label>

			<?php }?>

			<input type="file" class="form-control-file" id="inputImg" name="img" accept=".jpg, .jpeg, .png, .gif">
			<small id="fileHelp" class="form-text text-muted">Taille maximum : 2 mo</small>
		</div>

		
	</div>

	<div class="form-group">
		<div>
			<label for="inputType">Taille :</label>
		</div>

		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="type" id="inputType" value="h1" <?php if ($_smarty_tpl->tpl_vars['objSlide']->value->getType() == 'h1') {?>checked<?php }?> required >
			<label class="form-check-label" for="inlineRadio1">Grand</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="type" id="inputType" value="h2" <?php if ($_smarty_tpl->tpl_vars['objSlide']->value->getType() == 'h2') {?>checked<?php }?> required >
			<label class="form-check-label" for="inlineRadio2">Moyen</label>
		</div>
	</div>

	<div class="form-group">
		<label for="inputTitle">Titre :</label>
		<input type="text" name="title" class="form-control" id="inputTitle" value="<?php echo $_smarty_tpl->tpl_vars['objSlide']->value->getTitle();?>
">
	</div>

	<div class="form-group">
		<label for="inputText">Texte :</label>
		<input type="text" name="text" class="form-control" id="inputText" value="<?php echo $_smarty_tpl->tpl_vars['objSlide']->value->getText();?>
">
	</div>


	<button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['buttonSubmit']->value;?>
</button> <a href="<?php echo base_url('slides/listPage');?>
" class="btn btn-dark"><?php echo $_smarty_tpl->tpl_vars['buttonCancel']->value;?>
</a>
</form>
<?php }
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 21:56:43
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\back\slidesList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e39e89bada2a2_35707333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29d5b59bcfa3927a6b39d2056ed7fadc4b98fcfb' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\back\\slidesList.tpl',
      1 => 1580848821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e39e89bada2a2_35707333 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="btn btn-primary mb-3" href="<?php echo site_url('slides/addEdit');?>
" role="button">Ajouter un slide</a>

		<div class="table-responsive">
			<table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>id</th>
						<th>Actions</th>
						<th>Libelle</th>
						<th>Image</th>
						<th>Taille</th>
						<th>Titre</th>
						<th>Sous-titre</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>id</th>
						<th>Actions</th>
						<th>Libelle</th>
						<th>Image</th>
						<th>Taille</th>
						<th>Titre</th>
						<th>Sous-titre</th>
					</tr>
				</tfoot>
				<tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrSlides']->value, 'objSlide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['objSlide']->value) {
?>

					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['objSlide']->value->getId();?>
</td>
						<td class="bn_action nowrap">

														<a href="<?php echo base_url('slides/copy/');
echo $_smarty_tpl->tpl_vars['objSlide']->value->getId();?>
" title="Copier"><i class="far fa-copy"></i></a>
							<?php if ($_smarty_tpl->tpl_vars['objSlide']->value->getDefault() == true) {?>
								<i title="slide" class="fas fa-edit text-muted"></i>
								<i title="slide" class="fas fa-trash-alt text-muted"></i>
							<?php } else { ?>
								<a href="<?php echo base_url('slides/addEdit/');
echo $_smarty_tpl->tpl_vars['objSlide']->value->getId();?>
" title="Modifier"><i class="far fa-edit"></i></a>
								<a href="<?php echo base_url('slides/delete/');
echo $_smarty_tpl->tpl_vars['objSlide']->value->getId();?>
" title="Supprimer"><i class="fas fa-trash-alt text-danger"></i></a>
							<?php }?>
						</td>

						<td><?php echo $_smarty_tpl->tpl_vars['objSlide']->value->getLibelle();?>
</td>
						<?php if ($_smarty_tpl->tpl_vars['objSlide']->value->getDefault() == true) {?>
						<td><a target="_blank" href="<?php echo base_url('assets/img');
echo $_smarty_tpl->tpl_vars['objSlide']->value->getImg();?>
"><?php echo $_smarty_tpl->tpl_vars['objSlide']->value->getImg();?>
</a></td>
						<?php } else { ?>
						<td><a target="_blank" href="<?php echo base_url('uploads/slides');
echo $_smarty_tpl->tpl_vars['objSlide']->value->getImg();?>
"><?php echo $_smarty_tpl->tpl_vars['objSlide']->value->getImg();?>
</a></td>
						<?php }?>
						<td><?php echo $_smarty_tpl->tpl_vars['objSlide']->value->getTaille();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['objSlide']->value->getShortTitle(60);?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['objSlide']->value->getText();?>
</td>
					</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>
		</div>
<?php }
}

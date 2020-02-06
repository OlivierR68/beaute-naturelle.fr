<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 22:54:25
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\back\usersList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e39f6217efcf5_66141670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a9d580c09ef6e15f61edd956f9ab6767b5cbae8' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\back\\usersList.tpl',
      1 => 1580856859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e39f6217efcf5_66141670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\third_party\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<a class="btn btn-primary mb-3" href="<?php echo site_url('users/addEdit');?>
" role="button">Ajouter un Utilisateur</a>

		<div class="table-responsive">
			<table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>id</th>
						<th>Actions</th>
						<th>Pseudo</th>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Email</th>
						<th>Profil</th>
						<th>Date D'inscription</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>id</th>
						<th>Actions</th>
						<th>Pseudo</th>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Email</th>
						<th>Profil</th>
						<th>Date D'inscription</th>
					</tr>
				</tfoot>
				<tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrUsers']->value, 'objUser');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['objUser']->value) {
?>

					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getId();?>
</td>
						<td class="bn_action nowrap">
							<a href="<?php echo base_url('users/addEdit/');
echo $_smarty_tpl->tpl_vars['objUser']->value->getId();?>
" title="Modifier"><i class="far fa-edit"></i></a>
							<a href="<?php echo base_url('users/delete/');
echo $_smarty_tpl->tpl_vars['objUser']->value->getId();?>
" title="Supprimer"><i class="fas fa-trash-alt text-danger"></i></a>
						</td>
						<td><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getPseudo();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getLast_name();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getFirst_name();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getEmail();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['objUser']->value->getProfil_libelle();?>
</td>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['objUser']->value->getInscription_date(),"%D");?>
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

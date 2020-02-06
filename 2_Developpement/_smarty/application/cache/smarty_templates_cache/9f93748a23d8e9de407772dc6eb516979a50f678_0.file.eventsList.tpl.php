<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 22:53:14
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\back\eventsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e39f5dac22823_78998682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f93748a23d8e9de407772dc6eb516979a50f678' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\back\\eventsList.tpl',
      1 => 1580836369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e39f5dac22823_78998682 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="btn btn-primary mb-3" href="<?php echo site_url('events/addEdit');?>
" role="button">Ajouter un événement</a>

		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>id</th>
						<th>Actions</th>
						<th>Nom</th>
                        <th>Image</th>
						<th>Contenu</th>
                        <th>Date de création</th>
						<th>Date de début</th>
						<th>Date de fin</th>
						<th>Capacité</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
                        <th>id</th>
						<th>Actions</th>
						<th>Nom</th>
                        <th>Image</th>
						<th>Contenu</th>
                        <th>Date de création</th>
						<th>Date de début</th>
						<th>Date de fin</th>
						<th>Capacité</th>
					</tr>
				</tfoot>
				<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrEvents']->value, 'objEvent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['objEvent']->value) {
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['objEvent']->value->getId();?>
</td>
						<td class="bn_action">
							<a href="<?php echo base_url('events/addEdit/');
echo $_smarty_tpl->tpl_vars['objEvent']->value->getId();?>
" title="Modifier"><i class="far fa-edit"></i></a>
							<a href="<?php echo base_url('events/copy/');
echo $_smarty_tpl->tpl_vars['objEvent']->value->getId();?>
" title="Copier"><i class="far fa-copy"></i></a>
							<a href="<?php echo base_url('events/delete/');
echo $_smarty_tpl->tpl_vars['objEvent']->value->getId();?>
" title="Supprimer"><i class="fas fa-trash-alt text-danger"></i></a>
						</td>

						<td><?php echo $_smarty_tpl->tpl_vars['objEvent']->value->getName();?>
</td>
						<td><a target="_blank" href="<?php echo base_url("assets/img/events");
echo $_smarty_tpl->tpl_vars['objEvent']->value->getImg();?>
"><?php echo $_smarty_tpl->tpl_vars['objEvent']->value->getImg();?>
</a></td>
						<td><?php echo $_smarty_tpl->tpl_vars['objEvent']->value->getShortContent(30);?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objEvent']->value->getCreate_date_form();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['objEvent']->value->getStart_date_form();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['objEvent']->value->getEnd_date_form();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['objEvent']->value->getCapacity();?>
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

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 17:27:51
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\front\templates\admin-top-bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e39a99769a884_69384137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dc225d9f01ce16a43e757068e322add3624ed44' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\front\\templates\\admin-top-bar.tpl',
      1 => 1580836369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e39a99769a884_69384137 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- TOP BAR ADMIN -->
<div class="bg-dark">
	<nav class="navbar navbar-expand-lg navbar-dark container">
		<a class="navbar-brand" href="<?php echo base_url('dashboard');?>
"><i class="fas fa-user-cog"></i> Administrateur</a>
		<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent2">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a  class="nav-link" href="<?php echo base_url('dashboard');?>
"><i class="fas fa-tachometer-alt mr-2"></i>Tableau de bord</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('images/back');?>
"><span class="bn_cube">0</span> Événements</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url('events/back');?>
"><span class="bn_cube">524</span> Images</a>
				</li>


			</ul>
		</div>
	</nav>

</div>
<?php }
}

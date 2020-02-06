<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-01 17:46:40
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\back\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e35b980d13e04_88823473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd7dcb86a278254ca8b7b0839f697dc0a085ba6e' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\back\\dashboard.tpl',
      1 => 1580579198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e35b980d13e04_88823473 (Smarty_Internal_Template $_smarty_tpl) {
?><p>Dashboard à faire</p>
<p>Note : Pour réactiver les liens regarder dans le dossier 'views/back/templates/header.php' et chercher 'disabled' dans la side nav </p>
<p>Liens actifs avec 'uri' :</p>
<ul>
	<li>Tableau de bord : 'dashboard'</li>
	<li>Slider Accueil</li>
	<ul>
		<li>Liste des slides : 'slides/list'</li>
		<li>Ajouter un slide : 'slides/add'</li>
	</ul>
	<li>Galerie</li>
	<ul>
		<li>Liste des images : 'images/list'</li>
		<li>Ajouter un slide : 'images/add'</li>
	</ul>	
</ul>
<?php }
}

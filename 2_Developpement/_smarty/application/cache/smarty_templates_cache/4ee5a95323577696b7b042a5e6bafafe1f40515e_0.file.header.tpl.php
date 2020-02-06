<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 21:56:20
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\back\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e39e8848f3409_15494316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ee5a95323577696b7b042a5e6bafafe1f40515e' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\back\\templates\\header.tpl',
      1 => 1580853378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e39e8848f3409_15494316 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Dashboard - SB Admin</title>

	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<link href="<?php echo base_url("assets/css/back-model.css");?>
" rel="stylesheet" />
	<link href="<?php echo base_url("assets/css/back.css");?>
" rel="stylesheet" />
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
	<a class="navbar-brand" href="<?php echo site_url('dashboard');?>
"><i class="fas fa-user-cog"></i> <?php echo $_SESSION['profil_libelle'];?>
</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
	<div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

		<a href="<?php echo site_url('users/disconnect');?>
"><button type="button" class="btn btn-primary">Se Déconnecter</button></a>

	</div>
	<!-- Navbar-->

</nav>
<div id="layoutSidenav">
	<div id="layoutSidenav_nav">
		<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
			<div class="sb-sidenav-menu">
				<div class="nav">
					<a class="nav-link" href="<?php echo base_url();?>
"><div class="sb-nav-link-icon"><i class="fas fa-store"></i></div> Aller sur le site</a>
					<a class="nav-link" href="<?php echo site_url("dashboard");?>
"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div> Tableau de bord</a>

					<!-- Bloc nav slider -->

					<a class="nav-link  <?php echo active_page('slides','active',1);?>
" href="<?php echo site_url("slides/listPage");?>
" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="far fa-eye"></i></div>
						Slider Accueil
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse <?php echo active_page('slides','show',1);?>
" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link <?php echo active_page('slides/listPage');?>
" href="<?php echo site_url("slides/listPage");?>
">Liste des slides</a>
							<a class="nav-link <?php echo active_page('slides/addEdit');?>
" href="<?php echo site_url("slides/addEdit");?>
">Ajouter un slide</a>
						</nav>
					</div>

					<!-- Bloc nav event -->
					<a class="nav-link <?php echo active_page('events','active',1);?>
" href="<?php echo site_url("events/listPage");?>
" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div>
						Événements
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse <?php echo active_page('events','show',1);?>
" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link <?php echo active_page('events/listPage');?>
" href="<?php echo site_url("events/listPage");?>
">Liste des événements</a>
							<a class="nav-link <?php echo active_page('events/addEdit');?>
" href="<?php echo site_url("events/addEdit");?>
">Ajouter un événement</a>
						</nav>
					</div>

					<!-- Bloc nav galerie -->
					<a class="nav-link <?php echo active_page('images','active',1);?>
" href="<?php echo site_url("images/listPage");?>
" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="far fa-eye"></i></div>
						Galerie
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse <?php echo active_page('images','show',1);?>
" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link <?php echo active_page('images/listPage','show',1);?>
" href="<?php echo site_url("images/listPage");?>
">Liste des images</a>
							<a class="nav-link <?php echo active_page('images/addEdit','show',1);?>
" href="<?php echo site_url("images/addEdit");?>
">Ajouter une image</a>
						</nav>
					</div>

					<!-- Bloc nav -->

					<a class="nav-link collapsed disabled" href="#" data-toggle="collapse" data-target="#collapseLayouts5" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fas fa-hand-holding-usd"></i></div>
						Prestations
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse" id="collapseLayouts5" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="#">Liste des Prestations</a>
							<a class="nav-link" href="#">Ajouter une prestation</a>
							<a class="nav-link" href="#">Liste des Catégories</a>
							<a class="nav-link" href="#">Ajouter une catégorie</a>
						</nav>
					</div>

					<!-- Bloc nav -->

					<a class="nav-link collapsed <?php echo active_page('users','active',1);?>
" href="<?php echo site_url("users/listPage");?>
" data-toggle="collapse" data-target="#collapseLayouts6" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
						Utilisateurs
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse  <?php echo active_page('users','show',1);?>
" id="collapseLayouts6" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link <?php echo active_page('users/listPage');?>
" href="<?php echo site_url("users/listPage");?>
">Liste des utilisateurs</a>
							<a class="nav-link <?php echo active_page('users/addEdit');?>
" href="<?php echo site_url("users/addEdit");?>
">Ajouter un utilisateur</a>
							<a class="nav-link <?php echo active_page('profiles/listPage');?>
" href="<?php echo site_url("profiles/listPage");?>
">Liste des profiles</a>
							<a class="nav-link <?php echo active_page('profiles/addEdit');?>
" href="<?php echo site_url("profiles/addEdit");?>
">Ajouter un profile</a>
						</nav>
					</div>

					<!-- Bloc nav -->

					<a class="nav-link collapsed disabled" href="#" data-toggle="collapse" data-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fas fa-envelope-open-text"></i></div>
						Newsletter
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="#">Liste des abonnées</a>
							<a class="nav-link" href="#">Liste des newsletter</a>
							<a class="nav-link" href="#">Ajouter une newsletter</a>
							<a class="nav-link" href="#">Envoyer newsletters</a>
						</nav>
					</div>



					<a class="nav-link disabled" href="#"><div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div> Réglages</a>

				</div>
			</div>
			<div class="sb-sidenav-footer">
				<div class="small">Connecter en tant que :</div>
				<?php echo $_SESSION['pseudo'];?>

			</div>
		</nav>
	</div>
	<div id="layoutSidenav_content">
		<main>




<?php }
}

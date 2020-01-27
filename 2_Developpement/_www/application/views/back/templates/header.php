<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Dashboard - SB Admin</title>
	<link href="<?php echo base_url("assets/css/back.css") ?>" rel="stylesheet" />
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
	<a class="navbar-brand" href="<?php echo site_url('dashboard')?>"><i class="fas fa-user-cog"></i> Administrateur</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
	><!-- Navbar Search-->
	<div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

		<a href="#"><button type="button" class="btn btn-primary">Se Déconnecter</button></a>

	</div>
	<!-- Navbar-->

</nav>
<div id="layoutSidenav">
	<div id="layoutSidenav_nav">
		<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
			<div class="sb-sidenav-menu">
				<div class="nav">
					<a class="nav-link" href="<?php echo base_url() ?>"><div class="sb-nav-link-icon"><i class="fas fa-store"></i></div> Aller sur le site</a>
					<a class="nav-link" href="<?php echo site_url("dashboard") ?>"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div> Tableau de bord</a>

					<!-- Bloc nav -->
					<a class="nav-link collapsed disabled" href="#" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div>
						Événements
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="#">Liste des événements</a>
							<a class="nav-link" href="#">Ajouter un événement</a>
						</nav>
					</div>

					<!-- Bloc nav -->

					<a class="nav-link collapsed disabled" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="far fa-images"></i></div>
						Galerie
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="#">Liste des images</a>
							<a class="nav-link" href="#">Ajouter une images</a>
						</nav>
					</div>

					<!-- Bloc nav -->

					<a class="nav-link collapsed disabled" href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="far fa-eye"></i></div>
						Slider Accueil
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="#">Liste des slides</a>
							<a class="nav-link" href="#">Ajouter un slide</a>
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

					<a class="nav-link collapsed disabled" href="#" data-toggle="collapse" data-target="#collapseLayouts6" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
						Utilisateurs
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse" id="collapseLayouts6" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link" href="#">Liste des utilisateurs</a>
							<a class="nav-link" href="#">Ajouter un utilisateur</a>
							<a class="nav-link" href="#">Liste des profiles</a>
							<a class="nav-link" href="#">Ajouter un profile</a>
						</nav>
					</div>


					<a class="nav-link disabled" href="#"><div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div> Réglages</a>

				</div>
			</div>
			<div class="sb-sidenav-footer">
				<div class="small">Logged in as:</div>
				Start Bootstrap
			</div>
		</nav>
	</div>
	<div id="layoutSidenav_content">
		<main>

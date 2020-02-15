<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Tableau de bord - beauté-naturelle</title>

	<link rel="shortcut icon" href="{base_url("assets/favicon.ico")}" type="image/x-icon">
	<link rel="icon" href="{base_url('assets/favicon.png')}" type="image/png">
	<link rel="icon" sizes="32x32" href="{base_url("assets/favicon-32.png")}" type="image/png">
	<link rel="icon" sizes="64x64" href="{base_url("assets/favicon-64.png")}" type="image/png">
	<link rel="icon" sizes="96x96" href="{base_url("assets/favicon-96.png")}" type="image/png">


	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
	<link href="{base_url("assets/css/back-model.css")}" rel="stylesheet" />
	<link href="{base_url("assets/css/back.css")}" rel="stylesheet" />
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
	<a class="navbar-brand" href="{site_url('dashboard')}"><i class="fas fa-user-cog"></i> {$smarty.session.profil_libelle}</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
	<div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

		<a href="{site_url('users/disconnect')}"><button type="button" class="btn btn-primary">Se Déconnecter</button></a>

	</div>
	<!-- Navbar-->

</nav>
<div id="layoutSidenav">
	<div id="layoutSidenav_nav">
		<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
			<div class="sb-sidenav-menu">
				<div class="nav">
					<a class="nav-link" href="{base_url()}"><div class="sb-nav-link-icon"><i class="fas fa-store"></i></div> Aller sur le site</a>
					<a class="nav-link" href="{site_url("dashboard")}"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div> Tableau de bord</a>

					<!-- Bloc nav SLIDER -->

					<a class="nav-link  {active_page('slides','active',1)}" href="{site_url("slides/listPage")}" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="far fa-eye"></i></div>
						Slider Accueil
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse {active_page('slides','show',1)}" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link {active_page('slides/listPage')}" href="{site_url("slides/listPage")}">Liste des slides</a>
							<a class="nav-link {active_page('slides/addEdit')}" href="{site_url("slides/addEdit")}">Ajouter un slide</a>
						</nav>
					</div>

					<!-- Bloc nav EVENT -->
					<a class="nav-link {active_page('events','active',1)}" href="{site_url("events/listPage")}" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div>
						Événements
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse {active_page('events','show',1)}" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link {active_page('events/listPage')}" href="{site_url("events/listPage")}">Liste des événements</a>
							<a class="nav-link {active_page('events/addEdit')}" href="{site_url("events/addEdit")}">Ajouter un événement</a>
						</nav>
					</div>

					<!-- Bloc nav GALERIE -->
					<a class="nav-link {active_page('images','active',1)}" href="{site_url("images/listPage")}" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="far fa-images"></i></div>
						Galerie
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse {active_page('images','show',1)}" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link  {active_page('images/listPage','show',1)}" href="{site_url("images/listPage")}">Liste des images</a>
							<a class="nav-link {active_page('images/addEdit','show',1)}" href="{site_url("images/addEdit")}">Ajouter une image</a>
						</nav>
					</div>

					<!-- Bloc nav PRESTATIONS -->

					<a class="nav-link collapsed {active_page('prestations','active',1)}" href="{site_url("prestations/listPage")}" data-toggle="collapse" data-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fas fa-hand-holding-usd"></i></div>
						Prestations
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse {active_page('prestations','show',1)}" id="collapseLayouts4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link {active_page('prestations/listPage','show',1)}" href="{site_url("prestations/listPage")}">Liste des Prestations</a>
							<a class="nav-link {active_page('prestations/listPage','show',1)}" href="{site_url("prestations/addEdit")}">Ajouter une prestation</a>
							<a class="nav-link {active_page('prestations/listPage','show',1)}" href="{site_url("prestations/listPage_cat")}">Liste des Catégories</a>
							<a class="nav-link {active_page('prestations/listPage','show',1)}" href="{site_url("prestations/addEdit_cat")}">Ajouter une Catégorie</a>
							<a class="nav-link {active_page('prestations/listPage','show',1)}" href="{site_url("prestations/addEdit_subcat")}"><i class="fa fa-plus mr-2"></i>Sous-Catégorie</a>
						</nav>
					</div>

					<!-- Bloc nav NEWSLETTER -->

					<a class="nav-link collapsed {active_page('users','active',1)}" href="{site_url("users/listPage")}" data-toggle="collapse" data-target="#collapseLayouts5" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
						Utilisateurs
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse  {active_page('users','show',1)}" id="collapseLayouts5" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link {active_page('users/listPage')}" href="{site_url("users/listPage")}">Liste des utilisateurs</a>
							<a class="nav-link {active_page('users/addEdit')}" href="{site_url("users/addEdit")}">Ajouter un utilisateur</a>
							<a class="nav-link {active_page('profiles/listPage')}" href="{site_url("profiles/listPage")}">Liste des profiles</a>
							<a class="nav-link {active_page('profiles/addEdit')}" href="{site_url("profiles/addEdit")}">Ajouter un profile</a>
						</nav>
					</div>

					<!-- Bloc nav -->

					<a class="nav-link collapsed {active_page('newsletters','active',1)}" href="{site_url("newsletters/listPage_sub")}" data-toggle="collapse" data-target="#collapseLayouts6" aria-expanded="false" aria-controls="collapseLayouts">
						<div class="sb-nav-link-icon"><i class="fas fa-envelope-open-text"></i></div>
						Newsletter
						<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>

					<div class="collapse {active_page('newsletters','show',1)}" id="collapseLayouts6" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
						<nav class="sb-sidenav-menu-nested nav">
							<a class="nav-link {active_page('newsletters/listPage_sub')}" href="{site_url("newsletters/listPage_sub")}">Liste des abonnées</a>
							<a class="nav-link {active_page('newsletters/addEdit_sub')}" href="{site_url("newsletters/addEdit_sub")}">Liste des newsletter</a>
							<a class="nav-link {active_page('newsletters/listPage')}" href="{site_url("newsletters/listPage")}">Ajouter une newsletter</a>
							<a class="nav-link {active_page('newsletters/addEdit')}" href="{site_url("newsletters/addEdit")}">Envoyer newsletters</a>
						</nav>
					</div>



					<a class="nav-link disabled" href="#"><div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div> Réglages</a>

				</div>
			</div>
			<div class="sb-sidenav-footer">
				<div class="small">Connecter en tant que :</div>
				{$smarty.session.pseudo}
			</div>
		</nav>
	</div>
	<div id="layoutSidenav_content">
		<main>





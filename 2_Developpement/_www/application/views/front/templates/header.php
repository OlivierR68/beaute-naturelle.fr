<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Accueil - Beauté Naturelle - Cosmétiques & soins Bio</title>
    <meta name="description"
        content="Magasin de coméstiques et institut de soins bio et naturelle, situé au dans la vielle ville de colmar, vénez découvrir notre sélection de produits et soins bio" />
    <meta name="author" content="Olivier Ravinasaga" />

    <meta name=”robots” content=”index, follow”>
    <meta name="format-detection" content="telephone=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700|Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css">

    <link rel="shortcut icon" href="<?php echo base_url()?>assets/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url()?>assets/favicon.png" type="image/png">
    <link rel="icon" sizes="32x32" href="<?php echo base_url()?>assets/favicon-32.png" type="image/png">
    <link rel="icon" sizes="64x64" href="<?php echo base_url()?>assets/favicon-64.png" type="image/png">
    <link rel="icon" sizes="96x96" href="<?php echo base_url()?>assets/favicon-96.png" type="image/png">

</head>

<body>
    <!-- Back to top button -->
    <a id="b2top-button"></a>



    <header>
        <!--TOP BAR -->

        <div class="bn_bg-color-1">
            <div
                class="container bn_top-bar d-flex align-items-center justify-content-center justify-content-md-between">
                <div class="bn_infos">
                    <a class="bn_infos-items d-none d-lg-inline" href="contact.html"><i
                            class="fas fa-map-marker-alt"></i>328 rue des clefs, 68 000 Colmar</a>
                    <a class="bn_infos-items" href="tel:+33389545646"><i class="fas fa-phone-alt"></i>03
                        89 54 56 46</a>
                    <a class="bn_infos-items d-none d-lg-inline" href="mailto:contact@beaute-naturelle.fr"><i
                            class="far fa-envelope"></i></i>contact@beaute-naturelle.fr</a>
                    <a class="bn_infos-items" href="contact.html"><i class="far fa-clock"></i></i><span
                            class="d-none d-sm-inline">Ouvert tous les
                            jours, (sauf le Dimanche) de</span> 9H00 à 18H00</a>
                </div>
                <div class="bn_social d-none d-md-block">
                    <a href="https://www.facebook.com/" target="_blank" class="ml-1 bn_social-items"><i
                            class="fab fa-facebook-square"></i></a>
                    <a href="https://twitter.com/home?lang=fr" target="_blank" class="ml-1 bn_social-items"><i
                            class="fab fa-twitter-square"></i></a>
                    <a href="https://www.instagram.com/" target="_blank" class="ml-1 bn_social-items"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- NAV -->

        <div class="bn_opacity-90 bn_bg-main sticky-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">

                    <a class="navbar-brand mx-auto mx-lg-0" href="<?php echo base_url('pages/home') ?>">
                        <!--TOP LOGO -->
                        <div class="bn_logo-top">
                            <img src="<?php echo base_url()?>assets/img/logo.svg" class="bn_logo-svg" alt="logo beauté naturelle">
                            <div class="bn_logg-text">

                                <span class="bn_logo-text-1">beauté naturelle</span>
                                <span class="bn_logo-text-2">cosmétiques & soins bio</span>

                            </div>
                        </div>
                    </a>

                    <!-- NAV MENU -->

                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse bn_bg-main" id="navbarSupportedContent">
                        <ul class="navbar-nav  ml-auto">

                            <li class="nav-item mx-1 bn_nav-item <?php  echo ($this->uri->rsegments[2] == "home") ? "bn_active" : "" ;?>">
                                <a class="nav-link bn_nav-link " href="<?php echo base_url() ?>">Accueil <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item mx-1 bn_nav-item <?php  echo ($this->uri->rsegments[1] == "events") ? "bn_active" : "" ;?>">
                                <a class="nav-link bn_nav-link disabled" href="<?php echo base_url("events") ?>">Évènements</a>
                            </li>
                            <li class="nav-item mx-1 bn_nav-item dropdown <?php  echo ($this->uri->rsegments[1] == "prestations") ? "bn_active" : "" ;?>">
                                <a class="nav-link bn_nav-link dropdown-toggle" href="<?php echo base_url("prestations") ?>" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Prestations
                                </a>
                                <div class="dropdown-menu bn_bg-main" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item<?php  echo ($this->uri->rsegments[1] == "prestations") ? "bn_active" : "" ;?>" href="<?php echo base_url("prestations") ?>">Prestations</a>
                                    <a class="dropdown-item" href="prestations/epilation.html">Epilations</a>
                                    <a class="dropdown-item" href="prestations/mains-pieds.html">Mains & Pieds</a>
                                    <a class="dropdown-item" href="prestations/regard.html">Regard</a>
                                    <a class="dropdown-item" href="prestations/visage.html">Visage</a>
                                    <a class="dropdown-item" href="prestations/minceur.html">Minceur</a>
                                    <a class="dropdown-item" href="prestations/carita.html">Carita</a>
                                    <a class="dropdown-item" href="prestations/spa.html">SPA</a>
                                    <a class="dropdown-item" href="prestations/hommes.html">Hommes</a>

                                </div>
                            </li>
                            <li class="nav-item mx-1 bn_nav-item mx-1 <?php  echo ($this->uri->rsegments[2] == "magasin") ? "bn_active" : "" ;?>">
                                <a class="nav-link bn_nav-link" href="magasin.html">Le Magasin</a>
                            </li>
                            <li class="nav-item mx-1 bn_nav-item <?php  echo ($this->uri->rsegments[1] == "galerie") ? "bn_active" : "" ;?>">
                                <a class="nav-link bn_nav-link" href="galerie.html">Galerie</a>
                            </li>
                            <li class="nav-item mx-1 bn_nav-item <?php  echo ($this->uri->rsegments[2] == "contact") ? "bn_active" : "" ;?>">
                                <a class="nav-link bn_nav-link" href="<?php echo base_url('pages/contact') ?>">Contact</a>
                            </li>
                        </ul>
                </nav>


            </div>
        </div>

    </header>


	<?php

	if ($this->uri->rsegments[2] == "home")  $this->load->view('front/templates/slider');

	else { ?>

	<div class="bn_img-top bn_decal-slider" style="background-image: url(<?php echo site_url()."assets/img/".$headerImg  ?>);"></div>

	<?php } ?>

	<div class="bn_block-title">
		<span class="bn_h1-pre"><?php echo $preTITLE ?? "" ?></span>
		<h1><?php echo $TITLE ?? "" ?></h1>
		<div></div>
	</div>

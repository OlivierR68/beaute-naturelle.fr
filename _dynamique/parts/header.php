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

    <meta name="robots" content="none" />
    <meta name="format-detection" content="telephone=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700%7CLora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/styles.css">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="icon" sizes="32x32" href="favicon-32.png" type="image/png">
    <link rel="icon" sizes="64x64" href="favicon-64.png" type="image/png">
    <link rel="icon" sizes="96x96" href="favicon-96.png" type="image/png">

</head>

<body>
    <!-- Back to top button -->
    <a id="b2top-button"></a>



    <header>
        <!-- BAR DU HAUT -->

        <div class="bn_bg-color-1">
            <div
                class="container bn_top-bar d-flex align-items-center justify-content-center justify-content-md-between">
                <div class="bn_infos">
                    <a class="bn_infos-items d-none d-lg-inline" href="contact.php"><i
                            class="fas fa-map-marker-alt"></i>328 rue des clefs, 68 000 Colmar</a>
                    <a class="bn_infos-items" href="tel:+33389545646"><i class="fas fa-phone-alt"></i>03
                        89 54 56 46</a>
                    <a class="bn_infos-items d-none d-lg-inline" href="mailto:contact@beaute-naturelle.fr"><i
                            class="far fa-envelope"></i>contact@beaute-naturelle.fr</a>
                    <a class="bn_infos-items" href="contact.php"><i class="far fa-clock"></i><span
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

        <!-- NAVIGATION -->

        <div class="bn_opacity-90 bn_bg-main sticky-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">

                    <a class="navbar-brand mx-auto mx-lg-0" href="index.php">
                        <!-- Logo du Haut -->
                        <div class="bn_logo-top">
                            <img src="img/logo.svg" class="bn_logo-svg" alt="logo beauté naturelle">
                            <div class="bn_logg-text">

                                <span class="bn_logo-text-1">beauté naturelle</span>
                                <span class="bn_logo-text-2">cosmétiques & soins bio</span>

                            </div>
                        </div>
                    </a>

                    <!-- Menu Navigation -->

                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse bn_bg-main" id="navbarSupportedContent">
                        <ul class="navbar-nav  ml-auto">
                            <li class="nav-item mx-1 bn_nav-item <?php echo ($page == "home" ? "bn_active" : "")?>">
                                <a class="nav-link bn_nav-link" href="index.php">Accueil <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item mx-1 bn_nav-item <?php echo ($page == "events" ? "bn_active" : "")?>">
                                <a class="nav-link bn_nav-link disabled" href="events.php">Évènements</a>
                            </li>
                            <li class="nav-item mx-1 bn_nav-item dropdown <?php echo ($page == "insitut" ? "bn_active" : "")?>">
                                <a class="nav-link bn_nav-link dropdown-toggle" href="institut.php" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    L'Institut
                                </a>
                                <div class="dropdown-menu bn_bg-main" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="institut.php">L'Institut</a>
                                    <a class="dropdown-item" href="prestations/epilation.php">Epilations</a>
                                    <a class="dropdown-item" href="prestations/mains-pieds.php">Mains & Pieds</a>
                                    <a class="dropdown-item" href="prestations/regard.php">Regard</a>
                                    <a class="dropdown-item" href="prestations/visage.php">Visage</a>
                                    <a class="dropdown-item" href="prestations/minceur.php">Minceur</a>
                                    <a class="dropdown-item" href="prestations/carita.php">Carita</a>
                                    <a class="dropdown-item" href="prestations/spa.php">SPA</a>
                                    <a class="dropdown-item" href="prestations/hommes.php">Hommes</a>

                                </div>
                            </li>
                            <li class="nav-item mx-1 bn_nav-item mx-1 <?php echo ($page == "magasin" ? "bn_active" : "")?>">
                                <a class="nav-link bn_nav-link" href="magasin.php">Le Magasin</a>
                            </li>
                            <li class="nav-item mx-1 bn_nav-item <?php echo ($page == "galerie" ? "bn_active" : "")?>">
                                <a class="nav-link bn_nav-link" href="galerie.php">Galerie</a>
                            </li>
                            <li class="nav-item mx-1 bn_nav-item <?php echo ($page == "contact" ? "bn_active" : "")?>">
                                <a class="nav-link bn_nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>
                        </div>
                        
                </nav>


            </div>
        </div>

    </header>
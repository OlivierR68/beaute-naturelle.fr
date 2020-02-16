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
    <link rel="stylesheet" href="{base_url("assets/css/styles.css")}">
    <link rel="stylesheet" href="{base_url('assets/vendor/lightbox/css/lightbox.min.css')}">

    <link rel="shortcut icon" href="{base_url("assets/favicon.ico")}" type="image/x-icon">
    <link rel="icon" href="{base_url('assets/favicon.png')}" type="image/png">
    <link rel="icon" sizes="32x32" href="{base_url("assets/favicon-32.png")}" type="image/png">
    <link rel="icon" sizes="64x64" href="{base_url("assets/favicon-64.png")}" type="image/png">
    <link rel="icon" sizes="96x96" href="{base_url("assets/favicon-96.png")}" type="image/png">

</head>
<body>
    <!-- Back to top button -->
    <a id="b2top-button"></a>



    <header>
        {if isset($smarty.session.login)}

            {if $smarty.session.level > 1}

                {include file='./admin-top-bar.tpl'}

            {/if}

        {/if}
        <!--TOP BAR USER -->

        <div class="bn_bg-color-1">
            <div
                class="container bn_top-bar d-flex align-items-center justify-content-center justify-content-md-between">
                <div class="bn_infos">

                    {if isset($smarty.session.login)}
                        <a class="bn_infos-items" href="{site_url('users/profile')}"><i class="far fa-caret-square-down"></i>Bonjour {$smarty.session.first_name}</a>
                        <a class="bn_infos-items" href="{site_url('users/disconnect')}"><i class="fas fa-sign-out-alt"></i>Se Deconnecter</a>
                    {else}
                        <a class="bn_infos-items" href="{site_url('users/login')}"><i class="fas fa-sign-in-alt"></i> Se Connecter</a>
                        <a class="bn_infos-items" href="{site_url('users/register')}"><i class="fas fa-user-plus"></i> S'Inscrire</a>
                    {/if}


                </div>

                <div class="bn_infos">
                    <a class="bn_infos-items d-none d-lg-inline" href="{site_url('pages/contact')}"><i
                            class="fas fa-map-marker-alt"></i>Actuellement : </a>
                </div>


            </div>
        </div>

        <!-- NAV -->

        <div class="bn_opacity-90 bn_bg-main sticky-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">

                    <a class="navbar-brand mx-auto mx-lg-0" href="{site_url()}">
                        <!--TOP LOGO -->
                        <div class="bn_logo-top">
                            <img src="{base_url("assets/img/logo.svg")}" class="bn_logo-svg" alt="logo beauté naturelle">
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

                            <li class="nav-item mx-1 bn_nav-item bn_{active_page('slides/home')}">
                                <a class="nav-link bn_nav-link " href="{site_url()}">Accueil <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item mx-1 bn_nav-item {active_page('events','bn_active',1)}">
                                <a class="nav-link bn_nav-link" href="{site_url("events")}">Évènements</a>
                            </li>

                            <li class="nav-item mx-1 bn_nav-item dropdown {active_page('prestations','bn_active',1)}">
                                <a class="nav-link bn_nav-link dropdown-toggle" href="{site_url("prestations")}" id="navbarDropdown"
                                   role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Prestations
                                </a>
                                <div class="dropdown-menu bn_bg-main" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item {active_page('prestations/index','bn_active')}" href="{site_url('prestations')}">Présentation</a>
                                    {foreach from=$dropdown_menu item=dropdown_item}
                                        <a class="dropdown-item {if isset($current_uri) && $current_uri == $dropdown_item->getSlug()}bn_active{/if} " href="{$dropdown_item->getUrl()}">{$dropdown_item->getTitle()}</a>
                                    {/foreach}
                                </div>
                            </li>

                            <li class="nav-item mx-1 bn_nav-item mx-1 bn_{active_page('pages/about')}">
                                <a class="nav-link bn_nav-link" href="{site_url('pages/about')}">L'Établissement </a>
                            </li>
                            <li class="nav-item mx-1 bn_nav-item {active_page('images','bn_active',1)}">
                                <a class="nav-link bn_nav-link" href="{site_url('images')}">Galerie</a>
                            </li>
                            <li class="nav-item mx-1 bn_nav-item bn_{active_page('pages/contact')}">
                                <a class="nav-link bn_nav-link" href="{site_url('pages/contact')}">Contact</a>
                            </li>
                        </ul>
                </nav>


            </div>
        </div>

    </header>

	{if page_name() eq 'home' and !empty($arrSlides)}

        {include file="./slider.tpl"}

	{else}

	<div class="bn_img-top bn_decal-slider" style="background-image: url({$headerImg})"></div>

	{/if}

    {if isset($menu_cat_list)}
        <div class="bn_bg-color-1">
            <div class="container bn_arianne bn_color-white bn_small-text text-center text-uppercase">
                <nav class="row no-gutters">

                    {foreach from=$menu_cat_list item=cat_obj}
                        <a href="{$cat_obj->getUrl()}" class="col-4 col-sm-3 col-lg py-2 bn_a-white {if $current_uri == $cat_obj->getSlug()}bn_active-presta{/if} text-nowrap">
                            {$cat_obj->getTitle()}
                        </a>
                    {/foreach}

                </nav>


            </div>
        </div>
    {/if}
    <!--------- Menu Rapide Prestations  -------->


	<div class="bn_block-title">
		<span>{$preTITLE}</span>
		<h1>{$TITLE}</h1>
		<div></div>
	</div>



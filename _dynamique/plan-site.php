<?php
$page = 'sitemap';
include './parts/header.php';
?>

    <!-- Block Image -->

    <div class="bn_img-top bn_img-sitemap bn_decal-slider">

    </div>



    <!--Block titre -->

    <div class="bn_block-title">
        <span class="bn_h1-pre">Arborescence</span>
        <h1>Plan du Site</h1>
        <div></div>
    </div>

    <!--Block titre -->

    <main class="container bn_content">
        <ul class="bn_site-map-ul w-25 mx-auto">
            <li><a href="index.html">Accueil</a></li>
            <li>Évènements</li>
            <li>
                <a href="institut.html">L'Institut</a>
                <ul>
                    <li><a href="./prestations/epilation.html">Épilations</a></li>
                    <li><a href="./prestations/mains-pieds.html">Mains & Pieds</a></li>
                    <li><a href="./prestations/regard.html">Regard</a></li>
                    <li><a href="./prestations/visage.html">Visage</a></li>
                    <li><a href="./prestations/minceur.html">Minceur</a></li>
                    <li><a href="./prestations/carita.html">Carita</a></li>
                    <li><a href="./prestations/spa.html">SPA</a></li>
                    <li><a href="./prestations/hommes.html">Hommes</a></li>
                </ul>
            </li>
            <li><a href="magasin.html">Le Magasin</a></li>
            <li><a href="galerie.html">Galerie</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>

    </main>

    <div class="bn_gap-100"></div>

    <?php

include './parts/footer.php';

?>
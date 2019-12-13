<?php
$page = 'magasin';
include './parts/header.php';
?>
    <!-- Block Image -->

    <div class="bn_img-top bn_img-magasin bn_decal-slider">

    </div>



    <!--Block titre -->

    <div class="bn_block-title">
        <span class="bn_h1-pre">Découvrez</span>
        <h1>Notre Magasin</h1>
        <div></div>
    </div>

    <!--Block titre -->

    <main class="container bn_content">
        <section>

            <div class="row no-gutters">


                <div class="col-12 bn_gap-50"></div>

                <div class="col-12 col-lg-6">
                    <img src="./img/rue-des-clefs-colmar.jpg" class="img-fluid w-100 border"
                        alt="petite venise de colmar">
                </div>

                <div class="col-12 col-lg-6 px-4">
                    <div class="bn_gap-25"></div>

                    <span class="bn_h2-pre">Au coeur de la vielle ville</span>
                    <h2>Venez-nous voir à Colmar</h2>
                    <p>L’équipe de Beauté Naturelle vous accueille du lundi au samedi. Des professionnels qualifiés sont
                        là
                        pour répondre à vos questions et vous apporter des conseils, Venez également découvrir et tester
                        certains de nos produits sur place.</p>
                    <p><i class="fas fa-map-marker-alt mr-2"></i><b>328 rue des clefs, 68 000 Colmar</b></p>

                    <p><i class="fas fa-phone-alt mr-1"></i><b>03 89 54 56 46</b> </p>

                    <p><a href="mailto:contact@beaute-naturelle.fr"><i class="far fa-envelope mr-1"></i>
                            contact@beaute-naturelle.fr </a></p>

                </div>
            </div>
        </section>


    </main>
    <div class="bn_gap-50"></div>
    <div class="container">
        <p><strong><i class="far fa-clock mr-2"></i>Horraires :</strong></p>
        <div class="table-responsive-lg">
            <table class="table bn_magasin-horraire text-center">
                <thead>
                    <tr>
                        <th>Lundi</th>
                        <th>Mardi</th>
                        <th>Mercredi</th>
                        <th>Jeudi</th>
                        <th>Vendredi</th>
                        <th>Samedi</th>
                        <th>Dimanche</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>9H00 - 18H00</td>
                        <td>9H00 - 18H00</td>
                        <td>9H00 - 18H00</td>
                        <td>9H00 - 18H00</td>
                        <td>9H00 - 18H00</td>
                        <td>9H00 - 18H00</td>
                        <td>Fermé</td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>


    <div class="bn_gap-25"></div>

    <div class="p-0" style="height: 32rem;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.6265782139376!2d7.356867915646947!3d48.07885037921868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479165e6cc9fd875%3A0x51445d1eb3892079!2sRue%20des%20Clefs%2C%2068000%20Colmar!5e0!3m2!1sfr!2sfr!4v1574167918201!5m2!1sfr!2sfr"
            frameborder="0" style="border:0;" allowfullscreen="" class="w-100 h-100 border"></iframe>
    </div>



    <?php

include './parts/footer.php';

?>
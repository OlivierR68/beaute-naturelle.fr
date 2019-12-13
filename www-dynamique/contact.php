<?php
$page = 'contact';
include './parts/header.php';
?>


<!------- Block Image ---------->

<div class="bn_img-top bn_img-contact bn_decal-slider">

</div>



<!----Block titre -->

<div class="bn_block-title">
    <span class="bn_h1-pre">Vous avez des questions ?</span>
    <h1>Contactez-nous</h1>
    <div></div>
</div>

<!----Block titre -->

<main class="container bn_content">

    <div class="bn_gap-50"></div>

    <div class="row">
        <div class="col-12 col-md-6">
            <div>Par <span class="bn_color-3">Téléphone</span></div>
            <div class="bn_small-text">de 9H00 à 18H00 tous les jours sauf le Dimanche</div>
            <div class="bn_gap-10"></div>
            <div><span class="bn_small-text">Appelez le </span><span class="bn_color-3">03 89 54 56 46</span></div>
            <div class="bn_gap-30"></div>
        </div>

        <div class="col-12 col-md-6">
            <div>Par <span class="bn_color-3">Courriel</span></div>
            <div class="bn_small-text">Nous vous repondons sous 48H</div>
            <div class="bn_gap-10"></div>
            <a href="mailto:contact@beaute-naturelle.fr" class="bn_a">contact@beaute-naturelle.fr</a>
            <div class="bn_gap-30"></div>
        </div>

        <div class="col-12">
            <div>Par <span class="bn_color-3">Formulaire</span></div>
            <div class="bn_small-text">Nous vous repondons sous 48H</div>
            <div class="bn_gap-15"></div>
        </div>

    </div>

    <form>
        <div class="form-row bn_form-row">
            <div class="form-group col-12 col-md-6 bn_form-input pr-lg-3">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group col-12 col-md-6 bn_form-input">
                <label for="lastname">Prénom</label>
                <input type="text" class="form-control" id="lastname">
            </div>
        </div>

        <div class="form-row bn_form-row">
            <div class="form-group col-12 col-md-6 bn_form-input pr-lg-3">
                <label for="inputAddress">Email</label>
                <input type="email" class="form-control" id="inputAddress">
            </div>
            <div class="form-group col-12 col-md-6 bn_form-input">
                <label for="inputAddress2">Téléphone</label>
                <input type="tel" class="form-control" id="inputAddress2">
            </div>


        </div>


        <div class="form-row bn_form-row">
            <div class="form-group col-md-12 bn_form-input">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
                <div class="bn_gap-25"></div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input " type="checkbox" id="gridCheck">
                        <label class="form-check-label bn_check-label" for="gridCheck">
                            <p class="bn_small-text">En soumettant ce formulaire, vous acceptez que les
                                informations saisies soient exploitées dans un cadre de prospection commerciale. Si
                                vous souhaitez
                                faire valoir vos droits sur vos données personnelles contactez la société Beauté
                                Naturelle par mail,
                                via ce formulaire ou
                                par téléphone. Pour plus d'information consultez notre <a class="bn_a"
                                    href="politique-confidentialite.html">Politique de Confidentialité</a>.
                            </p>
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn bn_btn-green mx-auto mt-n2">ENVOYER</button>
    </form>
</main>

<div class="bn_gap-100"></div>

<?php

include './parts/footer.php';

?>
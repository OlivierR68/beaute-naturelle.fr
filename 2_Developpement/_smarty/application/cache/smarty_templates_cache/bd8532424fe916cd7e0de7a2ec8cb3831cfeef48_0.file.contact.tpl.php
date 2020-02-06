<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-31 19:39:42
  from 'C:\Users\PC-Olivier\Documents\GitHub\beaute-naturelle.fr\2_Developpement\_smarty\application\views\front\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e34827e8a3df8_11744145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd8532424fe916cd7e0de7a2ec8cb3831cfeef48' => 
    array (
      0 => 'C:\\Users\\PC-Olivier\\Documents\\GitHub\\beaute-naturelle.fr\\2_Developpement\\_smarty\\application\\views\\front\\contact.tpl',
      1 => 1580499363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e34827e8a3df8_11744145 (Smarty_Internal_Template $_smarty_tpl) {
?>  
        <?php echo validation_errors();?>

        <?php echo form_open('form');?>



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
                    <label for="inputaddress">Email</label>
                    <input type="email" class="form-control" id="inputAddress">
                </div>
                <div class="form-group col-12 col-md-6 bn_form-input">
                    <label for="inputaddress2">Téléphone</label>
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
                                        href="<?php echo '<?php ';?>
base_url('pages/politique') <?php echo '?>';?>
">Politique de Confidentialité</a>.
                                </p>
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn bn_btn-green mx-auto mt-n2">ENVOYER</button>
        </form>
    </main>

    <div class="bn_gap-100"></div>
<?php }
}

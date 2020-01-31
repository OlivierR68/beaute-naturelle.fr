<?php
defined('BASEPATH') OR exit('No direct script access allowed');


    /**
     * Controller Pages
     * @author  Olivier Ravinasaga
     * @version 1
     *
     */

class Pages extends CI_Controller
{
    public function __construct(){
        parent::__construct();

    }

    /** Front : Fonction permettant d'afficher la page de contact */
    public function contact()
    {
        $data['preTITLE']	= "Vous avez des questions ?";
        $data['TITLE'] 		= "Contactez-nous";
        $data['headerImg']	= "img-contact.jpg";
        $data['pageName']   = "contact";


        $data['CONTENT'] = $this->smarty->fetch('front/contact.tpl', $data);
        $this->smarty->display('front/content.tpl', $data);
    }

    /** Front : Fonction permettant d'afficher la page 'A propos' */
    public function about()
    {
        $data['preTITLE']	= "Découvrez";
        $data['TITLE'] 		= "Notre Établissement";
        $data['headerImg']	= "img-magasin.jpg";
        $data['pageName']   = "about";


        $data['CONTENT'] = $this->smarty->fetch('front/about.tpl', $data);
        $this->smarty->display('front/content.tpl', $data);
    }

    /** Front : Fonction permettant d'afficher la page des mentions légales */
    public function mentions()
    {
        $data['preTITLE']	= "Obligations Légales";
        $data['TITLE'] 		= "Mentions Légales";
        $data['headerImg']	= "img-mentions.jpg";
        $data['pageName']   = "mentions";


        $data['CONTENT'] = $this->smarty->fetch('front/mentions.tpl', $data);
        $this->smarty->display('front/content.tpl', $data);
    }

    /** Front : Fonction permettant d'afficher la page de politique de confidentialité */
    public function politique()
    {
        $data['preTITLE']	= "Protection des Données";
        $data['TITLE'] 		= "Politique de Confidentialité";
        $data['headerImg']	= "img-mentions.jpg";
        $data['pageName']   = "politique";


        $data['CONTENT'] = $this->smarty->fetch('front/politique.tpl', $data);
        $this->smarty->display('front/content.tpl', $data);
    }

    /** Front : Fonction permettant d'afficher la page du plan du site */
    public function sitemap()
    {
        $data['preTITLE']	= "Arborescence";
        $data['TITLE'] 		= "Plan du Site";
        $data['headerImg']	= "img-sitemap.jpg";
        $data['pageName']   = "sitemap";

        $data['CONTENT'] = $this->smarty->fetch('front/mentions.tpl', $data);
        $this->smarty->display('front/content.tpl', $data);
    }
}

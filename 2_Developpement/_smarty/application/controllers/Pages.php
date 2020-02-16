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
        $data['headerImg']	= base_url("assets/img/img-contact.jpg");



        $this->load->library('form_validation');

        $this->form_validation->set_rules('first_name', 'Nom', 'required|alpha');
        $this->form_validation->set_rules('last_name', 'Prénom', 'required|alpha');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('tel', 'Téléphone', 'numeric');

        if ($this->form_validation->run() == FALSE)
        {
            $data['ERRORS'] = validation_errors('', '<br>');
        }
        else
        {
            /* Sa marche pas !
            $this->load->library('email');

            $config['protocol']     = 'smtp';
            $config['smtp_timeout'] = '20';
            $config['smtp_host']    = 'smtp.live.com';
            $config['smtp_port']    = '587';
            $config['smtp_crypto']  = 'tls';
            $config['smtp_user']    = 'webolive8@hotmail.com';
            $config['smtp_pass']    = '$hn=WPC!rqiw,r8';
            $config['mailtype']     = 'html';
            $config['charset']      = 'utf-8';

            $this->email->initialize($config);

            */

            $from_mail  = $this->input->post('email');
            $from       = $this->input->post('first_name')." ".$this->input->post('last_name');
            $to_mail    = "olivier.ravinasaga@gmail.com";
            $msg        = $this->input->post('msg');

            /*
            $this->email->from($from_mail, $from);
            $this->email->to($to_mail);
            $this->email->subject('Email de contact : beauté-naturelle');
            $this->email->message($msg);

            if (!$this->email->send()) {

                $data['ERRORS'] = "Echec de l'envoi";

            } else {

                $data['SUCCESS'] = "Mail envoyé !";

            }

            */

            $from = $from_mail;
            $to = $to_mail;
            $subject = "Email de contact : beauté-naturelle";
            $message = $msg;
            $headers = "From:" . $from;
            mail($to,$subject,$message, $headers);


        }


        $data['CONTENT'] = $this->smarty->fetch('front/contact.tpl', $data);
        $this->smarty->display('front/templates/content.tpl', $data);
    }

    /** Front : Fonction permettant d'afficher la page 'A propos' */
    public function about()
    {
        $data['preTITLE']	= "Découvrez";
        $data['TITLE'] 		= "Notre Établissement";
        $data['headerImg']	= base_url("assets/img/img-magasin.jpg");



        $data['CONTENT'] = $this->smarty->fetch('front/about.tpl', $data);
        $this->smarty->display('front/templates/content.tpl', $data);
    }

    /** Front : Fonction permettant d'afficher la page des mentions légales */
    public function mentions()
    {
        $data['preTITLE']	= "Obligations Légales";
        $data['TITLE'] 		= "Mentions Légales";
        $data['headerImg']	= base_url("assets/img/img-mentions.jpg");



        $data['CONTENT'] = $this->smarty->fetch('front/mentions.tpl', $data);
        $this->smarty->display('front/templates/content.tpl', $data);
    }

    /** Front : Fonction permettant d'afficher la page de politique de confidentialité */
    public function politique()
    {
        $data['preTITLE']	= "Protection des Données";
        $data['TITLE'] 		= "Politique de Confidentialité";
        $data['headerImg']	= base_url("assets/img/img-mentions.jpg");



        $data['CONTENT'] = $this->smarty->fetch('front/politique.tpl', $data);
        $this->smarty->display('front/templates/content.tpl', $data);
    }

    /** Front : Fonction permettant d'afficher la page du plan du site */
    public function sitemap()
    {
        $data['preTITLE']	= "Arborescence";
        $data['TITLE'] 		= "Plan du Site";
        $data['headerImg']	= base_url("assets/img/img-sitemap.jpg");


        $data['CONTENT'] = $this->smarty->fetch('front/sitemap.tpl', $data);
        $this->smarty->display('front/templates/content.tpl', $data);
    }
}

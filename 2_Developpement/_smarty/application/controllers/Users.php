<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Users
 * @author  Olivier Ravinasaga
 * Controller des utilisateurs
 */
class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Users_manager");
        $this->load->model("User_class");
        $this->load->library('form_validation');



    }

    /*
     * ------------------------------------------------------
     *  Méthodes d'affichages des pages
     * ------------------------------------------------------
     */


    /**
     * Front : Affichage de la page login
     */
    public function login()
    {
        $data['TITLE'] = "Connectez-vous";

        if (!empty($this->input->post())) {

            $id = $this->Users_manager->checkLogin($this->input->post('email'), $this->input->post('pwd'));

            if (!empty($id)) {
                if ($this->reCapchaV3($this->input->post('token'))) $this->connect($id);
            } else {
                $data['ERRORS'] = 'Identifiants de connexion incorrectes';
            }

        }

        $data['CONTENT'] = $this->smarty->fetch('front/login.tpl', $data);
        $this->smarty->display('front/templates/min-content.tpl', $data);

    }


    /**
     *  Front : Affichage de la page d'inscription
     */
    public function register()
    {

        $this->config->load('register');

        // chargement regle form-validation
        $this->form_validation->set_rules($this->config->item('register_rules'));

        // chargement données du formlaire
        $arrConfig = $this->config->item('register_form2');

        // création des inputs du formulaire
        foreach ($arrConfig as $name => $formGroup) {
            $strType = 'form_' . $formGroup['type'];
            $inputArray[$name][$formGroup['type']] = $strType($name, $this->input->post($name) ?? '', "id=input" . ucfirst($name) . " class='form-control' placeholder='" . $formGroup['name'] . "'");
            $inputArray[$name]['label'] = form_label($formGroup['name'], "input" . ucfirst($name));
        }

        // validation du formulaire
        if ($this->form_validation->run() == true) {

            if ($this->reCapchaV3($this->input->post('token'))) {

                $objUser = new User_class();
                $objUser->hydrate($this->input->post());
                $objUser->setProfil_id(1);
                $objUser->setAvatar('default.jpg');
                $lastInsertId = $this->Users_manager->new($objUser);
                $this->connect($lastInsertId);
            }

        } else {

            // retour messages d'erreurs
            foreach ($arrConfig as $name => $formGroup) {
                $inputArray[$name]['error'] = form_error($name, '<div class="invalid-feedback  d-block">', '</div>');
            }
        }


        $data['TITLE'] = "Inscrivez-vous";
        $data['inputArray'] = $inputArray;
        $data['CONTENT'] = $this->smarty->fetch('front/register.tpl', $data);
        $this->smarty->display('front/templates/min-content.tpl', $data);


    }

    /**
     * Front : Affichage de la page profile de l'utilisateur
     * test
     */
    public function profile()
    {
        $data['preTITLE'] = "Modifier mon Profil";
        $data['headerImg'] = "img-profile.jpg";


        // hydratation profile
        $objUser = new User_class();
        $objUser->hydrate($this->Users_manager->findOne($this->session->id));



        // chargement des données du formulaire
        $this->config->load('profile');
        $arrConfig = $this->config->item('user_profile');



        // création des inputs du formulaire
        foreach ($arrConfig as $name => $formGroup) {

            $inputArray[$name]['label'] = form_label($formGroup['name'], "input" . ucfirst($name), "class='small text-muted'");

            $strType = 'form_' . $formGroup['type'];
            $objMethod = "get" . ucfirst($name);

            $value = (method_exists($objUser, $objMethod)) ? $objUser->$objMethod() : '';
            $extra = "id=input" . ucfirst($name) . " class='form-control'";


            $inputArray[$name][$formGroup['type']] = $strType($name, $value, $extra);

        }

        // Chargement et implémentation des rules du form-validation
        $rules = $this->config->item('profile_rule');
        $this->form_validation->set_rules($rules);

        if (!empty($this->input->post('pwd')) || !empty($this->input->post('pconfg'))) {

            $this->form_validation->set_rules('pwd','Mot de passe','required|callback_pwd_check');
            $this->form_validation->set_rules('pconf','Confirmation mot de passe','trim|required|matches[pwd]');

        }

        if ($this->form_validation->run() == true) {


            $objUser->hydrate($this->input->post());

            // gestion de l'image
            $objUser = $this->uploadAvatar($objUser);

            $this->Users_manager->update($objUser);
            $data['SUCCESS'] = 'Votre profil a bien été modifié';


        } else {
            foreach ($arrConfig as $name => $formGroup) {
                $inputArray[$name]['error'] = form_error($name, '<div class="invalid-feedback d-block">', '</div>');
            }
        }



        $data['objUser'] = $objUser;
        $data['TITLE'] = $objUser->getPseudo();
        $data['inputArray'] = $inputArray;
        $data['CONTENT'] = $this->smarty->fetch('front/edit_profile.tpl', $data);
        $this->smarty->display('front/templates/content.tpl', $data);
    }


    public function uploadAvatar($objUser){

        if ($_FILES['avatar']['size'] > 0) {

            $configUpload['upload_path']   = './uploads/avatar/';
            $configUpload['allowed_types'] = 'jpg|jpeg|png';
            $configUpload['file_name']     = $objUser->getPseudo()."_".time();
            $configUpload['max_size']      = 2048;

            $this->load->library('upload',$configUpload);

            if (!$this->upload->do_upload('avatar')) {

                $data['ERRORS'] = $this->upload->display_errors();

            } else {

                $previous_img = "./uploads/avatar/".$objUser->getAvatar();

                if ($objUser->getAvatar() != 'default.jpg' && file_exists($previous_img)) unlink($previous_img);

                $upload_data = $this->upload->data();

                $configManip['image_library']  = 'gd2';
                $configManip['source_image']   = $upload_data['full_path'];
                $configManip['maintain_ratio'] = FALSE;
                $configManip['width']          = 300;
                $configManip['height']         = 300;


                $this->load->library('image_lib',$configManip);
                $this->image_lib->resize();


                $objUser->setAvatar($upload_data['file_name']);

            }
        }

        return $objUser;

    }


    /**
     * Back : Affichage de la liste des utilisateurs
     */
    public function listPage()
    {

        $data['TITLE'] = "Liste des Utilisateurs";

        $users = $this->Users_manager->findAll();
        $usersToDisplay = array();
        foreach ($users as $user) {
            $objUser = new User_class();
            $objUser->hydrate($user);
            $usersToDisplay[] = $objUser;
        }

        $data['arrUsers'] = $usersToDisplay;
        $data['CONTENT'] = $this->smarty->fetch('back/usersList.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);

    }


    /**
     * Back : Affichage de la page de création/modification d'un utilisateur
     * @param int $id identifiant utilisateur
     */
    public function addEdit($id = -1)
    {

        $objUser = new User_class();

        if ($id >= 0) {
            $objUser->hydrate($this->Users_manager->findOne($id));
        }

        if (!empty($this->input->post())) {

            // gestion de l'avatar
            $objUser = $this->uploadAvatar($objUser);

            $objUser->hydrate($this->input->post());


            if ($id < 0) {

                $insertId = $this->Users_manager->new($objUser);
                $this->session->set_flashdata("success", "L'utilisateur <b>{$objUser->getPseudo()}</b> a été ajouté");

                redirect('users/addEdit/' . $insertId, 'refresh');

            } else {

                $insertId = $this->Users_manager->update($objUser);
                $data['SUCCESS'] = "L'utilisateur <b>{$objUser->getPseudo()}</b> a été modifié";
            }
        }

        if ($id > 0) {

            $data['TITLE'] = "Modifier l'Utilisateur : " . $objUser->getPseudo();
            $data['buttonSubmit'] = "Modifier";
            $data['buttonCancel'] = "Revenir à la liste";

        } else {

            $data['TITLE'] = "Ajouter un nouvelle utilisateur";
            $data['buttonSubmit'] = "Ajouter l'utilisateur";
            $data['buttonCancel'] = "Annuler";

        }

        $data['objUser'] = $objUser;
        $data['CONTENT'] = $this->smarty->fetch('back/usersAdd.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);
    }



    /*
     * ------------------------------------------------------
     *  Méthodes d'actions et vérifications
     * ------------------------------------------------------
     */


    /**
     * Connection d'un utilisateur sur le site, ouverture de session
     * @param $id identifiant utilisateur
     */
    public function connect($id)
    {

        $arrUser = $this->Users_manager->getSessionData($id);
        $arrUser['login'] = TRUE;
        $this->session->set_userdata($arrUser);


        redirect('', 'refresh');

    }


    /**
     * Déconnection utilisateur, destruction de session
     */
    public function disconnect()
    {

        $this->session->sess_destroy();
        redirect('', 'refresh');

    }


    /**
     * Suprression d'un utilisateur
     * @param $id identifiant utilisateur
     */
    public function delete($id)
    {

        $this->Users_manager->delete($id);
        $this->session->set_flashdata('error', "L'Utilisateur #$id a été supprimé");
        redirect('users/ListPage', 'refresh');

    }


    /**
     * Fonction de vérification de l'email, callback pour le form-validation de la page register
     * @param $email string email à vérifier
     * @return bool false si un l'email est déjà présent dans la bdd, true si il n'est pas présent
     */
    public function email_check($email)
    {
        if (!empty($this->session->id)) {


            $user = $this->Users_manager->findOne($this->session->id);

            if ($user['user_email'] == $email) return true;

        }

        $test = $this->Users_manager->checkEmail($email);

        if ($test) {
            $this->form_validation->set_message('email_check', '{field} déjà utilisé.');
            return FALSE;
        } else {
            return TRUE;
        }
    }


    /**
     * Fonction de vérification du pseudo, callback pour le form-validation de la page register
     * @param $pseudo string pseudo à vérifier
     * @return bool false si le pseudo est déjà présent dans la bdd, true si il n'est pas présent
     */
    public function pseudo_check($pseudo)
    {
        if (!empty($this->session->id)) {

            $user = $this->Users_manager->findOne($this->session->id);

            if ($user['user_pseudo'] == $pseudo) return true;

        }

        $test = $this->Users_manager->checkPseudo($pseudo);


        if ($test) {
            $this->form_validation->set_message('pseudo_check', '{field} non disponible.');
            return FALSE;
        } else {
            return TRUE;
        }


    }


    /**
     * Fonction de vérification de la force du mot de passe (regEx), callback pour le form-validation de la page register
     * @param $pwd string mot de passe à vérifier
     * @return bool false si le mot de passe n'est pas assez fort true si il est assez fort
     */
    public function pwd_check($pwd)
    {

        if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#', $pwd)) {
            return TRUE;
        } else {
            $this->form_validation->set_message('pwd_check', 'le {field} doit contenir au moins 1 majuscule, 1 chiffre et 1 caractères spécial.');
            return FALSE;
        }


    }


    /**
     * Fonction reCapchaV3 de google utiliser dans register et login
     * @param $token string token envoyé par le formulaire
     * @return bool true si Google determine que l'utilisateur est Ok, sinon false
     */
    public function reCapchaV3($token)
    {

        $url = "https://www.google.com/recaptcha/api/siteverify";
        $data = [
            'secret' => '6LfwetYUAAAAAIINGieA0vyZH_eQ7ciDNxTeQhvL',
            'response' => $token,
            'remoteip' => $_SERVER['REMOTE_ADDR']

        ];

        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );

        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);

        $res = json_decode($response, true);
        if ($res{'success'} == true) {
            return true;
        } else {
            return false;
        }

    }

}

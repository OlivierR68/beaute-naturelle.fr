<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Users
 * @property  Users_manager
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */
class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Users_manager");
        $this->load->model("User_class");

    }


    public function login()
    {
        $data['TITLE'] = "Connectez-vous";

        if (!empty($this->input->post())) {

            $id = $this->Users_manager->checkLogin($this->input->post('email'), $this->input->post('pwd'));

            if (!empty($id)) {
                $this->connect($id);
            } else {
                $data['ERRORS'] = 'Identifiants de connexion incorrectes';
            }

        }

        $data['CONTENT'] = $this->smarty->fetch('front/login.tpl', $data);
        $this->smarty->display('front/templates/min-content.tpl', $data);

    }

    public function connect($id)
    {

        if($this->reCapchaV3()) {

            $arrUser = $this->Users_manager->getSessionData($id);
            $arrUser['login'] = TRUE;
            $this->session->set_userdata($arrUser);
            redirect('', 'refresh');

        }
    }

    public function disconnect()
    {

        $this->session->sess_destroy();
        redirect('', 'refresh');

    }


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


    public function addEdit($id = -1)
    {

        $objUser = new User_class();

        if ($id >= 0) {
            $objUser->hydrate($this->Users_manager->findOne($id));
        }

        if (!empty($this->input->post())) {

            $objUser->hydrate($this->input->post());


            if ($id < 0) {

                $insertId = $this->Users_manager->new($objUser);
                $this->session->set_flashdata("success", "Le slider <b>{$objUser->getPseudo()}</b> a été ajouté");

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

    public function delete($id)
    {

        $this->Users_manager->delete($id);
        $this->session->set_flashdata('error', "L'Utilisateur #$id a été supprimé");
        redirect('users/ListPage', 'refresh');

    }


    /**
     *  Fonction test form_validation
     */
    public function register()
    {

        $this->load->library('form_validation');
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

            if ($this->reCapchaV3()) {

                $objUser = new User_class();
                $objUser->hydrate($this->input->post());
                $objUser->setProfil_id(1);
                $lastInsertId = $this->Users_manager->createAccount($objUser);
                $this->connect($lastInsertId);
            }

        } else {

            // retour messages d'erreurs
            foreach ($arrConfig as $name => $formGroup) {
                $inputArray[$name]['error'] = form_error($name, '<div class="invalid-feedback  d-block">', '</div>');
            }
        }

        // reCapcha


        $data['TITLE'] = "Inscrivez-vous";
        $data['inputArray'] = $inputArray;
        $data['CONTENT'] = $this->smarty->fetch('front/register.tpl', $data);
        $this->smarty->display('front/templates/min-content.tpl', $data);


    }


    // callbacks du form validation

    public function email_check($email)
    {
        $test = $this->Users_manager->checkEmail($email);
        if ($test) {
            $this->form_validation->set_message('email_check', '{field} déjà utilisé.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function pseudo_check($pseudo)
    {
        $test = $this->Users_manager->checkPseudo($pseudo);
        if ($test) {
            $this->form_validation->set_message('pseudo_check', '{field} non disponible.');
            return FALSE;
        } else {
            return TRUE;
        }
    }


    public function pwd_check($pwd)
    {

        if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#', $pwd)) {
            return TRUE;
        } else {
            $this->form_validation->set_message('pwd_check', 'le {field} doit contenir au moins 1 majuscule, 1 chiffre et 1 caractères spécial.');
            return FALSE;
        }


    }

    public function reCapchaV3()
    {

        $url = "https://www.google.com/recaptcha/api/siteverify";
        $data = [
            'secret' => '6LfwetYUAAAAAIINGieA0vyZH_eQ7ciDNxTeQhvL',
            'response' => $this->input->post('token'),
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


    public function register2()
    {
        $data['preTITLE'] = "Devenez membre !";
        $data['TITLE'] = "Rejoignez-nous";
        $data['headerImg'] = "img-register.jpg";


        $data['CONTENT'] = $this->smarty->fetch('front/register2.tpl', $data);
        $this->smarty->display('front/templates/content.tpl', $data);
    }

}

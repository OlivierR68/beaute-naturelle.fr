<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Users
 * @property  Users_manager
 * @author  Olivier Ravinasaga
 * @version 1
 *
 */

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model("Users_manager");
        $this->load->model("User_class");

	}


	public function login()
	{
        $data['TITLE']	= "Connectez-vous";

        if (!empty($this->input->post())) {

            $id = $this->Users_manager->checkLogin($this->input->post('email'),$this->input->post('pwd'));

            if(!empty($id)) {
                $this->connect($id);
            } else {
                $data['ERRORS'] = 'Identifiants de connexion incorrectes';
            }

        }

        $data['CONTENT'] = $this->smarty->fetch('front/login.tpl', $data);
        $this->smarty->display('front/min-content.tpl', $data);

	}

	public function connect($id)
    {

        $arrUser = $this->Users_manager->getSessionData($id);
        $arrUser['login'] = TRUE;
        $this->session->set_userdata($arrUser);
        redirect('', 'refresh');

    }

    public function disconnect()
    {


        $this->session->sess_destroy();
        redirect('', 'refresh');

    }

	public function register()
    {
        $data['TITLE']	= "Inscrivez-vous";

        $objUser = new User_class();

        if (!empty($this->input->post())) {

            $objUser->hydrate($this->input->post());
            $objUser->setProfil_id(1);

            $checkPseudo = $this->Users_manager->checkPseudo($this->input->post('pseudo'));
            $checkEmail  = $this->Users_manager->checkEmail($this->input->post('email'));

            if ($checkPseudo) {

                $data['ERRORS'] = "Pseudo non disponible";

            } else {

                if ($checkEmail) {

                    $data['ERRORS'] = "Email déjà utilisé";

                } else {

                    $lastInsertId = $this->Users_manager->createAccount($objUser);
                    $this->connect($lastInsertId);
                }
            }
        }

        $data['objUser'] = $objUser;
        $data['CONTENT'] = $this->smarty->fetch('front/register.tpl', $data);
        $this->smarty->display('front/min-content.tpl', $data);
	}


}

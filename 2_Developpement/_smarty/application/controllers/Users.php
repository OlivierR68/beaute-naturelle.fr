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
		$data['preTITLE']	= "Magasin & Institut";
		$data['TITLE'] 		= "A propos de Beauté Naturelle";
		$data['headerImg']	= "img-institut.jpg";

		$data['CONTENT'] = $this->load->view('front/login', $data, TRUE);
		$this->load->view('front/min-content', $data);

	}

	public function connect($id)
    {
        $this->session->sess_destroy();

        $arruser = $this->Users_manager->getSessionData($id);
        $this->session->set_userdata($arruser);

        redirect('', 'refresh');

    }

    public function disconnect()
    {


        $this->session->sess_destroy();
        redirect('', 'refresh');

    }

	public function register()
	{

		$data['preTITLE']	= "Créer votre compte";
		$data['TITLE'] 		= "Rejoignez notre communauté!";
		$data['headerImg']	= "img-register.jpg";

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

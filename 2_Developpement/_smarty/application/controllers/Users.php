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


    public function listPage() {

        $data['TITLE'] 	= "Liste des Utilisateurs";

        $users	= $this->Users_manager->findAll();
        $usersToDisplay = array();
        foreach($users as $user){
            $objUser 	= new User_class();
            $objUser->hydrate($user);
            $usersToDisplay[] = $objUser;
        }

        $data['arrUsers'] 	= $usersToDisplay;
        $data['CONTENT'] = $this->smarty->fetch('back/usersList.tpl', $data);
        $this->smarty->display('back/content.tpl', $data);

    }


    public function addEdit($id = -1)
    {

        $objUser = new User_class();

        if($id >= 0) {
            $objUser->hydrate($this->Users_manager->findOne($id));
        }

        if(!empty($this->input->post())){

            $objUser->hydrate($this->input->post());


            if($id < 0){

                $insertId = $this->Users_manager->new($objUser);
                $this->session->set_flashdata("success", "Le slider <b>{$objUser->getPseudo()}</b> a été ajouté");

                redirect('users/addEdit/'.$insertId, 'refresh');

            } else {

                $insertId = $this->Users_manager->update($objUser);
                $data['SUCCESS'] = "L'utilisateur <b>{$objUser->getPseudo()}</b> a été modifié";
            }
        }

        if ($id > 0) {

            $data['TITLE'] 		= "Modifier l'Utilisateur : ".$objUser->getPseudo();
            $data['buttonSubmit']  = "Modifier";
            $data['buttonCancel']  = "Revenir à la liste";

        } else {

            $data['TITLE'] 	= "Ajouter un nouvelle utilisateur";
            $data['buttonSubmit']  = "Ajouter l'utilisateur";
            $data['buttonCancel']  = "Annuler";

        }

        $data['objUser']	= $objUser;
        $data['CONTENT'] = $this->smarty->fetch('back/usersAdd.tpl', $data);
        $this->smarty->display('back/content.tpl', $data);
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
    public function register2()
    {
        $data['TITLE']	= "Inscrivez-vous 2";
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pseudo', 'Pseudo', 'required');
        $this->form_validation->set_rules('last_name', 'Nom', 'required');
        $this->form_validation->set_rules('first_name', 'Prenom', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('pwd', 'Mot de passe', 'required');
        $this->form_validation->set_rules('pconf', 'Confirmation mot de passe', 'required');


        if ($this->form_validation->run() == TRUE)
        {
            $data['SUCCESS'] = 'SA MARCHE!';
        }

        $data['CONTENT'] = $this->smarty->fetch('front/register.tpl', $data);
        $this->smarty->display('front/min-content.tpl', $data);
    }


}

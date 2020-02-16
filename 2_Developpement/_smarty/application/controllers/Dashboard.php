<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Dashboard
 * Controller du tableau de bord du back office
 */
class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();

        $this->load->model('Events_manager');
        $this->load->model('Event_class');

        $this->load->model('Users_manager');
        $this->load->model('User_class');

        $this->load->model('Images_manager');
        $this->load->model('Images_class');
	}

	/** Back : Affichage du tableau de bord */
	public function index()
	{

		$data['TITLE'] 		= "Tableau de bord";



        $register_request_list = array();
        $requests_data = $this->Events_manager->getRequest();
        $tableau_des_enfers = [];
        foreach ($requests_data as $index) {

            $index['event_filling'] = $this->Events_manager->getFilling($index['event_id']);
            $tableau_des_enfers[] =  $index;

        }


        $tableau_des_enfers_le_retour = $this->Images_manager->getModerate();


        $data['requests_img'] = $tableau_des_enfers_le_retour;
        $data['requests_data'] = $tableau_des_enfers;

        $data['CONTENT'] = $this->smarty->fetch('back/dashboard.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);
	}



}

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
	}

	/** Back : Affichage du tableau de bord */
	public function index()
	{

		$data['TITLE'] 		= "Tableau de bord";


        $register_request_list = array();
        $requests_data = $this->Events_manager->getRequest();

        $events = $this->Events_manager->findAll();
        $eventsToDisplay = array();
        foreach ($events as $event) {
            $objEvent = new Event_class();
            $objEvent->hydrate($event);

            $filling = $this->Events_manager->getFilling($objEvent->getId());
            $objEvent->setFilling($filling);

            $eventsToDisplay[] = $objEvent;
        }

        $data['arrEvents'] = $eventsToDisplay;



        $data['requests_data'] = $requests_data;

        $data['CONTENT'] = $this->smarty->fetch('back/dashboard.tpl', $data);
        $this->smarty->display('back/templates/content.tpl', $data);
	}


}
